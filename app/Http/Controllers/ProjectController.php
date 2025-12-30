<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(config('global.pagination_count'));

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'logo' => 'nullable|string',
            'technology' => 'nullable|string|max:255',
            'images' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_ongoing' => 'nullable|boolean',
        ]);

        $data = $request->except('logo');

        $project = Project::create($data);

        if ($request->has('logo') && $request->logo) {
            $logo = $request->logo;
            preg_match('/data:image\/(\w+);base64,/', $logo, $matches);
            $extension = $matches[1] ?? 'png';
            $logo = preg_replace('/data:image\/\w+;base64,/', '', $logo);
            $logo = base64_decode($logo);
            $fileName = 'projects/'.$project->id.'/logo/'.uniqid().'.'.$extension;
            Storage::disk('public')->put($fileName, $logo);

            $project->update(['logo' => '/storage/'.$fileName]);
        }

        if ($request->has('images') && $request->images) {
            $images = [];

            foreach (explode('||', $request->images) as $index => $imageData) {
                preg_match('/data:image\/(\w+);base64,/', $imageData, $matches);
                $extension = $matches[1] ?? 'png';
                $image = preg_replace('/data:image\/\w+;base64,/', '', $imageData);
                $image = base64_decode($image);
                $fileName = 'projects/'.$project->id.'/images/'.uniqid().'.'.$extension;
                Storage::disk('public')->put($fileName, $image);

                $images[] = '/storage/'.$fileName;
            }

            $project->update(['images' => $images]);
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.form', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'logo' => 'nullable|string',
            'technology' => 'nullable|string|max:255',
            'images' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_ongoing' => 'nullable|boolean',
        ]);

        $data = $request->except('logo');

        if ($request->has('logo') && $request->logo) {
            Storage::disk('public')->deleteDirectory('projects/'.$project->id.'/logo/');

            $logo = $request->logo;
            preg_match('/data:image\/(\w+);base64,/', $logo, $matches);
            $extension = $matches[1] ?? 'png';
            $logo = preg_replace('/data:image\/\w+;base64,/', '', $logo);
            $logo = base64_decode($logo);
            $fileName = 'projects/'.$project->id.'/logo/'.uniqid().'.'.$extension;
            Storage::disk('public')->put($fileName, $logo);

            $data['logo'] = '/storage/'.$fileName;
        }

        if ($request->has('images') && $request->images) {
            $images = [];

            Storage::disk('public')->deleteDirectory('projects/'.$project->id.'/images/');

            foreach (explode('||', $request->images) as $index => $imageData) {
                preg_match('/data:image\/(\w+);base64,/', $imageData, $matches);
                $extension = $matches[1] ?? 'png';
                $image = preg_replace('/data:image\/\w+;base64,/', '', $imageData);
                $image = base64_decode($image);
                $fileName = 'projects/'.$project->id.'/images/'.uniqid().'.'.$extension;
                Storage::disk('public')->put($fileName, $image);

                $images[] = '/storage/'.$fileName;
            }

            $data['images'] = $images;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
