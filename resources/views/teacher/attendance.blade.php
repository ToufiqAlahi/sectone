

@extends('layouts.teacher')
@section('content')
    <div class="attendance">
        <div class="header">
            <li onclick="showAttendanceSheet()"><h3>Take Attendance</h3></li>
        </div>
    </div>
@endsection

@section('name')
    <div class="headingForm1 customBox" id="headingForm1">
        <div class="formdiv">
            <label for="">Department : </label>
            <select id="department_id">
                <option value="1" selected>CSE</option>
                <option value="2">EEE</option>
                <option value="3">CE</option>
            </select>
        </div>
        <div class="formdiv">
            <label for="">Semester : </label>
            <select id="semester_id">
                <option value="1">1/1</option>
                <option value="2">1/2</option>
                <option value="3">2/1</option>
                <option value="4">2/2</option>
                <option value="5">3/1</option>
                <option value="6" selected>3/2</option>
                <option value="7">4/1</option>
                <option value="8">4/2</option>
            </select>
        </div>
        <div class="formdiv">
            <button onclick="next('headingForm2')">Next</button>
        </div>
    </div>
    <div class="headingForm2 customBox hide" id="headingForm2">
        <div class="formdiv">
            <label for="">Select Course : </label>
            <select id="course_id">
                @foreach ($courses as $course)
                    <option value="{{$course->id}}">{{$course->code}}</option>
                @endforeach
            </select>
        </div>
        <div class="formdiv">
            <button onclick="next('attendanceTableWrapper')">Next</button>
        </div>
    </div>

    <div class="attendanceTableWrapper hide" id="attendanceTableWrapper">
    <div class="title"><h3>Press on the Rule number if absent</h3></div>
    <div class="attendanceTableBody">
        @foreach ($registration as $reg)
            <div><button onclick="absent(this, {{$reg}})">{{substr($reg, 8, 2)}}</button></div>
        @endforeach
    </div>
        
    <div><button onclick="submit()">Submit</button></div>
    </div>
    <div class="todaysAttendance customBox hide" id="todaysAttendance">
        <div class="heading "><h3>Todays Attendance</h4></div>
        <div>Date : <span id="todaysDate"></span></div>
        <div>Subject Code : <span id="subjectCode"></span></div>
        <div>Total Students : <span id="totalStudent"></span></div>
        <div>Absent : <span id="totalAbsent"></span></div>
        <div>Present : <span id="percentage"></span>%</div>
        <div><button id="goHome" onclick="goto('teacher/attendance')">Go Home</button></div>
    </div>
@endsection
