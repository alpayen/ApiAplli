<?php

use Illuminate\Database\Seeder;

class SportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->delete();


        DB::table('sports')->insert([
            "name" => "Foot de rue",
        ]);

        DB::table('sports')->insert([
            "name" => "Pétanque avec Roger",
        ]);
    }
}
