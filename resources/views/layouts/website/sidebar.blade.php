
<div class="avatar" style="display: flex;">
    <div>
        <img src="{{asset('image/teacher/'.Auth::user()->teacher->image)}}" alt="" class="responsive-img">
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

