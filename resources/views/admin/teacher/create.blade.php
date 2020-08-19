@extends('layouts.admin')

@section('content')
<div id="body">
    <form action="{{url('admin/teacher')}}" method="POST" enctype="multipart/form-data">
        @csrf
     <div class="member_form">
             <div class="personal_info">
                 <div class="heading">
                    <h1>Personal Information</h1>
                 </div>
                 <div class="body">
                    <div class="user_id" style="display:none;">
                        <input type="text" name="user_id"  >
                    </div>
                    <div class="full_name">
                        <label for="">Name: </label>
                        <input type="text" name="name">
                    </div>
                    <div class="phone_number">
                        <label for="">Phone Number : </label>
                        <input type="text" name="phone" placeholder="eg. 01743 920880">
                    </div>

                    <div class="job">
                        <label for="">Job : </label>
                        <input type="text" name="job" placeholder="eg. Banker">
                    </div>
                    <div class="location">
                        <label for="">Location : </label>
                        <input type="text" name="location" placeholder="eg. Sylhet">
                    </div>
                 </div>
                <div class="nextBtn"><button>Submit</button></div>
             </div>
     </div>
    </form>
</div>
@endsection