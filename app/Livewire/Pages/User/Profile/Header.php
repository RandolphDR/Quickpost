<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;

use App\Models\User;

class Header extends Component
{

    public $user, $totalPostCount, $totalLikeCount;

    public function mount($username)
    {
        $this->user = User::select([
            'id',
            'avatar',
            'username',
            'firstname',
            'middlename',
            'lastname',
            'is_verified',
        ])
            ->where('username', $username)
            ->firstOrFail();

        $this->totalPostCount = $this->user->posts()->count();
        $this->totalLikeCount = $this->user->posts()->withCount('likes')->get()->sum('likes_count');
    }

    public function render()
    {
        return view('livewire.pages.user.profile.header');
    }
}
