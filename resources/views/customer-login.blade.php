@extends('layouts.frontend.master')

<link href='{{ asset('public/frontend-assets/calendar/packages/core/main.css') }}' rel='stylesheet' />
    @section('title','Login Customer')
    @section('content')
        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <div class="card-box login-ui mb-2 mt-3">
                            <h2>Hello!</h2>
                            <h4 class="header-title mb-3">Please enter your Online Access Details below to log in.</h4>
                            <hr>
                            <div class="login-register">
                                <form action="{{ route('customer.login.submit') }}" method="post" autocomplete="off">
                                    @csrf
                                    @method('post')
                                    <div class="form-group">
                                        <label for="email">ই-মেইল</label>
                                        <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Emal ঠিকানা" autocomplete="off" value="{{ old('email') }}">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span> adfa a asdf ad fadsf afdkiea
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password">পাসওয়ার্ড</label>
                                        <input type="password" name="password" id="password" placeholder="পাসওয়ার্ড" class="form-control  @error('password') is-invalid @enderror" autocomplete="off">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-info w-100">
                                        <div class="text-center mt-2">
                                                or <a href="">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>



                    </div> <!-- end col -->



                </div>
                <!-- end row -->
            </div><!-- end container -->
        </div><!-- end page -->
    @endsection

