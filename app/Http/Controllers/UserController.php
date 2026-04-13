<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected function developersQuery()
    {
        return User::whereHas('roles', function ($query) {
            $query->where('name', 'Developer');
        });
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->developersQuery()
            ->latest()
            ->paginate(config('app.pagination_per_page'));

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|string',
            'designation' => 'nullable|string|max:255',
        ]);

        $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'designation' => $request->designation,
                ]);

        if ($request->avatar) {
            $image = $request->avatar;
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = base64_decode($image);

            $fileName = 'avatars/'.uniqid().'.png';
            Storage::disk('public')->put($fileName, $image);

            $user->avatar = '/storage/'.$fileName;

            $user->save();
        }

        $user->syncRoles(['Developer']);

        return redirect()->route('users.index')->with('success', 'Team member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_unless(auth()->user()->hasRole('Admin'), 403);

        $user = $this->developersQuery()->findOrFail($id);

        return view('users.form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort_unless(auth()->user()->hasRole('Admin'), 403);

        $user = $this->developersQuery()->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'avatar' => 'nullable|string',
            'designation' => 'nullable|string|max:255',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->designation = $request->designation;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->avatar) {
            $image = $request->avatar;
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = base64_decode($image);

            $fileName = 'avatars/'.uniqid().'.png';
            Storage::disk('public')->put($fileName, $image);

            $user->avatar = '/storage/'.$fileName;
        }

        $user->save();

        $user->syncRoles(['Developer']);

        return redirect()->route('users.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_unless(auth()->user()->hasRole('Admin'), 403);

        $user = $this->developersQuery()->findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Team member deleted successfully.');
    }
}
