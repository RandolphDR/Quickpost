<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() {

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

        User::factory()
            ->createWithRole(5, 'user')
            ->create();

        $this->call([PostSeeder::class]);
    }
}
