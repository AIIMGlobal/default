<!doctype html>

<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    <head>
        <meta charset="utf-8" />

        <title>@yield('title', ''.($global_setting->title ?? "").'')</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend-assets/assets/images/favicon.ico') }}">

        {{-- select2 css --}}
        <link rel="stylesheet" href="{{ asset('backend-assets/assets/css/select2.min.css') }}">

        <link rel="stylesheet" href="{{ asset('backend-assets/assets/libs/glightbox/css/glightbox.min.css') }}">
        <!-- Layout config Js -->
        <script src="{{ asset('backend-assets/assets/js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('backend-assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
        
        <!-- Icons Css -->
        <link href="{{ asset('backend-assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend-assets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{ asset('backend-assets/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

        {{-- <link href="{{ asset('backend-assets/assets/css/fileinput.css') }}" rel="stylesheet" type="text/css" /> --}}
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        {{-- <link rel="stylesheet" href="{{ asset('backend-assets/assets/libs/dropzone/dropzone.css') }}" type="text/css" />
         --}}
         <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">

        <!-- Filepond css -->
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

        {{-- <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link type="text/css" rel="stylesheet" href="{{ asset('backend-assets\assets\css\image-uploader.min.css') }}"> --}}

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cambo&display=swap" rel="stylesheet"> --}}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">

        <style>
            .navbar-nav .nav-link:hover {
                outline: 2px solid rgba(0, 255, 255, 0.8);
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.6);
    transition: all 0.3s ease-in-out;
                background: none;
                margin-left: 0;
            }
            .navbar-menu .navbar-nav .nav-link {
                font-family: "Merriweather", serif;
                font-optical-sizing: auto;
            }
            .page-title-box {
                z-index: 2;
                position: relative;
                margin-left: -25px;
                box-shadow: none;
            }
            .app-menu {
                z-index: 1;
            }
            .form-switch-custom .form-check-input::before {
                top: -6px;
            }
            .select2-container .select2-selection--single {
                height: 38px !important;
            }
            .select2-container--default .select2-selection--single {
                border: 1px solid #d2d2d2 !important;
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 35px !important;
            }
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 35px !important;
            }
            .card {
                -webkit-box-shadow: 0 0px 3px rgba(87, 87, 87, 0.24) !important;
                box-shadow: 0 0px 3px rgba(87, 87, 87, 0.24) !important;
            }
            /* .page-title-box {
                -webkit-box-shadow: 0 0px 3px rgba(56, 65, 74, 0.23) !important;
                box-shadow: 0 0px 3px rgba(56, 65, 74, 0.23) !important;
            } */
            .fullscreen {
                background: white;
            }

            @font-face {
                font-family: nikosh;
                src: url({{asset('font.Nikosh.ttf')}});
            }
            body {
                font-family: "Merriweather", serif;
                font-optical-sizing: auto;
                font-style: normal;
                font-size: 1.0em;
                padding: 0;
                margin: 0;
                background: white;
            }
            .no-user-image-found i {
                font-size: 20px;
                color: #00000080;
                border: 1px solid white;
                padding: 5px;
                border-radius: 20px;
                background: white;
                box-shadow: 0 0 10px 2px #00000040;
            }
            .footer {
                color: #000 !important;
            }

            /* .navbar-menu .navbar-nav .nav-link {
                font-family: nikosh !important;
            } */

            #camera {
                width: 200px;
                height: 200px;
                /* border: 1px solid black; */
                margin-left: 25%;
            }

            .bbs-loader-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                z-index: 1000;
                background: #00000088;
                opacity: 0.9;
            }

            #loader-1 #loader{
                position: relative;
                left: 50%;
                top: 50%;
                height: 20vw;
                width: 20vw;
                margin: -10vw 0 0 -10vw; 
                border: 3px solid transparent;
                /* border-top-color: #3498db; */
                /* border-bottom-color: #3498db;  */
                border-radius: 50%;
                z-index: 2;
                -webkit-animation: spin 2s linear infinite;
                -moz-animation: spin 2s linear infinite;
                -o-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
            }

            #loader-1 #loader:before{
                content: "";
                position: absolute;
                top:2%;
                bottom: 2%;
                left: 2%;
                right: 2%; 
                border: 3px solid transparent;
                z-index: 2;
                /* border-top-color: #db213a; */
                border-radius: 50%;
                -webkit-animation: spin 3s linear infinite;
                -moz-animation: spin 3s linear infinite;
                -o-animation: spin 3s linear infinite;
                animation: spin 3s linear infinite;

            }

            #loader-1 #loader:after{
                content: "";
                position: absolute;
                top:5%;
                bottom: 5%;
                left: 5%;
                right: 5%; 
                border: 3px solid transparent;
                /* border-top-color: #dec52d; */
                z-index: 2;
                border-radius: 50%;
                -webkit-animation: spin 1.5s linear infinite;
                -moz-animation: spin 1.5s linear infinite;
                -o-animation: spin 1.5s linear infinite;
                animation: spin 1.5s linear infinite;

            }

            li.first-dropdown:last-child {
                padding-bottom: 50px;
            }

            #page-topbar {
                background: linear-gradient(90deg, #0F2027, #203A43, #2C5364) !important;
                /* background: url({{asset('assets/images/backgound_image.png')}}); */
                margin: 8px;
                border-radius: 10px;
                /* background: url('{{asset("frontend/img/background_animation.gif")}}'); */
                /* background: url('{{asset("frontend/img/gffiphy.gif")}}');
                background-position: center;
                background-size: cover; */
            }
            .app-menu {
                /* background: linear-gradient(45deg, #3959d7cf,#d77439e5) !important; */
                background: linear-gradient(90deg, #0F2027, #203A43, #2C5364) !important;
                overflow: hidden;
            }

            .app-menu.navbar-menu::after {
                content: '';
                position: absolute;
                top: -180px;
                width: 180px;
                /* background: linear-gradient(45deg, #224eb7b2,#f20d0d30); */
                left: -124px;
                height: 1000px;
                border-radius: 0;
                transform: rotate3d(1, 1, 1, 45deg);
                z-index: -10;
            }

            .footer {
                background: linear-gradient(45deg,#9b430eb8,#0000ffb2);
                margin: 9px;
                border-radius: 9px;
                color: white !important;
            }
            
            .footer a {
                color: white !important;
            }

            .profile-wid-bg {
                background: url('{{asset("frontend/img/background-image2.jpg")}}');
            }
            .profile-wid-bg::before {
                background: linear-gradient(45deg, #d48154, #6176d8) !important;
            }
            .logo-sm img {
                width: 100% !important;
                padding-right: 19px;
            }

            .circles{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: -35;
            }

            .circles li{
                position: absolute;
                display: block;
                list-style: none;
                width: 20px;
                height: 20px;
                background: rgba(255, 255, 255, 0.2);
                animation: animate 25s linear infinite;
                bottom: -150px;
                
            }

            .circles li:nth-child(1){
                left: 15%;
                width: 80px;
                height: 80px;
                animation-delay: 0s;
            }


            .circles li:nth-child(2){
                left: 10%;
                width: 20px;
                height: 20px;
                animation-delay: 2s;
                animation-duration: 12s;
            }

            .circles li:nth-child(3){
                left: 70%;
                width: 20px;
                height: 20px;
                animation-delay: 4s;
            }

            .circles li:nth-child(4){
                left: 40%;
                width: 60px;
                height: 60px;
                animation-delay: 0s;
                animation-duration: 18s;
            }

            .circles li:nth-child(5){
                left: 65%;
                width: 20px;
                height: 20px;
                animation-delay: 0s;
            }

            .circles li:nth-child(6){
                left: 75%;
                width: 110px;
                height: 110px;
                animation-delay: 3s;
                border-radius: 100px;
            }

            .circles li:nth-child(7){
                left: 12%;
                width: 150px;
                height: 150px;
                animation-delay: 7s;
                border-radius: 100px;
            }

            .circles li:nth-child(8){
                left: 50%;
                width: 25px;
                height: 25px;
                animation-delay: 10s;
                border-radius: 30px;
            }

            .circles li:nth-child(9){
                left: 20%;
                width: 15px;
                height: 15px;
                animation-delay: 2s;
                animation-duration: 35s;
            }

            .circles li:nth-child(10){
                left: 85%;
                width: 150px;
                height: 150px;
                animation-delay: 0s;
                animation-duration: 11s;
            }
            .circles li:nth-child(11){
                left: 3%;
                width: 50px;
                height: 50px;
                animation-delay: 0s;
                animation-duration: 5s;
                border-radius: 30px;
            }
            .circles li:nth-child(12){
                left: 48%;
                width: 70px;
                height: 70px;
                animation-delay: 0s;
                animation-duration: 25s;
            }
            .circles li:nth-child(13){
                left: 95%;
                width: 30px;
                height: 30px;
                animation-delay: 0s;
                animation-duration: 5s;
                border-radius: 30px;
            }
            .circles li:nth-child(14){
                left: 22%;
                width: 150px;
                height: 150px;
                animation-delay: 6s;
                animation-duration: 17s;
            }
            .circles li:nth-child(15){
                left: 55%;
                width: 150px;
                height: 150px;
                animation-delay: 0s;
                animation-duration: 8s;
                border-radius: 100px;
            }
            .circles li:nth-child(16){
                left: 29%;
                width: 150px;
                height: 150px;
                animation-delay: 0s;
                animation-duration: 3s;
            }
            .circles li:nth-child(17){
                left: 39%;
                width: 150px;
                height: 150px;
                animation-delay: 3s;
                animation-duration: 11s;
                border-radius: 100px;
            }
            .circles li:nth-child(18){
                -webkit-animation-delay: 3s !important;
                animation-delay: 3s !important;
                top: 25px;
                left: 70vw;
                width: 10px;
                height: 10px;
                border: solid 1px #d3d9e678;
                transform-origin: top left;
                border-radius: 30px;
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                -webkit-animation: cube 12s ease-in forwards infinite;
                        animation: cube 12s ease-in forwards infinite;
            }
            .circles li:nth-child(19){
                -webkit-animation-delay: 5s !important;
                animation-delay: 5s !important;
                top: 30px;
                left: 25;
                width: 10px;
                height: 10px;
                border: solid 1px #d3d9e678;
                transform-origin: top left;
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                -webkit-animation: cube 12s ease-out forwards infinite;
                        animation: cube 12s ease-out forwards infinite;
            }
            .circles li:nth-child(20){
                -webkit-animation-delay: 8s !important;
                animation-delay: 8s !important;
                top: 85px;
                left: 45vw;
                width: 10px;
                height: 10px;
                border: solid 1px #d3d9e678;
                transform-origin: top left;
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                -webkit-animation: cube 12s ease-in forwards infinite;
                        animation: cube 12s ease-in forwards infinite;
            }

            @keyframes animate {

                0%{
                    transform: translateY(0) rotate(0deg);
                    opacity: 1;
                    /* border-radius: 0; */
                }

                100%{
                    transform: translateY(-1000px) rotate(720deg);
                    opacity: 0;
                    /* border-radius: 50%; */
                }

            }

            @-webkit-keyframes cube {
                from {
                    transform: scale(0) rotate(0deg) translate(-50%, -50%);
                    opacity: 1;
                }
                to {
                    transform: scale(20) rotate(960deg) translate(-50%, -50%);
                    opacity: 0;
                }
            }

            @keyframes cube {
                from {
                    transform: scale(0) rotate(0deg) translate(-50%, -50%);
                    opacity: 1;
                }
                to {
                    transform: scale(20) rotate(960deg) translate(-50%, -50%);
                    opacity: 0;
                }
            }

            @media screen and (min-width: 1030px) {
                .app-menu {
                    border: 9px solid white !important;
                    border-radius: 20px !important;
                }
            }

            @media screen and (min-width: 467px) {
                .navbar-menu .navbar-nav .nav-link {
                    padding-left: 15px;
                }
            }
        </style>

        @stack('css')
    </head>

    <body>
