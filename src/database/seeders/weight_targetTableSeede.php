<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class weight_targetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('weight_target')->insert([
            [
                'user_id' => '111',
                'target_weight' => '50',
            ],
            ]);
    }
}
