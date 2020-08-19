@extends('layouts.admin')

@section('content')
<div id="body">
    <form action="{{url('admin/teacher', $teacher)}}" method="POST" enctype="multipart/form-data">
        @csrf
     <div class="member_form">
             <div class="personal_info">
                 <div class="heading">
                    <h1>Personal Information</h1>
                 </div>
                 <div class="body">
                    <div class="user_id" style="display:none;">
                        <input type="text" name="user_id" value="{{$teacher->user->email}}" >
                    </div>
                    <div class="full_name">
                        <label for="">Name: </label>
                        <input type="text" name="name" value="{{$teacher->user->name}}">
                    </div>
                    <div class="phone_number">
                        <label for="">Title : </label>
                        <input type="text" name="phone" value="{{$teacher->title}}">
                    </div>
                    <div class="image">
                        <label for="">Image : </label>
                        <input type="file" name="image" value="{{$teacher->user->image}}">
                    </div>
                    <div class="job">
                        <label for="">Department : </label>
                        <input type="text" name="job" value="{{$teacher->department->name}}">
                    </div>
                 </div>
                <div class="nextBtn"><button>Submit</button></div>
             </div>
     </div>
    </form>
</div>
@endsection