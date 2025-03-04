<div class="navbar-custom navbar-custom" id="mbda-navbar">

    <ul class="list-unstyled topnav-menu float-right mb-0">

        <!-- Search Form -->
        {{-- <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li> --}}
        <!-- User Profile -->
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                {{-- <img src="{{ asset('public/admin-assets/assets/images/users/user-6.jpg') }}" alt="user-image" class="rounded-circle"> --}}
                {{-- <i class="fe-user"></i> --}}

                @guest
                    <span class="pro-user-name ml-1"> Md.Tarikul Islam <i class="mdi mdi-chevron-down"></i>
                @else
                    <span class="pro-user-name ml-1"> {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                @endguest

                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

                <div class="dropdown-divider"></div>
                @guest
                    <a href="#"  class="dropdown-item notify-item">লগ-আউট</a>
                @else
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fe-log-out"></i>
                        <span>লগ-আউট</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                <!-- item-->

            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="" target="_blank" class="logo text-center">
            <span class="logo-lg">
                {{-- <img src="{{ asset('public/admin-assets/images/logo.png') }}" alt="" height="35"> --}}
                <h2 style="color: #fff; font-style:italic">OBS</h2>
            </span>
            <span class="logo-sm">
                <h3 style="color: #fff; font-style:italic">OBS</h3>
                {{-- <img src="{{ asset('public/admin-assets/images/logo.png') }}" alt="" height="15"> --}}
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
    </ul>
</div>
