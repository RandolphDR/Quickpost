<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\{User, Post, Category};

class Dashboard extends Component
{

    public $dateToday, $greetings, $users, $posts;
    public int $totalUsers = 0, $totalRegularUsers = 0, $totalAdmins = 0, $totalDevelopers = 0, $totalTrashUsers = 0;
    public int $totalBlogs = 0, $totalPublished = 0, $totalDrafts = 0, $totalTrashBlogs = 0;

    public function mount()
    {
        $now = Carbon::now();
        $this->dateToday = $now->format('l, jS F Y');

        $hour = $now->hour;
        $this->greetings = match (true) {
            $hour < 12 => 'Good Morning',
            $hour < 18 => 'Good Afternoon',
            default => 'Good Evening',
        };

        $this->users = User::select('id', 'role')->get();

        $this->totalUsers = User::withTrashed()->count();
        $this->totalRegularUsers = $this->users->where('role', 'user')->count();
        $this->totalAdmins = $this->users->where('role', 'admin')->count();
        $this->totalDevelopers = $this->users->where('role', 'developer')->count();
        $this->totalTrashUsers = User::onlyTrashed()->count();

        $this->posts = Post::select('id', 'status')->get();

        $this->totalBlogs = Post::withTrashed()->count();
        $this->totalPublished = Post::where('status', 'published')->count();
        $this->totalDrafts = Post::where('status', 'draft')->count();
        $this->totalTrashBlogs = Post::onlyTrashed()->count();
    }

    public function render()
    {
        return view('livewire.pages.dashboard.dashboard');
    }
}
