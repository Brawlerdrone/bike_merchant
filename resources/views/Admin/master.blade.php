<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Admin</title>
    <!----FONTS -------->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <!----ICONS -------->
    <script src="https://kit.fontawesome.com/75c7cbc9da.js" crossorigin="anonymous"></script>
    <!---- CSS-------->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <!-- SIDEBAR -->
    <div class="sidebar ">
        {{-- logo div with close --}}
        <div class="sidebar-logo">
            <img src="" alt="Company-logo">
            <div class="sidebar-close" id="sidebar-close">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div> 
        {{-- end of logo div --}}

        {{-- user div --}}
        <div class="sidebar-user">
            <div class="sidebar-user-info">
               <img src="{{asset('images/user-image.jpg')}}" alt="" class="profile-image"> 
                <div class="sidebar-user-name">
                    Kamah
                </div>
            </div>
            <a href = "{{route('admin.logout')}}" class="btn btn-outline">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
        <div class="sidebar-menu">
            <li>
                <a href="#" class = "link ">
                    <i class="fas fa-home"></i>
                    <span>dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class = "link ">
                    <i class="fas fa-briefcase"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="" class="sidebar-menu-dropdown">
                    <i class="fas fa-briefcase"></i>
                    <span>E-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            Products and categories
                        </a>
                    </li>
                    <li>
                        <a href="{{route('Admin.create')}}">
                           Create new
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            edit and update
                        </a>
                    </li> 
            </li>

            

           
        </div>
    </div>

    <!----- MAIN SECTION --------->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="main-title">
                dashboard
            </div>
        </div>
        <div class="main-content">
            @yield('content')
        </div>

    </div>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>