<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'name' => 'Jack',
            'department_id' => 1,
            'dob' =>'21 October 1990'
        ]);
        DB::table('students')->insert([
            'name' => 'Jill',
            'department_id' => 2,
            'dob' =>'21 January 2010'
        ]);
        DB::table('students')->insert([
            'name' => 'John',
            'department_id' => 3,
            'dob' =>'21 August 1998'
        ]);
        DB::table('students')->insert([
            'name' => 'Jenny',
            'department_id' => 4,
            'dob' =>'21 March 1995'
        ]);
        DB::table('students')->insert([
            'name' => 'Jackson',
            'department_id' => 5,
            'dob' =>'21 November 2006'
        ]);
        
    }
}
