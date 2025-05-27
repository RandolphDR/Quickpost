<?php

namespace App\Livewire\Components\Dashboard\Users;

use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, Gate};
use App\Models\User;

class All extends Component
{

    use WithPagination;

    public function deleteUser($userId)
    {

        $user = User::select(['id'])->findOrFail($userId);

        if (Gate::denies('administrator-access')) {
            $this->dispatch('notify', [
                'message' => 'You are not authorized to delete this user.',
                'type' => 'error',
            ]);
            return;
        }

        $user->delete();

        $this->dispatch('notify', [
            'message' => 'User deleted successfully.',
            'type' => 'success',
        ]);
    }

    public function render()
    {
        $query = User::select([
            'id',
            'avatar',
            'username',
            'firstname',
            'middlename',
            'lastname',
            'birthdate',
            'address',
            'phone',
            'email',
            'role',
            'account_status',
            'is_verified',
            'created_at',
            'updated_at'
        ])
            ->orderBy('id', 'asc');

        return view('livewire.components.dashboard.users.all', [
            'allUsers' => $query->paginate(10),
        ]);
    }
}
