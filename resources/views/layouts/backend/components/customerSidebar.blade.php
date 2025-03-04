<div class="left-side-menu mbda-sidebar">
    <div class="slimscroll-menu">
        <!--- Side menu -->
        <a class="navbar-customer" href="{{ route('accounts.dashboard') }}">
            <img src="{{ asset('public/frontend-assets/images/logo.png') }}" class="logo-admin" alt="logo">
        </a>

        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <!-- Link - My Profile -->
                <li>
                    <a href="{{ route('profile.dashboard') }}" class="">
                        <i class="fe-user"></i>
                        <span>Profile </span>
                    </a>
                </li>

                <!-- Link - My Profile -->
                <li>
                    <a href="{{ route('accounts.dashboard') }}" class="">
                        <i class="ti-layers-alt"></i>
                        <span>Accounts </span>
                    </a>
                </li>

                <!-- Link - My Profile -->
                <li>
                    <a href="{{ route('securemails.index') }}" class="">
                        <i class="fe-message-square"></i>
                        <span>SecureMail </span>
                    </a>
                </li>

                <li>
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
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>

    <style>
        .navbar-customer{
            display: block;
            width: 100%;
            text-align: center;
            padding: 23px 0 35px;
        }
        .navbar-customer .logo-admin{
            width: 205px;
            text-align: center;
        }
    </style>
