
 <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Dubai UAE,
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +971 50706 4500
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i>{{ date('Y-m-d H:i:s') }}
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('img/logo.png') }}" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="{{ Request::is('/') ? "active" : ""}}"><a href="/">Home</a></li>
                                <li class=@yield('about')><a href="/about">About</a></li>
                                <li class=@yield('services')><a href="/services">services</a></li>
                                <li class=@yield('cars')><a href="/allcars">Cars</a></li>
                              <li class=@yield('contact')><a href="/contact">Contact</a></li>
                               @if (Auth::check())
                              <li> <a href=""> Welcome !! {{ Auth::user()->name }}</a>
                                    <ul>
                                        <a href="{{ route('logout') }}">Logout</a>
                                        <li><a href="{{ route('cars.index') }}">Cars</a></li>
                                        <li><a href="/cars/create">Add New Car</a></li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>