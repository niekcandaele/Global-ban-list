<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'fullName' => '7 Days to die',
            'code' => '7D2D',
        ]);
        DB::table('games')->insert([
            'fullName' => 'Minecraft',
            'code' => 'MC',
        ]);
        DB::table('games')->insert([
            'fullName' => 'Counter Strike: Global Offensive',
            'code' => 'CSGO',
        ]);
    }
}
