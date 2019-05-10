@extends('layouts.app')

@section('css')

    <style>
        .carousel-fade .carousel-inner .item {
            -webkit-transition-property: opacity;
            transition-property: opacity;
        }
        .carousel-fade .carousel-inner .item,
        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            opacity: 0;
        }
        .carousel-fade .carousel-inner .active,
        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }
        .carousel-fade .carousel-inner .next,
        .carousel-fade .carousel-inner .prev,
        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-control {
            z-index: 2;
        }

        /*
        Fade content bs-carousel with hero headers
        Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
        Image credits: unsplash.com
        */

        /********************************/
        /*       Fade Bs-carousel       */
        /********************************/
        .fade-carousel {
            position: relative;
            height: calc(100vh - 100px);
            overflow-y: hidden;
        }
        .fade-carousel .carousel-inner .item {
            height: 100vh;
        }
        .fade-carousel .carousel-indicators > li {
            margin: 0 2px;
            background-color: #f39c12;
            border-color: #f39c12;
            opacity: .7;
        }
        .fade-carousel .carousel-indicators > li.active {
            width: 10px;
            height: 10px;
            opacity: 1;
        }

        /********************************/
        /*          Hero Headers        */
        /********************************/
        .hero {
            position: absolute;
            top: 38%;
            left: 50%;
            z-index: 3;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 1px 1px 0 rgba(0,0,0,.75);
            -webkit-transform: translate3d(-50%,-50%,0);
            -moz-transform: translate3d(-50%,-50%,0);
            -ms-transform: translate3d(-50%,-50%,0);
            -o-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
        }
        .hero h1 {
            font-size: 6em;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }


        .fade-carousel .carousel-inner .item .hero {
            opacity: 0;
            -webkit-transition: 2s all ease-in-out 5s;
            -moz-transition: 2s all ease-in-out 5s;
            -ms-transition: 2s all ease-in-out 5s;
            -o-transition: 2s all ease-in-out 5s;
            transition: 2s all ease-in-out 5s;
        }
        .fade-carousel .carousel-inner .item.active .hero {
            opacity: 1;
            -webkit-transition: 2s all ease-in-out 5s;
            -moz-transition: 2s all ease-in-out 5s;
            -ms-transition: 2s all ease-in-out 5s;
            -o-transition: 2s all ease-in-out 5s;
            transition: 2s all ease-in-out 5s;
        }

        /********************************/
        /*            Overlay           */
        /********************************/
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 2;
            background-color: #080d15;
            opacity: .3;
        }

        /********************************/
        /*          Custom Buttons      */
        /********************************/
        .btn.btn-lg {padding: 10px 40px;}
        .btn.btn-hero,
        .btn.btn-hero:hover,
        .btn.btn-hero:focus {
            color: #f5f5f5;
            background-color: #1abc9c;
            border-color: #1abc9c;
            outline: none;
            margin: 20px auto;
        }

        /********************************/
        /*       Slides backgrounds     */
        /********************************/
        .fade-carousel .slides .slide-1,
        .fade-carousel .slides .slide-2,
        .fade-carousel .slides .slide-3 {
            height: 100vh;
            background-size: 100% 100%;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .fade-carousel .slides .slide-1 {
            background-image: url({{ asset('images/kumba-high-court-1.jpg') }});
        }
        .fade-carousel .slides .slide-2 {
            background-image: url({{ asset('images/kumba-high-court-3-car.jpg') }});
        }
        .fade-carousel .slides .slide-3 {
            background-image: url({{ asset('images/kumba-high-court-1.jpg') }});
        }

        /********************************/
        /*          Media Queries       */
        /********************************/
        @media screen and (min-width: 980px){
            .hero { width: 980px; }
        }
        @media screen and (max-width: 640px){
            .hero h1 { font-size: 4em; }
        }
    </style>

@endsection

@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br>
            <h3 class="text-center">Welcome {{$user->name}}</h3>
        </div>

    </div>
</div>--}}
<div class="carousel fade-carousel slide carousel-fade" data-ride="carousel"
     data-interval="5000" id="bs-carousel">
    <!-- Overlay -->
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active carousel-item">
            <div class="slide-1">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-2">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-3">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="hero">
            <hgroup>
                <h2>
                    <img src="{{asset('images/Coat_of_arms_of_Cameroon.svg')}}" style="height: 130px;" alt="Cameroon coat of arms">
                    Kumba Court of First Instance
                    <img src="{{asset('images/Coat_of_arms_of_Cameroon.svg')}}" style="height: 130px;" alt="Cameroon coat of arms"></h2>
                <h3>Welcome - {{$user->name}}</h3>
            </hgroup>
        </div>
    </div>
</div>



@endsection
