<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'name',
        'title',
        'slug',
        'description',
        'client',
        'category',
        'link',
        'images',
        'technology',
        'technologies',
        'logo',
        'image',
        'review',
        'rating',
        'video_link',
        'is_published',
        'sort_order',
        'start_date',
        'end_date',
        'is_ongoing',
    ];

    protected $casts = [
        'is_ongoing' => 'boolean',
        'is_published' => 'boolean',
        'rating' => 'integer',
        'sort_order' => 'integer',
        'images' => 'array',
        'technology' => 'array',
        'technologies' => 'array',
    ];

    protected static function booted()
    {
        static::saving(function (Project $project) {
            // Synchronize title and name
            if (empty($project->title) && !empty($project->name)) {
                $project->title = $project->name;
            } elseif (empty($project->name) && !empty($project->title)) {
                $project->name = $project->title;
            }

            // Generate slug if missing
            if (empty($project->slug) && (!empty($project->title) || !empty($project->name))) {
                $project->slug = Str::slug($project->title ?: $project->name);
            }

            // Synchronize logo and image
            if (empty($project->image) && !empty($project->logo)) {
                $project->image = $project->logo;
            } elseif (empty($project->logo) && !empty($project->image)) {
                $project->logo = $project->image;
            }

            // Synchronize technologies arrays
            if (empty($project->technologies) && !empty($project->technology)) {
                $tech = $project->technology;
                if (is_array($tech)) {
                    $project->technologies = array_values(array_filter(array_map(function ($item) {
                        return is_array($item) ? trim($item['value'] ?? '') : trim($item);
                    }, $tech)));
                }
            } elseif (empty($project->technology) && !empty($project->technologies)) {
                $techs = $project->technologies;
                if (is_array($techs)) {
                    $project->technology = array_map(function ($item) {
                        return ['value' => is_array($item) ? ($item['value'] ?? '') : (string) $item];
                    }, $techs);
                }
            }
        });
    }

    public function getTitleAttribute($value)
    {
        return $value ?: ($this->attributes['name'] ?? '');
    }

    public function getNameAttribute($value)
    {
        return $value ?: ($this->attributes['title'] ?? '');
    }

    public function getImageAttribute($value)
    {
        return $value ?: ($this->attributes['logo'] ?? '');
    }

    public function getLogoAttribute($value)
    {
        return $value ?: ($this->attributes['image'] ?? '');
    }

    public function getImageUrlAttribute()
    {
        $img = $this->attributes['image'] ?? $this->attributes['logo'] ?? null;
        if (empty($img)) {
            return null;
        }

        // 1. Full external URL
        if (str_starts_with($img, 'http://') || str_starts_with($img, 'https://')) {
            return $img;
        }

        // 2. Starts with /storage/ or storage/
        if (str_starts_with($img, '/storage/')) {
            return $img;
        }
        if (str_starts_with($img, 'storage/')) {
            return '/' . $img;
        }

        // 3. Starts with /images/ or images/
        if (str_starts_with($img, '/images/')) {
            return $img;
        }
        if (str_starts_with($img, 'images/')) {
            return '/' . $img;
        }

        // 4. Relative path on public storage disk (e.g. 'projects/1/logo/xyz.png')
        if (\Illuminate\Support\Facades\Storage::disk('public')->exists($img)) {
            return \Illuminate\Support\Facades\Storage::disk('public')->url($img);
        }

        // 5. Prepend /storage/ if file exists in public/storage
        if (file_exists(public_path('storage/' . ltrim($img, '/')))) {
            return '/storage/' . ltrim($img, '/');
        }

        return '/' . ltrim($img, '/');
    }

    public function getLogoUrlAttribute()
    {
        return $this->image_url;
    }

    public function getTechnologiesAttribute($value)
    {
        $arr = is_string($value) ? json_decode($value, true) : $value;
        if (is_array($arr) && count($arr) > 0) {
            return array_values(array_filter(array_map(function ($item) {
                return is_array($item) ? trim($item['value'] ?? '') : trim($item);
            }, $arr)));
        }

        // Fallback to legacy technology field
        if (!empty($this->attributes['technology'])) {
            $tech = is_string($this->attributes['technology'])
                ? json_decode($this->attributes['technology'], true)
                : $this->attributes['technology'];

            if (is_array($tech)) {
                return array_values(array_filter(array_map(function ($item) {
                    return is_array($item) ? trim($item['value'] ?? '') : trim($item);
                }, $tech)));
            }
        }

        return [];
    }
}
