@extends('layouts.admin')

@section('content')
    <style>
        .roles{
            height: 40px;
            width: 100%;
            display:flex;
            align-items: center;
        }
        .roles>div{
            margin: 10px;
        }
    </style>
    <div>Edit User {{$user->name}}</div>

    <div>
        <label for="name">Role : </label>
        <div class="roles">
            <div>
                <select name="user_role" id="user_role">
                    @foreach ($roles as $role)
                        <option value="{{$role->name}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="nextBtn"><button type="submit" onclick="show_form({{$user->id}})">Update</button></div>

    <script>
        function show_form(user){
            console.log(user);
            let role = document.getElementById('user_role').value;
            window.location = 'http://127.0.0.1:8000/admin/'+role+'/create/'+user;
        }
    </script>
@endsection
