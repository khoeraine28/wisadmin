<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('school_years')->insert([
            'schoolYear' => "2005"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2006"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2007"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2008"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2009"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2010"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2011"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2012"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2013"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2014"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2015"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2016"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2017"
        ]);
        DB::table('school_years')->insert([
            'schoolYear' => "2018"
        ]);
    }
}
