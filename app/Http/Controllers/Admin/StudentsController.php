<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student.students', compact('students'));
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function store(Request $request)
    {
        $image = $request['image'];
        $ext = $image->getClientOriginalExtension();
        $img_name = random_int(1, 6000).'.'.$ext;
        $image->move(public_path('image/student'), $img_name);

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->image = $img_name;
        $user->password = Hash::make('nilakash');
        $user->save();

        $student = new Student;
        $student->id = $request['registration'];
        $student->user_id = $user->id;
        $student->department_id = $request['department'];
        $student->session = $request['session'];
        $student->semester = $request['semester'];
        $student->save();

        return redirect('admin/student/students');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('admin.student.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('admin.student.edit', compact('student'));
    }


    public function update(Request $request, Student $student)
    {
        $student->registration = $request['registration'];
        $student->department = $request['department'];
        $student->session = $request['session'];
        $student->semester = $request['semester'];
        $student->save();
        return redirect('admin/student/students');
    }

    public function destroy(Student $student)
    {
        $student->delete();
    }
}
