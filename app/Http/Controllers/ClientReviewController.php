<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ClientReview::paginate(config('app.pagination_per_page'));

        return view('client-reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client-reviews.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'video_link' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:51200', // 50MB max
            'duration' => 'nullable|string|max:100',
        ]);

        $data = $request->except('video_link');

        // Handle video upload
        if ($request->hasFile('video_link')) {
            $videoPath = $request->file('video_link')->store('client-reviews/videos', 'public');
            $data['video_link'] = asset('storage/' . $videoPath);
        }

        ClientReview::create($data);

        return redirect()->route('client-reviews.index')->with('success', 'Client review created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientReview $clientReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientReview $clientReview)
    {
        return view('client-reviews.form', compact('clientReview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientReview $clientReview)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'video_link' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:51200', // 50MB max
            'duration' => 'nullable|string|max:100',
        ]);

        $data = $request->except('video_link');

        // Handle video upload
        if ($request->hasFile('video_link')) {
            // Delete old video if exists
            if ($clientReview->video_link && Storage::disk('public')->exists($clientReview->video_link)) {
                Storage::disk('public')->delete($clientReview->video_link);
            }

            // Upload new video
            $videoPath = $request->file('video_link')->store('client-reviews/videos', 'public');
            $data['video_link'] = asset('storage/' . $videoPath);
        }

        $clientReview->update($data);

        return redirect()->route('client-reviews.index')->with('success', 'Client review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientReview $clientReview)
    {
        // Delete video file if exists
        if ($clientReview->video_link && Storage::disk('public')->exists($clientReview->video_link)) {
            Storage::disk('public')->delete($clientReview->video_link);
        }

        $clientReview->delete();

        return redirect()->route('client-reviews.index')->with('success', 'Client review deleted successfully.');
    }
}
