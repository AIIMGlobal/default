<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | SEBPO - Project Management Software</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/logo') }}/{{ $global_setting->logo ?? '' }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('loginAssets/css/bootstrap.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('loginAssets/css/fontawesome-all.min.css') }}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('loginAssets/font/flaticon.css') }}">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('loginAssets/style.css') }}">

        <script src="{{ asset('loginAssets/js/particles.min.js') }}"></script>

        <style>
            .fxt-template-layout9 {
                position: relative;
                z-index: 1;
            }
            #particles-js{
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: -1;
                background: transparent;
                background-size: cover;
                background-position: 50% 50%;
                background-repeat: no-repeat;
            }

            .text6 {
                text-shadow: 0px 4px 3px rgba(0,0,0,0.4), 0px 8px 13px rgba(0,0,0,0.1), 0px 18px 23px rgba(0,0,0,0.1);
                color: #fff;
                font-size: 60px;
                font-family: fangsong;
            }
        </style>
    </head>

    <body>
        <div id="preloader" class="preloader">
            <div class='inner'>
                <div class='line1'></div>
                <div class='line2'></div>
                <div class='line3'></div>
            </div>
        </div>

        <section class="fxt-template-animation fxt-template-layout9" data-bg-image="{{ asset('loginAssets/img/figure/bg9-l.jpg') }}">
            <div id="particles-js"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('admin.home') }}" class="fxt-logo"><img src="{{ asset('storage/soft_logo') }}/{{ $global_setting->soft_logo ?? '' }}" alt="Logo" style="background: #fff; border-radius: 50px; width: 180px; padding: 10px; border: 5px solid #01A0DC;"></a>

                        <h1 class='text6'>{{ $global_setting->title ?? 'Sixth Sense' }}</h1>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center mt-3" style="border: solid 15px #ffffff0f; background: #0000002e;">
                    <div class="col-lg-3">
                        <div class="fxt-header">
                            <a href="{{ route('admin.home') }}" class="fxt-logo"><img src="{{ asset('storage/logo') }}/{{ $global_setting->logo ?? '' }}" alt="Logo"></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="fxt-content">
                            @include('alerts.alert')
                            
                            <h2>Login into your account</h2>

                            <div class="fxt-form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-1">
                                            <input type="email" id="username" class="form-control" name="email" placeholder="Enter Email" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-2">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
                                            <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                                            <div class="fxt-checkbox-area">
                                                {{-- <div class="checkbox">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">Keep me logged in</label>
                                                </div> --}}

                                                <a href="{{ url('password/reset') }}" class="switcher-text">Forgot Password</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                                            <button type="submit" class="fxt-btn-fill">Log in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- <div class="fxt-footer">
                                <div class="fxt-transformY-50 fxt-transition-delay-9">
                                    <p>Don't have an account?<a href="register-9.html" class="switcher-text2 inline-text">Register</a></p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jquery-->
        <script src="{{ asset('loginAssets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('loginAssets/js/bootstrap.min.js') }}"></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('loginAssets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Validator js -->
        <script src="{{ asset('loginAssets/js/validator.min.js') }}"></script>
        <!-- Custom Js -->
        <script src="{{ asset('loginAssets/js/main.js') }}"></script>

        <script src="{{ asset('loginAssets/js/app.js') }}"></script>
        <script src="{{ asset('loginAssets/js/stats.js') }}"></script>

        <script>
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);

            requestAnimationFrame(update);
        </script>
    </body>
</html>