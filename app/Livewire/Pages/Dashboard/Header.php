<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use Carbon\Carbon;

class Header extends Component {

    public $dateToday, $greetings;

    public function mount() {
        $now = Carbon::now();
        $this->dateToday = $now->format('l, jS F Y');

        $hour = $now->hour;
        $this->greetings = match (true) {
            $hour < 12 => 'Good Morning',
            $hour < 18 => 'Good Afternoon',
            default => 'Good Evening',
        };
    }

    public function render() {
        return view('livewire.pages.dashboard.header');
    }
}
