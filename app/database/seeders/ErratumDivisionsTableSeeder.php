<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ErratumDivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // erratum_divisionsテーブルにインサートする.
        DB::table("erratum_divisions")->insert([
            "name" => "不正解",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        // erratum_divisionsテーブルにインサートする.
        DB::table("erratum_divisions")->insert([
            "name" => "正解",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
        ]);
        
    }
}
