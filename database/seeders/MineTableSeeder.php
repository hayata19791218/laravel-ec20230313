<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mines')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('mines')->insert([
            'name' => 'jonio',
            'age' => '30',

        ]);

        DB::table('mines')->insert([
            'name' => 'いさじ',
            'age' => '20',

        ]);

        DB::table('mines')->insert([
            'name' => 'あべ',
            'age' => '10',

        ]);
    }
}
