<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            MenusTableSeeder::class,
            EmailSeeder::class,
            // PermissionSeeder::class,
            LookUpSeeder::class,
            CountrySeeder::class,
            PageTableSeeder::class,
        ]);
    }
}
