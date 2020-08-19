

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUET</title>
    <link rel="stylesheet" href ="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/members.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/admin_members.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/home_page.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
    <style>
        .profile{
            height: 50px;
            width: 100%;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile .image{
            height: 45px;
            width: 45px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 10px;
        }
    </style>
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

    <aside>
        <nav class="sidenav-list">
            <div class="profile">
                <div class="image"><img src="{{asset('image/'.Auth::user()->image)}}" alt=""> </div>
                <div><h3>{{Auth::user()->name}}</h3></div>
            </div>
            <ul>
                <li onclick="goto('home')">Home</li>
                <li onclick="goto('pages/about')">Books</li>
                <li onclick="goto('student/form/create')">Issue Book</li>
                <li onclick="goto('pages/sayor')">Library</li>

                @auth
                    <li onclick="goto('home')"><a>Website</a></li>
                    <li onclick="logout('student_logout_form')"><a>Logout</a></li>
                    <form id="student_logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
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
                @auth
                    <li onclick="goto('dashboard')"><a>Dashboard</a></li>
                    <li onclick="logout('student_logout_form')"><a>Logout</a></li>
                @endauth

            </ul>
        </nav>
    </div>

    <div class="Content">
        @yield('content')
    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
