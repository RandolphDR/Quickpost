<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;

use App\Models\User;

class Header extends Component {

    public $user;

    public function mount($username) {
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

    }

    public function render() {
        return view('livewire.pages.user.profile.header');
    }
}
