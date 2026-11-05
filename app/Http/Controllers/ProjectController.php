<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(config('app.pagination_per_page'));

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
        $rules = [
            'title' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'technology' => 'nullable|string',
            'images' => 'nullable',
            'review' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'video_link' => 'nullable|string|max:255',
            'is_published' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_ongoing' => 'nullable|boolean',
        ];

        if ($request->hasFile('logo')) {
            $rules['logo'] = 'required|image|mimes:jpeg,png,jpg,webp|max:5120';
        } else {
            $rules['logo'] = 'nullable|string|max:5000000';
        }

        $request->validate($rules);

        $title = $request->title ?: $request->name ?: 'Untitled Project';

        $data = $request->except(['logo', 'images', 'image']);
        $data['title'] = $title;
        $data['name'] = $title;
        $data['slug'] = Str::slug($title);
        $data['is_ongoing'] = $request->has('is_ongoing');
        $data['is_published'] = $request->has('is_published');
        $data['rating'] = $request->filled('rating') ? (int) $request->rating : 5;
        $data['sort_order'] = $request->filled('sort_order') ? (int) $request->sort_order : 0;

        // Process technologies from Tagify or input
        if ($request->filled('technology')) {
            $rawTech = $request->technology;
            $decoded = is_string($rawTech) ? json_decode($rawTech, true) : $rawTech;
            if (is_array($decoded)) {
                $tags = [];
                $tagifyArr = [];
                foreach ($decoded as $item) {
                    $val = is_array($item) ? trim($item['value'] ?? '') : trim($item);
                    if ($val !== '') {
                        $tags[] = $val;
                        $tagifyArr[] = ['value' => $val];
                    }
                }
                $data['technologies'] = $tags;
                $data['technology'] = $tagifyArr;
            }
        } else {
            $data['technologies'] = [];
            $data['technology'] = [];
        }

        $project = Project::create($data);

        // Process single logo / featured image upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = strtolower($file->getClientOriginalExtension() ?: 'png');
            $fileName = uniqid() . '.' . $extension;
            $path = $file->storeAs('projects/' . $project->id . '/logo', $fileName, 'public');

            $project->update([
                'logo' => '/storage/' . $path,
                'image' => '/storage/' . $path,
            ]);
        } elseif ($request->filled('logo')) {
            $logo = $request->logo;
            if (str_starts_with($logo, 'data:image/')) {
                preg_match('/data:image\/(\w+);base64,/', $logo, $matches);
                $extension = $matches[1] ?? 'png';
                $logo = preg_replace('/data:image\/\w+;base64,/', '', $logo);
                $logo = base64_decode($logo);
                $fileName = 'projects/' . $project->id . '/logo/' . uniqid() . '.' . $extension;
                Storage::disk('public')->put($fileName, $logo);

                $project->update([
                    'logo' => '/storage/' . $fileName,
                    'image' => '/storage/' . $fileName,
                ]);
            } else {
                $project->update([
                    'logo' => $logo,
                    'image' => $logo,
                ]);
            }
        }

        // Process bulk screenshots / gallery images
        if ($request->filled('images')) {
            $images = [];

            foreach (explode('||', $request->images) as $imageData) {
                if (str_starts_with($imageData, 'data:image/')) {
                    preg_match('/data:image\/(\w+);base64,/', $imageData, $matches);
                    $extension = $matches[1] ?? 'png';
                    $image = preg_replace('/data:image\/\w+;base64,/', '', $imageData);
                    $image = base64_decode($image);
                    $fileName = 'projects/'.$project->id.'/images/'.uniqid().'.'.$extension;
                    Storage::disk('public')->put($fileName, $image);

                    $images[] = '/storage/'.$fileName;
                } else {
                    $images[] = $imageData;
                }
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
        return redirect()->route('projects.edit', $project->id);
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
        $rules = [
            'title' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'technology' => 'nullable|string',
            'images' => 'nullable',
            'review' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'video_link' => 'nullable|string|max:255',
            'is_published' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_ongoing' => 'nullable|boolean',
        ];

        if ($request->hasFile('logo')) {
            $rules['logo'] = 'required|image|mimes:jpeg,png,jpg,webp|max:5120';
        } else {
            $rules['logo'] = 'nullable|string|max:5000000';
        }

        $request->validate($rules);

        $title = $request->title ?: $request->name ?: $project->title ?: $project->name;

        $data = $request->except(['logo', 'images', 'image']);
        $data['title'] = $title;
        $data['name'] = $title;
        $data['slug'] = $project->slug ?: Str::slug($title);
        $data['is_ongoing'] = $request->has('is_ongoing');
        $data['is_published'] = $request->has('is_published');
        $data['rating'] = $request->filled('rating') ? (int) $request->rating : 5;
        $data['sort_order'] = $request->filled('sort_order') ? (int) $request->sort_order : 0;

        // Process technologies from Tagify or input
        if ($request->filled('technology')) {
            $rawTech = $request->technology;
            $decoded = is_string($rawTech) ? json_decode($rawTech, true) : $rawTech;
            if (is_array($decoded)) {
                $tags = [];
                $tagifyArr = [];
                foreach ($decoded as $item) {
                    $val = is_array($item) ? trim($item['value'] ?? '') : trim($item);
                    if ($val !== '') {
                        $tags[] = $val;
                        $tagifyArr[] = ['value' => $val];
                    }
                }
                $data['technologies'] = $tags;
                $data['technology'] = $tagifyArr;
            }
        }

        $oldLogoPath = $project->logo;

        // Process logo / image change:
        // If a new file is uploaded, store it FIRST on public disk.
        // Only if storage succeeds, update path and delete previous file if on public disk.
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = strtolower($file->getClientOriginalExtension() ?: 'png');
            $fileName = uniqid() . '.' . $extension;
            $path = $file->storeAs('projects/' . $project->id . '/logo', $fileName, 'public');

            if ($path) {
                $data['logo'] = '/storage/' . $path;
                $data['image'] = '/storage/' . $path;

                // Safely delete old logo file if it was stored in /storage/projects/...
                if (!empty($oldLogoPath) && str_starts_with($oldLogoPath, '/storage/projects/')) {
                    $relativeOld = Str::after($oldLogoPath, '/storage/');
                    if ($relativeOld !== $path && Storage::disk('public')->exists($relativeOld)) {
                        Storage::disk('public')->delete($relativeOld);
                    }
                }
            }
        } elseif ($request->filled('logo') && str_starts_with($request->logo, 'data:image/')) {
            $logo = $request->logo;
            preg_match('/data:image\/(\w+);base64,/', $logo, $matches);
            $extension = $matches[1] ?? 'png';
            $logoData = preg_replace('/data:image\/\w+;base64,/', '', $logo);
            $logoData = base64_decode($logoData);
            $fileName = 'projects/' . $project->id . '/logo/' . uniqid() . '.' . $extension;

            if (Storage::disk('public')->put($fileName, $logoData)) {
                $data['logo'] = '/storage/' . $fileName;
                $data['image'] = '/storage/' . $fileName;

                if (!empty($oldLogoPath) && str_starts_with($oldLogoPath, '/storage/projects/')) {
                    $relativeOld = Str::after($oldLogoPath, '/storage/');
                    if ($relativeOld !== $fileName && Storage::disk('public')->exists($relativeOld)) {
                        Storage::disk('public')->delete($relativeOld);
                    }
                }
            }
        }

        // Process images update
        if ($request->filled('images')) {
            $images = [];

            Storage::disk('public')->deleteDirectory('projects/'.$project->id.'/images/');

            foreach (explode('||', $request->images) as $imageData) {
                if (str_starts_with($imageData, 'data:image/')) {
                    preg_match('/data:image\/(\w+);base64,/', $imageData, $matches);
                    $extension = $matches[1] ?? 'png';
                    $image = preg_replace('/data:image\/\w+;base64,/', '', $imageData);
                    $image = base64_decode($image);
                    $fileName = 'projects/'.$project->id.'/images/'.uniqid().'.'.$extension;
                    Storage::disk('public')->put($fileName, $image);

                    $images[] = '/storage/'.$fileName;
                } else {
                    $images[] = $imageData;
                }
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
