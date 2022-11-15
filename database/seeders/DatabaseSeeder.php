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
        $this->call(countryseeder::class);
        $this->call(stateseeder::class);
        $this->call(UsersTableDataSeeder::class);
        $this->call(ForumCategoriesSeeder::class);
    }
}
