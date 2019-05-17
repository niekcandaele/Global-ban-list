<?php

use Illuminate\Database\Seeder;

class ReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reasons')->insert([
            'reasonShort' => 'Racism',
            'reasonLong' => 'User has made racist remarks or has discriminated other users based on their race',
        ]);
        DB::table('reasons')->insert([
            'reasonShort' => 'Hacking',
            'reasonLong' => 'User has used external tools to gain an advantage ingame',
        ]);
        DB::table('reasons')->insert([
            'reasonShort' => 'Bug abuse',
            'reasonLong' => 'User has exploited flaws in the game or server to gain an advantage.',
        ]);
    }
}
