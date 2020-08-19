@extends('layouts.admin')
@section('content')
    <form action="{{url('admin/member/update', $member)}}" id="member_update_form" method="POST">
        @csrf
    <div class="member_form">
            <div class="personal_info">
                <div class="heading">
                    <h1>Personal Information</h1>
                </div>
                <div class="body">
                    <div class="full_name">
                        <label for="">Full Name : </label>
                        <input type="text" name="name" value="{{$member->user->name}}">
                    </div>
                    <div class="phone_number">
                        <label for="">Phone Number : </label>
                        <input type="text" name="phone" value="{{$member->phone}}">
                    </div>
                    <div class="email">
                        <label for="">Email : </label>
                        <input type="text" name="email" value="{{$member->user->email}}">
                    </div>
                    <div class="blood_group">
                        <label for="">Blood Group : </label>
                        <input type="text" name="blood_group" value="{{$member->blood_group}}">
                    </div>
                    <div class="fathers_name">
                        <label for="">Fathers Name : </label>
                        <input type="text" name="father_name" value="{{$member->father_name}}">
                    </div>
                    <div class="mothers_name">
                        <label for="">Mothers Name : </label>
                        <input type="text" name="mother_name" value="{{$member->mother_name}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="Next('.academic')">Next</button></div>
            </div>

            <div class="academic hide">
                <div class="heading">
                    <h1>Academic Information</h1>
                </div>
                <div class="body">
                    <div class="university">
                        <label for="">University</label>
                        <input type="text" name="university" value="{{$member->university}}">
                    </div>
                    <div class="department">
                        <label for="">Department : </label>
                        <input type="text" name="department" value="{{$member->department}}">
                    </div>
                    <div class="session">
                        <label for="">Session</label>
                        <input type="text" name="session" value="{{$member->session}}">
                    </div>
                    <div class="college">
                        <label for="">College/Madrasah</label>
                        <input type="text" name="college" value="{{$member->college}}">
                    </div>
                    <div class="high_school">
                        <label for="">High School : </label>
                        <input type="text" name="high_school" value="{{$member->high_school}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="Next('.address')">Next</button></div>
            </div>

            <div class="address hide">
                <div class="heading">
                    <h1>Address</h1>
                </div>
                <div class="body">
                    <div class="address">
                        <label for="">Permanent Address : </label>
                        <input type="text" name="address" value="{{$member->address}}">
                    </div>
                    <div class="parmanent_address">
                        <label for="">Current Address : </label>
                        <input type="text" name="current_address" value="{{$member->current_address}}">
                    </div>
                </div>
                <div class="nextBtn"><button onclick="form_submit('member_update_form')">Submit</button></div>
            </div>
        </div>
    </form>
    <script>

        document.getElementById('member_update_form').addEventListener('submit', (e)=>{
            e.preventDefault();
        });
        function Next(className){
            let classes = ['.personal_info', '.academic', '.address']
            for (let i = 0; i < classes.length; i++) {
                document.querySelector(classes[i]).classList.add('hide');
            }
            document.querySelector(className).classList.remove('hide');
        }
    </script>
@endsection
