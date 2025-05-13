<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;
use App\Models\User;

class Stats extends Component
{
    public $user, $birthday, $createdAt;
    public array $birthplace = [];
    public array $address = [];

    public function mount($username)
    {
        $this->user = User::select([
            'id',
            'firstname',
            'lastname',
            'middlename',
            'age',
            'birthdate',
            'birthplace',
            'address',
            'bio',
            'email',
            'phone',
            'role',
            'account_status',
            'is_verified',
            'created_at'
        ])
            ->where('username', $username)
            ->firstOrFail();

        $this->birthday = $this->user->birthdate->format('F d, Y');
        $this->birthplace = is_array($this->user->birthplace) ? $this->user->birthplace : [];
        $this->address = is_array($this->user->address) ? $this->user->address : [];
        $this->createdAt = $this->user->created_at->format('F Y');
    }

    public function render()
    {
        return view('livewire.pages.user.profile.stats');
    }
}
