<?php

use Illuminate\Database\Seeder;

class CurriculumManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('curriculum_managements')->insert([
            'curriculum_date' => "January 1"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "January 2"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "January 3"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "January 4"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "January 5"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "February 1"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "February 2"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "February 3"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "February 4"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "February 5"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "March 1"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "March 2"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "March 3"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "March 4"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_date' => "March 5"
        ]);
    }
}
