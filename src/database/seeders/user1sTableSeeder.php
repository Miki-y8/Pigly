<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user1sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
      'name' => 'saly',
      'email' => '111@111',
      'password' => '1234',
    ];
    DB::table('user1s')->insert($param);
    }
}
