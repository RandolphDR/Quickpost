<?php

namespace App\Livewire\Components\Dashboard\Users;

use Livewire\Component;
use App\Models\User;

class SummaryCard extends Component {

    public $users;
    public int $totalUsers = 0, $totalRegularUsers = 0, $totalAdmins = 0, $totalDevelopers = 0, $totalTrashUsers = 0;

    public function placeholder() {
        return <<<'HTML'
            <div class="w-[300px] gap-4 p-4 flex flex-col justify-start bg-white/70 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="w-full flex justify-between items-center">
                    <span class="w-10 h-10 rounded-lg animate-shine"></span>
                    <span class="w-3 h-6 rounded-lg animate-shine"></span>
                </div>
                <div class="w-full flex justify-between items-center mt-2">
                    <div class="gap-2 flex flex-col">
                        <span class="w-20 h-5 rounded-lg animate-shine"></span>
                        <span class="w-10 h-8 rounded-lg animate-shine"></span>
                    </div>
                </div>

                <hr class="w-full my-2 border-gray-300 dark:border-gray-600">

                <div class="w-full flex flex-col gap-2">
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="w-24 h-4 rounded-lg animate-shine"></span>
                        <span class="w-8 h-4 rounded-lg animate-shine"></span>
                    </div>
                </div>
            </div>
        HTML;
    }

    public function mount() {
        $this->users = User::select('id', 'role')->get();
        $this->totalUsers = User::withTrashed()->count();
        $this->totalRegularUsers = $this->users->where('role', 'user')->count();
        $this->totalAdmins = $this->users->where('role', 'admin')->count();
        $this->totalDevelopers = $this->users->where('role', 'developer')->count();
        $this->totalTrashUsers = User::onlyTrashed()->count();
    }

    public function render() {
        return view('livewire.components.dashboard.users.summary-card');
    }
}
