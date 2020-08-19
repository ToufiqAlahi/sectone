

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUET</title>
    <link rel="stylesheet" href ="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/members.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/home_page.css')}}">
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

    <aside>
        <nav class="sidenav-list">
            <ul>
                <li onclick="goto('home')">Home</li>
                <li onclick="goto('pages/about')">About</li>
                <li onclick="goto('pages/posts')">Blog</li>
                <li onclick="goto('pages/contact_us')">Contact us</li>
                <li onclick="goto('pages/events')">Events</li>
                <li onclick="goto('pages/advisors')">Departments</li>
                <li onclick="goto('pages/sayor')">Admission</li>
                <li onclick="goto('pages/notice')">Notice</li>

                    @auth
                        @if (Auth::user()->hasRole('teacher'))
                            <li onclick="goto('teacher/home')"><a>Your Profile</a></li>
                        @endif

                        @if (Auth::user()->hasRole('student'))
                            <li onclick="goto('student/home')"><a>Your Profile</a></li>
                        @endif

                        @if (Auth::user()->hasRole('admin'))
                            <li onclick="goto('admin/dashboard')"><a>Dashboard</a></li>
                        @endif
                        <li onclick="logout('logout-form')"><a>Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li onclick="login_form()">Login</li>
                        {{-- <li onclick="goto('register')">Register</li> --}}
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
                        {{-- <li onclick="goto('register')"><a>Register</a></li> --}}
                    @endauth
                @endif

                @auth
                    <li onclick="goto('dashboard')"><a>Dashboard</a></li>
                    <li onclick="logout()"><a>Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth

               

            </ul>
        </nav>
    </div>


    <div class="hide" id="login_form">
        <div class="container">
            <div class="hide_form" onclick="login_form()">X</div>
            <form class="form" action="{{route('login') }}" method = "POST">
                @csrf
                <div class="header">
                    <h3>Login to Your Account</h3>
                </div>
                <div class="error hide">
                    Email or password does not matched!
                </div>
                <div class="email_pass">
                    <div class="email">
                        <label for="">E-mail : </label>
                        <input type="email" id = "email" name="email" placeholder="Enter your email...." required>
                    </div>
                    <div class="password">
                        <label for="">Password : </label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="buttons">
                    <button id="login_btn" type="submit">Login</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <div class="Content">
        @yield('content')
    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>



























{{-- 



    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
