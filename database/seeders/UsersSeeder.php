<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'email' => 'toto@mail.com',
                'name' => 'Toto Admin',
                'password' => 'totototo',
                'role' => 'admin'
            ],
            [
                'email' => 'titi@mail.com',
                'name' => 'Titi Editor',
                'password' => 'titititi',
                'role' => 'editor'
            ],
            [
                'email' => 'tata@mail.com',
                'name' => 'Tata Author',
                'password' => 'tatatata',
                'role' => 'author'
            ],
            [
                'email' => 'tutu@mail.com',
                'name' => 'Tutu Author',
                'password' => 'tutututu',
                'role' => 'viewer'
            ]
        ];

        foreach ($users as $u) {
            $newUser = User::updateOrCreate(
                ['email' => $u['email']],
                [
                    'name' => $u['name'],
                    'password' => Hash::make($u['password']),
                    'email_verified_at' => now(),
                ]
            );

            $newUser->syncRoles([$u['role']]);

            Post::factory(6)->for($newUser)->create();
        }

    }
}
