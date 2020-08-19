
@extends('layouts.admin')

@section('content')
    <div class="header" style="display:flex; justify-content: space-between">
        <h1 id="dash-title">Students</h1>
        <div class="add_new" onclick="goto('admin/student/create')">Add new</div>
    </div>  
    <div class="wrapper">
        <div class="members">

            @foreach ($students as $student)
                <div class="member" onclick="goto('admin/student/show/'+{{$student->id}})">
                    <div class="image"><img src="{{asset('image/student/'.$student->user->image)}}" alt=""></div>
                    <div class="name"><h4>{{$student->user->name}}</h4></div>
                </div>
            @endforeach
        </div>
    </div>

@endsection


