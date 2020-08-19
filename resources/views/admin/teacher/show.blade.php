@extends('layouts.admin')
@section('content')
    <div class="header">
        <h1 id="dash-title">teacher</h1>
    </div>
    <div class="single_member_wrapper">
        <div class="name"> <h3>{{$teacher->user->name}}</h3> </div>
        <div class="second">
            <div>
                <div class="image">
                    <img src="{{asset('image/teacher/'.$teacher->user->image)}}" alt="">
                </div>
            </div>
            <div class="academic">
                <div>
                    <div class="title">Job</div> <div class="info">: {{$teacher->title}}</div>
                </div>
                <div>
                    <div class="title">Location</div> <div class="info">: {{$teacher->department->name}}</div>
                </div>
                {{-- <div>
                    <div class="title">Phone</div> <div class="info">: {{$teacher->courses}}</div>
                </div> --}}
                <div>
                    <div class="title">Email</div> <div class="info">: {{$teacher->user->email}}</div>
                </div>
            </div>
        </div>
        <div class="editBtn"><a href="{{url('admin/teacher/edit', $teacher)}}">Edit</a></div>
    </div>
@endsection
