
 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>LMS-SYS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name}}</h6>
                <span>{{Request::segment(1)}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            @if (Auth::user()->user_type == "1")
              <a href="{{route('admin.dashboard')}}" class="nav-item nav-link @if (Request::segment(2) == "dashboard") active @endif "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
            @elseif (Auth::user()->user_type == "2")
              <a href="{{route('teacher.dashboard')}}" class="nav-item nav-link @if (Request::segment(2) == "dashboard") active @endif "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>  
            
            @elseif (Auth::user()->user_type == "3")
              <a href="{{route('student.dashboard')}}" class="nav-item nav-link @if (Request::segment(2) == "dashboard") active @endif "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>  
            
            @elseif (Auth::user()->user_type == "4")
              <a href="{{route('parent.dashboard')}}" class="nav-item nav-link @if (Request::segment(2) == "dashboard") active @endif "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>  
            
              @else
              <a href="{{route('user.logout')}}" class="nav-item nav-link @if (Request::segment(2) == "dashboard") active @endif "><i class="fa fa-tachometer-alt me-2"></i>logout</a>
            @endif
           
        </div>
    </nav>
</div>
<!-- Sidebar End -->