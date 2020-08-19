

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

