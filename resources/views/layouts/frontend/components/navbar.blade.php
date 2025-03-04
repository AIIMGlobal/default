<section class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light mt-3 mt-3 pl-0 pr-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="{{ route('accounts.dashboard') }}">
                            <img src="{{ asset('public/frontend-assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</section>


@if (auth()->check())
    <section class="menu-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light mt-3 pl-0 pr-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <h1 class="text-info mb-3 mt-0">স্বাগত, {{ auth()->user()->first_name }}!</h1>
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 frontend-navbar">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('accounts.dashboard') }}">Your Accounts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile.dashboard') }}">Your Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('securemails.index') }}">SecureMail</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" class="nav-link btn btn-danger pl-3 pr-3 ml-2" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <span>লগ-আউট</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </section>
@endif
{{-- <header class="page-heading" style="background: url({{ asset('public/frontend-assets/images/page-banner.jpg') }})">
    <div class="container">
        <div class="page-heading-content">
            <h1>Online Banking System</h1>
            <p>All the features you need to make your event a huge success</p>
        </div>
    </div>
</header> --}}


