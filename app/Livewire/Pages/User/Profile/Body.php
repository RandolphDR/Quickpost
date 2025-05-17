<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;
use App\Models\{User, Post};

class Body extends Component
{
    public ?string $username = null;
    public $user;

    public function mount($username)
    {
        $this->username = $username;
        $this->user = User::select([
            'id',
            'role',
        ])
            ->where('username', $this->username)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.user.profile.body');
    }
}
