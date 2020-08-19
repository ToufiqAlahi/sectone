@extends('layouts.student')

@section('content')
    <style scoped>
        .form_body{
            border: 1px solid grey;
            width: 100%;
            height : auto;
            margin: 10px;
            padding: 10px;
        }
        .col_1{
            width: 300px;
        }
        .col_2{
            width: 100px;
        }
        .col_1 input{
            width: 300px;
        }
        .col_2 input{
            width: 80px;
        }
        .col_3 input{
            width: 70px;
        }
        .student_info,
        .course_info{
            padding: 10px;
            width: 100%;
            display:flex;
            background: #60c0b6;
        }
        .student_info .image{
            height: 250px;
            width: 250px;
        }
        .student_info .image img{
            width: 150px;
            height: 150px;
        }
        .student_info .info{
            width: 600px;
            padding: 10px;
            padding-top: 0px;
            display: flex;
            flex-direction: column;
        }
        .student_info .info>div{
            display: flex;
        }
        .student_info .info>div>div{
            padding: 5px;
        }
        .student_info .info>div .heading{
            width: 140px;
        }
        .student_info .info>div .data{
            width: auto;
        }

        .course_info .current_courses{
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .tr{
            display: flex;
            height: 30px;
        }
        .tr input{
            padding:3px 10px;
        }
        .tr>div{
            margin: 3px 5px;
        }
        .current_courses .heading{
            width:250px;
        }
        .current_courses .details{
            width: 500px;
        }
        .form_heading{
            width: 100%;
            height: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #22a79ab8;
        }
    </style>
    <div class="form_body">
        <div class="form_heading">
            <div><h1>Sylhet Engineering College</h1></div>
            <div><p>Alurtal, Tilaghar, Sadar, Sylhet</p></div>
            <div>Exam : Semester Final</div>
        </div>
        <hr>
        <div class="student_info">
            <div class="image">
                <img src="{{asset('image/student/'.Auth::user()->student->image)}}" alt="">
            </div>
            <div class="info">
                <div>
                    <div class="heading">Student's Name</div>
                    <div>:</div>
                    <div class="data">ABDUL HALIM </div>
                </div>
                <div>
                    <div class="heading">Registration</div>
                    <div>:</div>
                    <div class="data">2016331509 </div>
                </div>
                <div>
                    <div class="heading">Department</div>
                    <div>:</div>
                    <div class="data">Computer Science & Engineering</div>
                </div>
                <div>
                    <div class="heading">Session</div>
                    <div>:</div>
                    <div class="data">2016-2017</div>
                </div>
                <div>
                    <div class="heading">Semester</div>
                    <div>:</div>
                    <div class="data">3rd year 2nd semester</div>
                </div>
                <div>
                    <div class="heading">Father's Name</div>
                    <div>:</div>
                    <div class="data">Tajul Islam </div>
                </div>
                <div>
                    <div class="heading">Mother's Name</div>
                    <div>:</div>
                    <div class="data">Rasheda Khatun </div>
                </div>
                <div>
                    <div class="heading">Phone Number</div>
                    <div>:</div>
                    <div class="data">01743 920880</div>
                </div>
                <div>
                    <div class="heading">Current Address</div>
                    <div>:</div>
                    <div class="data"><address>Muktijudda Hall, Sylhet Engineering College</address></div>
                </div>
                <div>
                    <div class="heading">Permanent Address</div>
                    <div>:</div>
                    <div class="data"><address>Dolura, Ratargoan, Bisshawambharpur, Sunamgonj</address></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="course_info">
            <div class="current_courses">
                <div class="heading">
                    <h3>Current Courses</h3>
                </div>
                <div class="details">
                    <div class="tr">
                        <div class="col_1">Course title</div>
                        <div class="col_2">Code</div>
                        <div class="col_3">Credit</div>
                    </div>
                    <div>
                        @foreach ($courses as $course)
                        <div class="tr">
                            <div class="col_1"><input type="text" value="{{$course->title}}"></div>
                            <div class="col_2"><input type="text" value="{{$course->code}}"></div>
                            <div class="col_3"><input type="text" value="{{$course->credit}}"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="course_info">
            <div class="current_courses">
                <div class="heading">
                    <h3>Drop Courses</h3>
                </div>
                <div class="details">
                    <div class="tr">
                        <div class="col_1">Course title</div>
                        <div class="col_2">Code</div>
                        <div class="col_3">Credit</div>
                    </div>
                    <div>
                        @foreach ($courses as $course)
                        <div class="tr">
                            <div class="col_1"><input type="text" value="{{$course->title}}"></div>
                            <div class="col_2"><input type="text" value="{{$course->code}}"></div>
                            <div class="col_3"><input type="text" value="{{$course->credit}}"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection