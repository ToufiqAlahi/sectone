@extends('layouts.admin')

@section('content')
    <form action="{{url('admin/event/update', $event)}}" id="update_event_form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="notice_form">
            <div class="form_heading">
                <h1>Create a Event</h1>
            </div>
            <div class="form_body">
                <div class="title">
                    <label for="">Title : </label>
                    <input type="text" name="title" value="{{$event->title}}">
                </div>
                <div class="image">
                    <label for="">Image :</label>
                    <input type="file" name="image" value="{{$event->image}}">
                </div>
                <div class="notice_body">
                    <label for="">Event Description : </label>
                    <textarea name="description" id="" cols="30" rows="10">{{$event->description}}</textarea>
                </div>
            </div>
            <div class="nextBtn"><button type="submit">Submit</button></div>
        </div>
    </form>
@endsection