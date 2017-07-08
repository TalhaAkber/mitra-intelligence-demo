<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('festivals')->insert([
            'year' => 2014,
            'name' => "Hula",
            'satisfaction' => 56,
            'behavioural' => 72,
            'lineup' => 53
        ]);

        DB::table('festivals')->insert([
            'year' => 2015,
            'name' => "Hula",
            'satisfaction' => 64,
            'behavioural' => 73,
            'lineup' => 58
        ]);

        DB::table('festivals')->insert([
            'year' => 2016,
            'name' => "Hula",
            'satisfaction' => 61,
            'behavioural' => 68,
            'lineup' => 72
        ]);

        DB::table('festivals')->insert([
            'year' => 2017,
            'name' => "Hula",
            'satisfaction' => 54,
            'behavioural' => 59,
            'lineup' => 68
        ]);

        DB::table('festivals')->insert([
            'year' => 2015,
            'name' => "Lola",
            'satisfaction' => 85,
            'behavioural' => 92,
            'lineup' => 45
        ]);

        DB::table('festivals')->insert([
            'year' => 2016,
            'name' => "Lola",
            'satisfaction' => 87,
            'behavioural' => 96,
            'lineup' => 45
        ]);
    }
}
