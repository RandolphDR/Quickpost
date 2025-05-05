<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;

use App\Models\User;

class Header extends Component
{

    public $user, $postCount, $likeCount;

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

        $this->postCount = $this->user->posts()->count();

        $this->likeCount = $this->user->posts()->withCount('likes')->get()->sum('likes_count');
    }

    public function render()
    {
        return view('livewire.pages.user.profile.header');
    }
}
