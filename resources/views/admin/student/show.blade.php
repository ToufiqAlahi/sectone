{{-- @extends('layouts.admin')
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
 --}}

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3 class="text-center">Abdul Halim</h3></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card m-auto" style="height:150px; width: 150px">
                            <img src="{{asset('image/Emma/01.jpg')}}" alt="" class="card-img-top rounded-circle m-auto" style="height:120px; border: 4px solid rgb(160, 216, 238); width: 120px">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Academic Info.</h4>
                        <table class="table">
                            <tr class="row">
                                <td class="col-4">Registration</td>
                                <td class="col-8"><span>:</span> 2016331509</td>
                            </tr>
                            <tr class="row">
                                <td class="col-4">Department</td>
                                <td class="col-8  text-wrap">: Computer Science & Engineering</td>
                            </tr>
                            <tr class="row">
                                <td class="col-4">Session</td>
                                <td class="col-8"><span>:</span> 2016-2017</td>
                            </tr>
                            <tr class="row">
                                <td class="col-4">Semester</td>
                                <td class="col-8"><span>:</span> 3rd year 1s Semester</td>
                            </tr>
                            <tr class="row">
                                <td class="col-4">HSC Year</td>
                                <td class="col-8"><span>:</span> 2015</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-6 px-1">
                        <div class="container">
                            <h4>Personal Info.</h4>
                            <table class="table">
                                <tr class="row">
                                    <td class="col-4">Father's Name</td>
                                    <td class="col-8">: Tajul Islam</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Mother's Name</td>
                                    <td class="col-8">: Rasheda Khatun</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Phone</td>
                                    <td class="col-8">: 01743 920880</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Email</td>
                                    <td class="col-8">: a.halimics@gmail.com</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4">Blood Group</td>
                                    <td class="col-8">: A+</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 px-1">
                        <div class="container">
                            <h4>Address</h4>
                            <table class="table">
                                <tr class="row">
                                    <td class="col-4 text-wrap">Current Address</td>
                                    <td class="col-8 text-wrap">Room : 207, 2nd floor, Muktijudda Hall, Sylhet Engineering college</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-4 text-wrap">Permanent Address </td>
                                    <td class="col-8 text-wrap">Dolura, Ratar Goan, Bisswambharpur, Sunamgonj</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="" class="btn btn-success px-5">Edit</a>
                <a href="" class="btn btn-danger px-5">Delete</a>
            </div>
        </div>
    </div>
@endsection