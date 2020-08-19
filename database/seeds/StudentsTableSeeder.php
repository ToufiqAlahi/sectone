<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;
use App\Models\Student;
class StudentsTableSeeder extends Seeder
{
//Students table seeder is working comletely fine.
    public function run()
    {
            $role = Role::select('id')->where('name', 'student')->get()->first();
            $students = Student::all();

            foreach ($students as $student) {
                 if($student->user) {
                    $student->user->roles()->detach();
                    $student->user->delete();
                 }
            }
 
            Student::truncate();
            $images = glob(public_path('image/student/*'));
            foreach($images as $image){
                if (file_exists($image)) {
                     unlink($image);
                }
            }

 
            $users = factory(User::class, 40)->make();
            $reg = 2016331501;
            $courses = [1601, 1602, 1603, 1604, 1605, 1606, 1607, 1608, 1609];
            foreach ($users as $user) {
                $student = factory(Student::class)->make();
                $student->id = $reg++;
                $user->save();
                $user->roles()->attach($role);
                $semester =\App\Models\Semester::find(106);
                $student->courses()->sync($courses);
                $student->semester_id = 106;
                $student->department_id = 101;
                $user->student()->save($student);
            }
    
            $users = factory(User::class, 40)->make();
            $reg = 2017331501;
            $courses = [1501, 1502, 1503, 1504, 1505, 1506, 1507, 1508, 1509];
            foreach ($users as $user) {
                 $student = factory(Student::class)->make();
                 $student->id = $reg++;
                 $user->save();
                 $user->roles()->attach($role);
                 $semester =\App\Models\Semester::find(106);
                 $student->courses()->sync($courses);
                 $student->semester_id = 105;
                 $student->department_id = 101;
                 $user->student()->save($student);
            }
    }
}
