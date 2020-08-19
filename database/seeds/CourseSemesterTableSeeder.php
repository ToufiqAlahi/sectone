<?php

use Illuminate\Database\Seeder;
class CourseSemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_semester')->truncate();
        DB::table('course_semester')->create([
            'course_id' => '1101',
            'semester_id'=> '6'
        ]);
    }
}
