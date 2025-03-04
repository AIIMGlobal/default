<div class="left-side-menu mbda-sidebar">
    <div class="slimscroll-menu">
        <!--- Side menu -->
        <div id="sidebar-menu">

            <a class="navbar-customer" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('public/frontend-assets/images/logo.png') }}" class="logo-admin" alt="logo">
            </a>

            <ul class="metismenu" id="side-menu">
                <!-- Link - My Profile -->
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="">
                        <i class="fe-user"></i>
                        <span>{{__('messages.Dashboard')}} </span>
                    </a>
                </li>
                <!-- Users - Settings Modules -->
                <li>
                    <a href="javascript:void(0);" class="">
                        <i class="fa fa-crop-alt"></i>
                        <span> Test Link </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>
                            <a href="#">Test 1</a>
                        </li>


                    </ul>
                </li>

                <!-- Users - Settings Modules -->
                <li>
                    <a href="javascript:void(0);" class="">
                        <i class="fa fa-users"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>
                            <a href="#">Create new user</a>
                        </li>
                        <li>
                            <a href="#">ইউজার লিস্ট</a>
                        </li>
                    </ul>
                </li>
                <!-- Link - Account settings Modules -->
                <li>
                    <a href="#" class="">
                        <i class="ti-layers-alt"></i>
                        <span>Accounts </span>
                    </a>
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