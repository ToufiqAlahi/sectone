@extends('layouts.admin')

@section('content')
<style>
    button{
        border: none;
        padding: 3px 10px;
        cursor: pointer;
        color: white;
        border-radius: 3px;
    }
    .edit_btn{
        background: green;
    }
    .delete_btn{
        background: brown;

    }
    table{
        margin:auto;
        border-collapse: collapse;
        width: 80%;
    }
    td{
        padding: 4px 10px;
    }
    th{
        text-align: left;
    }
    tr:nth-child(even){
        background: lightgray;
    }
    th{
        background: darkgray;
        padding: 10px;
    }
    .col-1{
        width: 20%;
    }
    .col-2{
        width: 30%;
    }
    .col-3{
        width: 20%;
    }
    .col-1 img{
        height: 40px;
        width: 40px;
    }
</style>
    <div class="header" style="display:flex; justify-content: space-between">
        <h1 id="dash-title">Events</h1>
        <div class="add_new" onclick="goto('admin/event/create')">Add new</div>
    </div>
    <table>
        <tr>
            <th class="col-1">Picture</th>
            <th class="col-1">Title</th>
            <th class="col-2">Description</th>
            <th class="col-3">Action</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td class="col-1"><img src="{{asset('image/event/'.$event->image)}}" alt=""></td>
                <td class="col-1">{{$event->title}}</td>
                <td class="col-2">{{$event->description}}</td>
                <td class="col-3">
                    <a href="{{url('admin/event/edit', $event)}}"><button class="edit_btn">Edit</button></a>
                    <a href="{{url('admin/event/delete', $event)}}"><button class="delete_btn">Delete</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection