<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
class UpdateProfileInformationForm extends Component {

    public string $username = '', $firstname = '', $lastname = '', $middlename = '', $email = '', $phone = '', $birthday = '', $age = '', $password = '', $password_confirmation = '';
    public array $birthplace = [], $address = [];

    public function mount() {
        $this->username = Auth::user()->username ?? '';
        $this->firstname = Auth::user()->firstname;
        $this->lastname = Auth::user()->lastname;
        $this->middlename = Auth::user()->middlename ?? '';
        $this->birthday = optional(Auth::user()->birthdate)->format('Y-m-d');
        $this->age = Auth::user()->age;
        $this->birthplace = [
            'city' => Auth::user()->birthplace['city'] ?? '',
            'country' => Auth::user()->birthplace['country'] ?? '',
        ];
        $this->address = [
            'street' => Auth::user()->address['street'] ?? '',
            'city' => Auth::user()->address['city'] ?? '',
            'state' => Auth::user()->address['state'] ?? '',
            'country' => Auth::user()->address['country'] ?? '',
            'zip' => Auth::user()->address['zip'] ?? '',
        ];

        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone ?? '';
    }


    public function render()
    {
        return view('livewire.profile.update-profile-information-form');
    }
}
