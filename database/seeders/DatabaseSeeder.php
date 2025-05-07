<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(CategorySeeder::class);

        User::factory()->create([
            'avatar' => 'storage/avatar/1744116544_myprofile.png',
            'firstname' => 'Randolph',
            'lastname' => 'Saludo',
            'middlename' => 'Soriano',
            'age' => 20,
            'birthdate' => '2004-07-22',
            'birthplace' => [
                'city' => 'Quezon',
                'country' => 'Philippines',
            ],
            'address' => [
                'street' => '103A P. Rosales Street',
                'city' => 'Pateros',
                'state' => 'Metro Manila',
                'country' => 'Philippines',
                'zip' => '1621',
            ],
            'bio' => 'The Developer of Quickpost System',
            'username' => 'RandolphDR',
            'email' => 'randolph@quickpost.ph',
            'phone' => '09272097492',
            'role' => 'developer',
        ]);

        User::factory()->create([
            'avatar' => 'storage/avatar/1744116544_myprofile.png',
            'firstname' => 'Randolph',
            'lastname' => 'Saludo',
            'middlename' => 'Soriano',
            'age' => 20,
            'birthdate' => '2004-07-22',
            'birthplace' => [
                'city' => 'Quezon',
                'country' => 'Philippines',
            ],
            'address' => [
                'street' => '103A P. Rosales Street',
                'city' => 'Pateros',
                'state' => 'Metro Manila',
                'country' => 'Philippines',
                'zip' => '1621',
            ],
            'bio' => 'The Developer of Quickpost System',
            'username' => 'RandolphDR2',
            'email' => 'rssaludo@paterostechnologicalcollege.edu.ph',
            'phone' => '09272097491',
            'role' => 'user',
        ]);

        // Create additional users using factory with 'user' role
        User::factory()
            ->createWithRole(5, 'user')
            ->create();

        // Seed posts
        $this->call(PostSeeder::class);
    }
}

