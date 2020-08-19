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
    <table>
        <tr>
            <th class="col-1">Name</th>
            <th class="col-2">Email</th>
            <th class="col-1">Picture</th>
            <th class="col-2">Roles</th>
            <th class="col-3">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td class="col-1">{{$user->name}}</td>
                <td class="col-2">{{$user->email}}</td>
                <td class="col-1"><img src="{{asset('image/'.$user->image)}}" alt=""></td>
                <td class="col-2"> {{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                <td class="col-3">
                    <a href="{{url('admin/user/edit', $user)}}"><button class="edit_btn">Edit</button></a>
                    <a href="{{url('admin/user/delete', $user)}}"><button class="delete_btn">Delete</button></a>
                </td>
            </tr>
            
        @endforeach
    </table>
@endsection