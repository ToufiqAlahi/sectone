<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Course;
use App\Models\Student;
use App\Models\Department;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
class StudentsController extends Controller
{

    public function home(){
        return view('student.home');
    }

    public function attendance(){
        return view('student.attendance');
    }
    public function create_form(){
        $courses = Course::where([['id', '>', '1601'], ['id', '<', '1610']])->get();
        return view('student.create_form', compact('courses'));
    }

    public function show(Request $data){
        // $attendance = Course::find($data->id)->attendances;
        $attendance = Attendance::orderBy('date')->where('course_id', $data->id)->get()->groupBy(function ($item){
            return $item->date;
        });
        return response($attendance);
    }

    public function all_attendance(Course $course){
        $attendance = Attendance::orderBy('date')->where('course_id', $course->id)->get()->groupBy(function ($item){
            return $item->date;
        });

        if (count($attendance)<1) {
            $message = $course->title. '('.$course->code.')'.' has no attendance';
            return view('exception', compact('message'));
        }
        return view('student.all', compact('attendance'));

    }
}
