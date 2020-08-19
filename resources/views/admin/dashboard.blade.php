@extends('layouts.admin')

@section('content')
    <style>
        .dashboard_item{
            display: flex;
            flex-wrap: wrap;
        }
        .dashboard_item>div{
            margin: 5px;
            width: 150px;
            height: 80px;
            border-radius: 5px;
            box-shadow: 2px 3px 10px grey;
            background: #009876;
            color: #c8ffff;
            cursor: pointer;
            display: flex;
        }
        .dashboard_item>div h3{
            margin: auto;
        }
    </style>
    <div class="dashboard_item">
        <div class="item" onclick="goto('admin/admission')" ><h3>Admission</h3></div>
        <div class="item" onclick="goto('admin/exam')" ><h3>Exams</h3></div>
        <div class="item" onclick="goto('admin/hostel')" ><h3>Hostel</h3></div>
        <div class="item" onclick="goto('admin/payment')" ><h3>Payments</h3></div>
        <div class="item" onclick="goto('admin/student/students')" ><h3>Students</h3></div>
        <div class="item" onclick="goto('admin/teacher')" ><h3>Teachers</h3></div>
        <div class="item" onclick="goto('dashboard')" ><h3>Hostel</h3></div>
        <div class="item" onclick="goto('dashboard')" ><h3>Hostel</h3></div>
        <div class="item" onclick="goto('dashboard')" ><h3>Hostel</h3></div>
    </div>
@endsection