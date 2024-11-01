<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "spring",
            "summer",
            "autumn",
            "winter"
        ];
        foreach($names as $name){
            DB::table('seasons')->insert([
                'name' => $name,
            ]);
        }
    }
}
