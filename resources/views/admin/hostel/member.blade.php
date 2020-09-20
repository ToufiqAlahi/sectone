@extends('layouts.admin.admin')
@section('content')

<div class="container">
    <div class="card">
        <div class="row center-align card-header">
            <h4 style="padding-top: 20px;">Student Details</h4>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="book-card card z-depth-0">
                    <img src="{{asset('image/student/'.$member->student->image)}}" alt="" class="responsive-img">
                    <div class="center-align">
                        <h5>{{$member->student->name}}</h5>
                        <p>Muktijudda Hall</p>
                    </div>  
                </div>
            </div>
            <div class="col s12 m7">
                <div class="info">
                    <div>
                        <p>Academic info. </p>
                    </div>
                    <table class="striped">
                        <tr>
                            <td>Student id</td>
                            <td>:</td>
                            <td>{{$member->student->id}}</td>
                        </tr>
                        
                        <tr>
                            <td>Department</td>
                            <td>:</td>
                            <td>{{$member->student->department->name}}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>{{$member->student->semester->name}}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>{{$member->student->session}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            
        </div>
        <div class="row">
            <div class="col s10 m6">
                <div class="info">
                 <div>
                     <p>Personal information</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Father's Name</td>
                         <td>:</td>
                         <td>{{$member->student->father_name}}</td>
                     </tr>
                     
                     <tr>
                         <td>Mother's Name</td>
                         <td>:</td>
                         <td>{{$member->student->mother_name}}</td>
                     </tr>
                     <tr>
                         <td>Blood group</td>
                         <td>:</td>
                         <td>{{$member->student->blood_group}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
             <div class="col s12 m6">
                <div class="info">
                 <div>
                     <p>Contact information</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Phone</td>
                         <td>:</td>
                         <td>{{$member->student->phone}}</td>
                     </tr>
                     
                     <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td>{{$member->student->email}}</td>
                     </tr>
                     <tr>
                         <td>Permanent Address</td>
                         <td>:</td>
                         <td>{{$member->student->permanent_address}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
             <div class="col s12 m6">
                <div class="info">
                 <div>
                     <p>Payment History</p>
                 </div>
                 <table class="striped">
                     <tr>
                         <td>Phone</td>
                         <td>:</td>
                         <td>{{$member->student->phone}}</td>
                     </tr>
                     
                     <tr>
                         <td>Email</td>
                         <td>:</td>
                         <td>{{$member->student->email}}</td>
                     </tr>
                     <tr>
                         <td>Permanent Address</td>
                         <td>:</td>
                         <td>{{$member->student->permanent_address}}</td>
                     </tr>
                 </table>
                 </div>
             </div>
        </div>

        <div class="card-action center-align">
            <a href="{{url('admin/member/edit/', $member)}}">Edit</a>
            <a href="">Remove</a>
        </div>
</div>
</div>




@endsection













    {{-- <style>
        
.hostel_member{
    margin: auto;
    height: auto;
    padding: 10px;
    width: 90%;
    background: #114665ad;
    color: white;
    display: flex;
    flex-direction: column;

}
.hostel_member>div{
    display: flex;
}
.hostel_member .image{
    height: 150px;
    width: 150px;
    border-radius: 3px;
    overflow: hidden;
}
.hostel_member  .academic div{
    height: 40px;
    width: 500px;
    display: flex;
    align-items: center;
}
.hostel_member  .personal_info{
    width: 350px;
}
.hostel_member  .academic div .title,
.hostel_member  .personal_info div .title,
.hostel_member  .address div .title{
    width: 120px;
}
.hostel_member  .academic div .info{
    width: 300px;
}
.hostel_member .academic{
    margin-left: 40px;
}
.hostel_member .name{
    height: 40px;
    padding: 10px;
    display: flex;
    justify-content: center;
    font-weight: 600;
    font-size: 20px;
}

.editBtn{
    margin-top: 5px;
    height: 30px;
}
.editBtn a{
    padding: 5px 40px;
    background: #c0d3dc;
    color:black;
    border: none;
    outline: none;
    cursor: pointer;
    text-decoration: none;
}

    </style>
    <div class="header">
        <h1 id="dash-title">Hostel Member</h1>
    </div>
    <div class="hostel_member card">
        <div class="name"> <span>{{$member->student->user->name}}</span> </div>
        <hr>
        <div class="second row">
            <div class="img col m4">
                <div class="image">
                    <img src="{{asset('image/student/'.$member->student->image)}}" alt="" class="responsive-img">
                </div>
            </div>
        
            <div class="academic">
                <div>
                    <div class="title">Hostel</div> <div class="info">: {{$member->hostel->name}}</div>
                </div>
                <div>
                    <div class="title">Block</div> <div class="info">: 2</div>
                </div>
                <div>
                    <div class="title">Room</div> <div class="info">: {{$member->room_no}}</div>
                </div>
                <div>
                    <div class="title">Sit</div> <div class="info">: {{$member->sit_no}}</div>
                </div>
            </div>
        </div>
        <hr>
            <div class="row">
                <div class="col m6 l6">
                    <div class="row">
                        <div class="col s4">Registration</div>
                    </div>
                </div>
            </div>
        <hr>
    <div class="editBtn"><a href="{{url('admin/member/edit/',$member)}}">Edit</a></div>


    
@endsection --}}

<style scoped>
    table {
        display: inline-block;
        margin: 10px;
        width: 80% !important;
    }
    table td{
        padding:10px !important;
    }
    .book-card{
        width: 90%;
        /* padding: 10px; */
        margin-top: 10px !important;
        margin-left: 20px !important;
    }
    .book-description{
        max-height: 250px;
        overflow: auto;
        margin: 10px;
        border: 1px solid rgb(223, 245, 252);
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 20px;
        color: rgb(16, 70, 70);
    }
    .book-location{
        width: 200px;
        color: blueviolet;
    }
    .card-header::after{
        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        content: '';
        align-items: center;
        display: block;
        height: 2px;
        width: 200px;
        background: teal;
    }
    .info{
        padding: 20px;
    }
</style>