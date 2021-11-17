<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'IT',
            'principal' => 'Mr Jack',
            'location' => 'Jakarta',
        ]);
        DB::table('departments')->insert([
            'name' => 'Business',
            'principal' => 'Ms Eve',
            'location' => 'Tangerang',
        ]);
        DB::table('departments')->insert([
            'name' => 'Science',
            'principal' => 'Mr Mark',
            'location' => 'Bandung',
        ]);
        DB::table('departments')->insert([
            'name' => 'Accounting',
            'principal' => 'Mr Joe',
            'location' => 'Surabaya',
        ]);
        DB::table('departments')->insert([
            'name' => 'History',
            'principal' => 'Mr Tom',
            'location' => 'Semarang',
        ]);
    }
}
