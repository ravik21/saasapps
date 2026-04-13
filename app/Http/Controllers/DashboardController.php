<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use App\Models\ContactSubmission;
use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    protected function developerUsersQuery()
    {
        return User::whereHas('roles', function ($query) {
            $query->where('name', 'Developer');
        });
    }

    public function index()
    {
        $stats = [
            'teams' => $this->developerUsersQuery()->count(),
            'projects' => Project::count(),
            'client_reviews' => ClientReview::count(),
            'contact_submissions' => ContactSubmission::count(),
            'pending_replies' => ContactSubmission::whereNull('replied_at')->count(),
            'new_contacts_this_week' => ContactSubmission::where('created_at', '>=', now()->subDays(7))->count(),
        ];

        $recentContactSubmissions = ContactSubmission::latest()->take(6)->get();
        $recentProjects = Project::latest()->take(5)->get();
        $recentUsers = $this->developerUsersQuery()->latest()->take(5)->get();
        $latestReview = ClientReview::latest()->first();

        return view('dashboard', compact('stats', 'recentContactSubmissions', 'recentProjects', 'recentUsers', 'latestReview'));
    }
}
