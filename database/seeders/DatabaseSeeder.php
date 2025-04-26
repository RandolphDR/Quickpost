<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() {

        User::factory()->create([
            'first_name' => 'Randolph',
            'last_name' => 'Saludo',
            'middle_name' => 'Soriano',
            'age' => 20,
            'birthdate' => '2004-07-22',
            'birthplace' => 'Quezon',
            'bio' => 'The Developer of Quickpost System',
            'username' => 'RandolphDR',
            'email' => 'randolph@quickpost.ph',
            'phone' => '0922097492',
            'role' => 'developer',
        ]);

        User::factory()
            ->createWithRole(5, 'user')
            ->create();
    }
}
