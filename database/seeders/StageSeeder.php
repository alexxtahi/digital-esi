<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            ['type' => "Stage découverte"],
            ['type' => "Stage d'application"],
            ['type' => "Stage de fin d'études"],
        ]);
    }
}
