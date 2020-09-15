<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('css/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}"  media="screen,projection"/>

    <title>Admin Panel</title>

   </head>
<body>
    <header>
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="{{url('home')}}">
                            <i class="material-icons">home</i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="material-icons">email</i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="material-icons">notifications</i>
                        </a>
                    </li>
                    <li>

                    </li>
                    <li class="" onclick="logout('admin_logout_form')">Logout</li>
                    <form id="admin_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </nav>
    </header>
    {{-- <aside>                 
        <nav class="side-nav">
                <ul class="nav" id="side-menu">
                    <li>
                        <div class="admin">
                            <div class="profile-image"><img src="{{asset('image/'.Auth::user()->image)}}"></div>
                            <div class="user-name"><h3>{{ Auth::user()->name }}</h3> </div>
                        </div>
                        
                    </li>

                    <li>
                        <div class="search-box">
                            <input type="text">
                            <button><i class="fa fa-search fa-fw"></i></button>
                        </div>
                    </li>
                    <li>
                        <button onclick="goto('admin/dashboard')" class="side-nav-item"><i class="fa fa-home fa-2x"></i>Dashboard</button>
                    </li>
                    <li>
                        <button onclick="goto('home')" class="side-nav-item"><i class="fa fa-home fa-2x"></i>Library</button>
                    </li>
                    <li>
                        <button onclick="goto('admin/user/users')" class="side-nav-item"><i class="fa fa-home fa-2x"></i>Academic</button>
                    </li>
                    <li>
                        <button onclick="goto('admin/student/students')" class="side-nav-item"><i class="fa fa-book fa-2x"></i>Hostel</button>
                    </li>
                    <li>
                        <button onclick="goto('admin/settings')" class="side-nav-item"><i class="fa fa-book fa-2x"></i>Settings</button>
                    </li>
                </ul>
            </nav>
        </aside>

    <div class="dashboard Content">
        <div id="body">
            @yield('content')


            <div class="dashboard-items students hide">
                <div class="student-fees" onclick="displaySingle(this)">Fees</div>
                <div class="student-admisstion " onclick="goto('members')">Admission</div>
                <div class="student-registration "onclick="displaySingle(this)">Registration</div>
                <div class="student-form-fillup "onclick="displaySingle(this)">Form fill up</div>
                <div class="student-admisstion "onclick="displaySingle(this)">Admission</div>
                <div class="student-registration "onclick="displaySingle(this)">Registration</div>
                <div class="student-form-fillup "onclick="displaySingle(this)">Form fill up</div>
                <div class="student-admisstion "onclick="displaySingle(this)">Admission</div>
            </div>


            <div class="dashboard-items library hide">
                <div class="student-admisstion">Books</div>
                <div class="student-registration" onclick="goto('add_new')">Add New Member</div>
                <div class="student-form-fillup" onclick="goto('members')">Members List</div>
            </div>


            <div class="dashboard-items notice hide">
                <div class="student-admisstion">Current Notices</div>
                <div class="student-registration">Post New Notice</div>
                <div class="student-form-fillup">Edit Notice</div>
                <div class="student-admisstion">Remaining Books</div>
            </div>

            <div class="dashboard-items teachers hide">
                <div class="student-admisstion">Current Notices</div>
                <div class="student-registration">Post New Notice</div>
                <div class="student-form-fillup">Edit Notice</div>
                <div class="student-admisstion">Remaining Books</div>
            </div>

            <div class="dashboard-items stuffs hide">
                <div class="student-admisstion">Stuffs</div>
                <div class="student-registration">Salary</div>
                <div class="student-form-fillup">Edit Stuff List</div>
            </div>

            <div class="dashboard-items hostel hide">
                <div class="student-admisstion">Contorllers</div>
                <div class="student-admisstion">Students</div>
                <div class="student-registration">Fees</div>
                <div class="student-form-fillup">Applications</div>
                <div class="student-form-fillup">Unpaid Students</div>
                <div class="student-form-fillup">Make a Notice</div>
                <div class="student-form-fillup">Work to Done</div>
            </div>

        </div>
    </div> --}}

    <script>
        function logout() {
            document.getElementById('logout-form').submit();
        }
    </script>
    <script type="text/javascript" src="{{asset('materialize/js/JQuery.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('materialize/js/loader.js')}}"></script>
    {{-- <script src="{{asset('js/main.js')}}"></script>   --}}
    <script src="{{asset('js/admin/main.js')}}"></script>

</body>

</html>
