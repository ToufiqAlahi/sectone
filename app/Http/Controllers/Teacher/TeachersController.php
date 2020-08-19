<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Course;

class TeachersController extends Controller
{
    public function home()
    {
        return view('teacher.home');
    }


    public function create()
    {
        $courses = Course::all();
        $students = Student::where([['department_id', '=', '1'], ['semester_id', '=', '6']])->get();
        $registration = [];
        foreach ($students as $student) {
            $registration[] = $student->id;
        }
        sort($registration);

        return view('teacher.attendance', compact('registration', 'courses'));
    }




    public function store(Request $request)
    {
        $department_id = '1';
        $semester_id = '6';
        $date = '12/05/20';

        $students = Student::where([['department_id', '=', $department_id], ['semester_id', '=', $semester_id]])->get();
        foreach ($students as $student) {
            $attendance = new Attendance;
            $attendance->date = $date;
            $attendance->department_id = $request->department_id;
            $attendance->course_id = $request->course_id;;
            $attendance->student_id = $student->id;

            $attendance->status = true;
            foreach ($request->rules as $k) {
                if($student->id==$k){
                    $attendance->status = false;
                }
            }
            $attendance->save();
        }
        return response($request);
    }

 
    public function todaysAttendance(Request $request)
    {
        $match = ['date'=>$request->date, 'course_id'=>$request->subject_code];
        $abs = Attendance::select('absents')->where($match)->first();
        $absents = $this->toArray($abs->absents);
        $c = count($absents);
        $result = [
            'date'=> $request->date,
            'subject_code' => $request->subject_code,
            'total_student' => 49,
            'absent' => $c,
            'present'=> '59'
        ];

        return response($result);
    }


    public function edit(Attendance $attendance)
    {
        //
    }


    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    public function destroy(Attendance $attendance)
    {
        //
    }



    public function toString($array){
        $str = '';
        foreach ($array as $value) {
            $str = $str.$value.',';
        }
        return rtrim($str,',');
    }

    public function toArray($str){
        $arr = [];
        $i = 0;
        $array = explode(',', $str);
        foreach ($array as $val) {
            $arr[$i]= intval($val);
            $i++;
        }
        return $arr;
    }
}
