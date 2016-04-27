<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();


        DB::table('events')->insert([
            'user_id' => 1,
            'sport_id' => 1,
            'datetime' => "01/01/01 13h30",
            'duration' => "1h30",
            'participant' => 10,
            'participantmax' => 12,
            'place' => "Parc de St Cloud"
        ]);

        DB::table('events')->insert([

            'user_id' => 2,
            'sport_id' => 2,
            'datetime' => "01/01/01 13h30",
            'duration' => "1h30",
            'participant' => 10,
            'participantmax' => 12,
            'place' => "Pré St Jean"

        ]);

    }
}
