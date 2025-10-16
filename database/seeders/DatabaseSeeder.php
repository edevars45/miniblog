<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
<<<<<<< HEAD

        $this->call(UsersSeeder::class);
    }
}
=======
        $this->call(UsersSeeder::class);
    }
}
>>>>>>> 05aaa84 (Initial commit: Laravel + Breeze + Spatie (miniblog))
