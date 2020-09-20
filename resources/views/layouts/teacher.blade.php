

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
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: rgb(240, 243, 245);
        }
        .content{
            padding: 50px;
        }
        .nav-wrapper{
            padding-right: 40px;
            padding-left: 40px;
        }
        .material-icons{
            color: rgb(12, 160, 160);
        }
        .aside{
            background: rgb(255, 255, 255);
            /* box-shadow: 1px 0 10px rgb(122, 128, 129);s */
            min-height: 100vh !important;
            width: 200px;
        }
        .aside ul a{
            padding: 10px;
            width: 100%;
            display: flex;
            transition: 0.4s;
        }
        .aside ul a:hover{
            background: rgb(10, 92, 74);
            color: white;
        }
    </style>
   </head>
<body>
    <header>
        <nav class="white">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo green-text">Logo</a>
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

                </ul>
            </div>
        </nav>
    </header>

    <style>
        .avatar{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .avatar>div{
            margin: 10px;
        }
        .avatar img{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            border: 1px solid teal;
            box-shadow: 1px 1px 3px lightgrey;
        }
    </style>
    <div class="row">
        <div class="aside col hide-on-med-and-down l2">
            <div class="avatar" style="display: flex;">
                <div>
                    <img src="{{asset('image/4331.jpeg')}}" alt="" class="responsive-img">
                </div>
                <div class="">
                    <a href=""><h6 class="grey-text">{{ Auth::user()->name }}</h6></a>
                    <span class="orange-text" onclick="logout('admin_logout_form')" style="cursor: pointer">Logout</span>
                    <form id="admin_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <ul>
                <a href="{{URL::to('teacher/dashboard')}}">
                    <i class="material-icons prefix">dashboard</i> 
                    <p style="margin-left: 20px;">Dashboard</p>
                </a> 
                <a href="{{URL::to('teacher/attendance/home')}}">
                    <i class="material-icons prefix">book</i> 
                    <p style="margin-left: 20px;">Attendance</p>
                </a>
                <a href="">
                    <i class="material-icons prefix">house</i> 
                    <p style="margin-left: 20px;">Classes</p>
                </a> 
                <a href="">
                    <i class="material-icons">school</i> 
                    <p style="margin-left: 20px;">Students</p>
                </a>
            </ul>
        </div>
            
        <div class="col l10">
            <div class="">
                @yield('content')
            </div>
        </div>
    </div>

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































{{-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUET</title>
    <link rel="stylesheet" href ="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href ="{{asset('css/teacher/attendance.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>
    <header>
        <div class="logo">
            <h1>SUET</h1>
        </div>
        <nav class="nav-list">
            <ul>
                <li onclick="goto('home')">Home </li>
                <li onclick="goto('notice')">Notice</li>
                <li onclick="goto('posts')">Blog </li>
                <li onclick="goto('events')">Events</li>
                <li id="drop_down" onclick="dropDownMenu()">More</li>
            </ul>
        </nav>
    </header>
    <style>
        .profile{
            height: 50px;
            width: 100%;
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .profile .image{
            height: 45px;
            width: 45px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 10px;
        }
        .profile h3{
            text-transform:capitalize;
        }
    </style>
    <aside>
        <nav class="sidenav-list">
            <div class="profile">
                <div class="image"><img src="{{asset('image/teacher/'.Auth::user()->teacher->image)}}" alt=""> </div>
                <div><h3>{{Auth::user()->name}}</h3></div>
            </div>
            <ul>
                <li onclick="goto('teacher/home')">Home</li>
                <li onclick="goto('pages/posts')">Blog</li>
                <li onclick="goto('teacher/attendance/home')">Attendance</li>
                <li onclick="goto('pages/events')">Events</li>
                <li onclick="goto('pages/notice')">Notice</li>

                @if (Route::has('login'))
                    @auth
                    @else
                        <li onclick="login_form()">Login</li>
                        <li onclick="goto('register')">Register</li>
                    @endauth
                @endif

                @auth
                    <li onclick="goto('home')"><a>Website</a></li>
                    <li onclick="logout('teacher_logout_form')"><a>Logout</a></li>
                @endauth

            </ul>
        </nav>
    </aside>
    <div id = "drop_down_menu" class="hide">
        <nav class="sidenav-list">
            <ul>
                <li onclick="goto('pages/about')"><a>About</a></li>
                <li onclick="goto('pages/contact_us')"><a>Contactn us</a></li>
                <li onclick="goto('pages/members')"><a>Members</a></li>
                <li onclick="goto('pages/advisors')"><a>Our Advisors</a></li>

                @if (Route::has('login'))
                    @auth
                    @else
                        <li onclick="login_form()">Login</li>
                        <li onclick="goto('register')"><a>Register</a></li>
                    @endauth
                @endif

                @auth
                    <li onclick="goto('dashboard')"><a>Dashboard</a></li>
                    <li onclick="logout('teacher_logout_form')"><a>Logout</a></li>
                    <form id="teacher_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth

               

            </ul>
        </nav>
    </div>

    <div class="attendacnceSheetWrapper hide">
        @yield('attendance')
    </div>

</div>

    <div class="Content">
        @yield('content')
    </div>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/teacher/attendance.js')}}"></script>
</body>
</html>
 --}}
