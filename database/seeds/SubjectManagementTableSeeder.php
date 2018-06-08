<?php

use Illuminate\Database\Seeder;

class SubjectManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_managements')->insert([
            'curriculum_id' => "1",
            'subject_code' => "ENG1",
            'subject_description' => "English 1 - Parts of Speech",
            'no_unit' => "2",
        ]);
        DB::table('subject_managements')->insert([
            'curriculum_id' => "2",
            'subject_code' => "BSCE 2",
            'subject_description' => "BSCE 2",
            'no_unit' => "3",
        ]);
        DB::table('subject_managements')->insert([
            'curriculum_id' => "3",
            'subject_code' => "FIL 3",
            'subject_description' => "Filipino 3 - El filibusterismo",
            'no_unit' => "3",
        ]);

        DB::table('subject_managements')->insert([
            'curriculum_id' => "4",
            'subject_code' => "WEBDEV ",
            'subject_description' => "Web Development",
            'no_unit' => "4",
        ]);

        DB::table('subject_managements')->insert([
            'curriculum_id' => "5",
            'subject_code' => "ITFUND",
            'subject_description' => "IT Fundamentals - Basic troubleshooting hardware and software",
            'no_unit' => "4",
        ]);
    }
}
