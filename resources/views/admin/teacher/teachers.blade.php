
@extends('layouts.admin')

@section('content')
    <div class="header" style="display:flex; justify-content: space-between">
        <h1 id="dash-title">teachers</h1>
        <div class="add_new" onclick="goto('admin/teacher/create')">Add new</div>
    </div>  
    <div class="wrapper">
        <div class="members">

            @foreach ($teachers as $teacher)
                <a href="{{url('admin/teacher', $teacher)}}">
                    <div class="member">
                        <div class="image"><img src="{{asset('image/teacher/'.$teacher->user->image)}}" alt=""></div>
                        <div class="name"><h4>{{$teacher->user->name}}</h4></div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection


