<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PhotorallyDivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // photorally_divisionsテーブルにインサートする.
        DB::table("photorally_divisions")->insert([
            "name" => "未実施",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        // photorally_divisionsテーブルにインサートする.
        DB::table("photorally_divisions")->insert([
            "name" => "実施済み",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        
    }
}
