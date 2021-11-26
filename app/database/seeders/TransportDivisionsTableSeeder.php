<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class TransportDivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // transport_divisionsテーブルにインサートする.
        DB::table("transport_divisions")->insert([
            "name" => "車",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        // transport_divisionsテーブルにインサートする.
        DB::table("transport_divisions")->insert([
            "name" => "電車",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        // transport_divisionsテーブルにインサートする.
        DB::table("transport_divisions")->insert([
            "name" => "徒歩",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        
    }
}
