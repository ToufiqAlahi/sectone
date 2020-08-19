<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;
class CourseStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_student')->truncate();
        $students = Student::all();
        $courses = Course::where([['id', '>', '1600'], ['id', '<', '1700']])->get();
        foreach ($courses as $c) {
            foreach ($students as $s) {
                \DB::table('course_student')->insert([
                    'course_id'=> intval($c->id),
                    'student_id'=> intval($s->id)
                ]);
            }
        }
    }
}
