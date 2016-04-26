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
            'event' => 'Event 1',
            'description' => 'description Event N° 1'

        ]);

        DB::table('events')->insert([
            'user_id' => 1,
            'event' => 'Event 2',
            'description' => 'description Event N° 2'

        ]);

        DB::table('events')->insert([
            'user_id' => 2,
            'event' => 'Event 3',
            'description' => 'description Event N° 3'

        ]);

        DB::table('events')->insert([
            'user_id' => 3,
            'event' => 'Event 4',
            'description' => 'description Event N° 4'

        ]);

    }
}
