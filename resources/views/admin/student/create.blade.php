@extends('layouts.admin')

@section('content')
<div id="body">
    <form action="{{url('admin/student/store')}}" id="student_form" method="POST" enctype="multipart/form-data">
        @csrf
     <div class="member_form">
             <div class="personal_info">
                 <div class="heading">
                    <h1>Personal Information</h1>
                 </div>
                 <div class="body">
                    <div class="name">
                        <label for="">Name: </label>
                        <input type="text" name="name" placeholder="eg. Abdul halim">
                    </div>
                    <div class="email">
                        <label for="">Email: </label>
                        <input type="email" name="email" placeholder="eg. a.halimics@gmail.com">
                    </div>
                    <div class="image">
                        <label for="">Image: </label>
                        <input type="file" name="image" placeholder="eg. a.halimics@gmail.com">
                    </div>
                    <div class="registration">
                        <label for="">Registration : </label>
                        <input type="text" name="registration" placeholder="eg. 2016331509">
                    </div>
                    <div class="department">
                        <label for="">Department : </label>
                        <input type="text" name="department" placeholder="Department">
                    </div>
                    
                    <div class="session">
                        <label for="">Session</label>
                        <input type="text" name="session" placeholder="2016-2017">
                    </div>
                    <div class="semester">
                        <label for="">Semister : </label>
                        <input type="text" name="semester" placeholder="eg. 6">
                    </div>
                 </div>
                <div class="nextBtn"><button onclick="form_submit('student_form')">Submit</button></div>
             </div>
     </div>
    </form>
</div>
<script>
    document.getElementById('student_form').addEventListener('submit', (e)=>{
        e.preventDefault();
    });
</script>
@endsection