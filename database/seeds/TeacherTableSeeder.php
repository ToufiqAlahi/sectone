<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class TeacherTableSeeder extends Seeder
{
    public function run()
    {
        $courses = [1601, 1602, 1603, 1604, 1605, 1501, 1503];
        $teachers = Teacher::all();

        foreach ($teachers as $teacher) {
            if ($teacher->user) {
                $teacher->user->roles()->detach();
                $teacher->user->delete();
            }
        }
        Teacher::truncate();
        \DB::table('course_teacher')->truncate();


        $teachers = [
            [
                'name'=>'MD. Abdur Rouf',
                'email'=>'rouf@gmail.com',
                'password' => Hash::make('nilakash'),
                'title'=>'Profesor',
                'department_id'=>'1',
                'status'=> 'parmanent',
            ],
            [
                'name'=>'Mousumi Aktar',
                'email'=>'mousumi@gmail.com',
                'password' => Hash::make('nilakash'),
                'title'=>'Assistant Profesor',
                'department_id'=>'1',
                'status'=> 'parmanent',
            ],
            [
                'name'=>'Proma heig',
                'email'=>'proma@gmail.com',
                'password' => Hash::make('nilakash'),
                'title'=>'Lecturer',
                'department_id'=>'1',
                'status'=> 'Guest',
            ],
        ];

        
        $role = Role::select('id')->where('name', 'teacher')->get()->first();

        foreach ($teachers as $t) {
            $user = User::create([
                'name' => $t['name'],
                'email' => $t['email'],
                'password' => $t['password'],
            ]);
            $user->roles()->attach($role);
            $teacher = factory(Teacher::class)->make();
            $teacher->user_id = $user->id;
            $teacher->title = $t['title'];
            $teacher->department_id = $t['department_id'];
            $teacher->save();
            $teacher->courses()->sync($courses);
        }
    }
}
