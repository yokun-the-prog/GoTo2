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
        $this->call(UsersTableSeeder::class);
        $this->call(ErratumDivisionsTableSeeder::class);
        $this->call(TransportDivisionsTableSeeder::class);
        $this->call(PhotorallyDivisionsTableSeeder::class);
    }
}
