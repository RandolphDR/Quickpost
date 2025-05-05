<?php

namespace App\Livewire\Pages\User\Profile;

use Livewire\Component;

class Stats extends Component {

    public function mount($username) {

    }
    
    public function render()
    {
        return view('livewire.pages.user.profile.stats');
    }
}
