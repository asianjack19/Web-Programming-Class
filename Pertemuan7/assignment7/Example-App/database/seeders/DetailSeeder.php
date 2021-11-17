<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('details')->insert([
            'student_id' => 1,
            'rank' => 'Gold',
            'score' => '100',
        ]);
        DB::table('details')->insert([
            'student_id' => 2,
            'rank' => 'Silver',
            'score' => '90',
        ]);
        DB::table('details')->insert([
            'student_id' => 3,
            'rank' => 'Bronze',
            'score' => '80',
        ]);
        DB::table ('details')->insert([
            'student_id' => 4,
            'rank' => 'Bronze',
            'score' => '80',
        ]);
        DB::table ('details')->insert([
            'student_id' => 5,
            'rank' => 'Bronze',
            'score' => '80',
        ]);
        
    }
}
