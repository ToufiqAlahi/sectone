@extends('layouts.admin')
@section('content')
    <div class="header">
        <h1 id="dash-title">student</h1>
    </div>
    <div class="single_member_wrapper">
        <div class="name"> <h3>{{$student->user->name}}</h3> </div>
        <div class="second">
            <div>
                <div class="image">
                    <img src="{{asset('image/student/'.$student->user->image)}}" alt="">
                </div>
            </div>
            <div class="academic">
                <div>
                    <div class="title">Email</div> <div class="info">: {{$student->user->email}}</div>
                </div>
                <div>
                    <div class="title">Registration</div> <div class="info">: {{$student->id}}</div>
                </div>
                <div>
                    <div class="title">Department</div> <div class="info">: {{$student->department->name}}</div>
                </div>
                <div>
                    <div class="title">Semester</div> <div class="info">: {{$student->semester}}</div>
                </div>
                <div>
                    <div class="title">Session</div> <div class="info">: {{$student->session}}</div>
                </div>
            </div>
        </div>
        <div class="editBtn"><a href="{{url('admin/member/edit/',$student)}}">Edit</a></div>
    </div>
@endsection
