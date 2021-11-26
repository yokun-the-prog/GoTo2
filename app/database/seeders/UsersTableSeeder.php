<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usersテーブルにインサートする.
        DB::table("users")->insert([
            "name" => "guest",
            "email" => "guest@guest",
            "email_verified_at" => new DateTime(),
            "password" => Hash::make("guest001"),
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
    }
}
