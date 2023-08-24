<div class="wrapped">
    <!-- Star header -->
    <div class="header-info">
        <div class="row">
            <div class="col-md-4">
                <ul class="header-info-1">
                    <li><i class="fa-solid fa-phone"></i>(+84)941346669</li>
                    <li><i class="fa-sharp fa-regular fa-envelope"></i> abc@gmail.com</li>

                </ul>
            </div>
            <div class="col-md-8">
                <ul class="header-info-2">

                    <li><i class="fa-brands fa-facebook-f"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-whatsapp"></i></li>
                    <li><i class="fa-brands fa-skype"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                    <li>
                        <a href="{{route('login')}}" id="login">Login</a> <a href="{{route('register')}}" id="login">Register</a>
                    </li>
                    <li id="backtop1">
                        <i class="fa fa-user"> <span class="visit">Visitor Number: </span> <span id="count"></span></i>
                    </li>
                    <li class="nav-item  nav-profile dropdown border-0">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                            @if (auth()->check())
                            <span class="profile-name"> {{ Auth::user()->name }}</span>
                            @endif

                        </a>
                        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>

                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                        </div>


                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container ">
            <div class="row">
                <div class="col-md-2 header-menu-1">
                    <ul>
                        <strong><a href="/">CARBREEZY</a></strong>
                    </ul>
                </div>
                <div class="col-md-3">
                    <form action="{{route('search.show')}}" method="get">
                        <input type="text" name="key" class="form-control" placeholder="Search Cars">
                    </form>
                </div>
                <div class="col-md-7 ">

                    <div class="header-menu-2">
                        <ul>
                            <li><a class="homeover" href="{{route('home')}}">HOME </a></li>
                            <li><a href="{{route('shop')}}">SHOP </a></li>
                            <li><a href="gallery">GALLERRY </a></li>
                            <li><a href="sitemap">SITEMAP </a></li>
                            <li><a href="contact">CONTACT US </a></li>
                            <li><a href="#!about">ABOUT US </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>