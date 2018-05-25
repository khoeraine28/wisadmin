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
            'curriculum_name' => "ENGLISH"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_name' => "MAPEH"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_name' => "FILIPINO"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_name' => "WEB DEVELOPMENT"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_name' => "COMPUTER PROGRAMMING"
        ]);
        DB::table('curriculum_managements')->insert([
            'curriculum_name' => "KUNG FU"
        ]);
    }
}
