@extends('layouts.app')
@section('content')


    <!-- video section -->
    <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,700");

        .outter {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .video-container {
            height: 510px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        video {
            -o-object-fit: cover;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        * {
            box-sizing: border-box;
            font-family: Raleway, sans-serif;
        }

        .video-container:after {
            content: "";
            display: block;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .video-heading {
            text-transform: uppercase;
            margin: 0 0 1rem;
            padding: 0;
            line-height: 1;
            font-family: Raleway;
            font-weight: 700;
            color: #ED187A;
        }

            {
            body {
                background-color: lightblue;
            }
        }

        .sup {
            vertical-align: super;
            font-size: 1rem;
            margin-left: -11px;
        }

        @media only screen and (max-width: 480px) {
            .video-heading {
                font-size: 2.1rem !important;
            }

            .sup-mbl {
                font-size: 1rem !important;
            }

            .desc {
                font-size: 12px !important;
                color: #fff;
            }

            .video-container-mbl {
                height: 220px;
            }
        }


        @media (min-width: 1200px) {
            .video-heading {
                font-size: 5rem !important;
            }
        }

        .desc {
            font-family: Raleway;
            font-weight: 600;
            font-size: 21px;
            color: #ED187A;
        }

        .callout {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: left;
            flex-direction: column;
            height: 100%;
            text-align: left;
            position: relative;
            z-index: 10;
            width: 80%;
            margin: auto;
        }




        .support {
            position: fixed;
            bottom: 60px;
            right: 20px;
            text-transform: uppercase;
            font-size: 9px;
            letter-spacing: 1px;
            text-align: right;
            position: relative;
            z-index: 10;
        }

        .support a {
            color: white;
            text-decoration: none;
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }

        .support a:before {
            display: block;
            position: absolute;
            content: "";
            bottom: -2px;
            width: 0;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.3);
            transition: 0.3s;
        }

        .support a:hover:before {
            width: 100%;
        }

        .option2 {
            margin-top: 50px;
        }

        .option2 .callout {
            text-align: left;
            align-self: flex-start;
        }

        .option2 .callout h1 {
            text-align: left;
            width: 100%;
        }

        .option2 .callout .button {
            margin-right: auto;
        }

        .option2 .callout .desc {
            max-width: 500px;
            text-align: left;
            align-self: flex-start;
        }

        /*# sourceMappingURL=vi.css.map */
    </style>

    <section class="outter option1">
        <section class="video-container video-container-mbl">

            <video width="100%" height="100%" autoplay loop  muted playsinline>
                <source src="{{ asset('public/assets/video/Company Intro.mp4') }}" type="video/mp4">
            </video>

            <div class="callout">
                <h1 class="video-heading" style="font-size: 4rem;">unico it limited <sup class="sup sup-mbl"
                        style="vertical-align: super; font-size: 1.6rem; margin-left: -11px;">TM</sup>
                </h1>
                <div class="desc">We are the brand builders for tomorrow.</div>
            </div>
        </section>
    </section>



    <!-- video section end-->

    <!-- About Start -->
    @foreach ($about_us as $item)
        <!-- About Start -->
        <div class="">
            <div class="container" >
                <h1 class="" style="text-align: center; margin-bottom:20px; margin-top:30px; color:#a26994;">About Us</h1>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">

                            <div class="text-dark about-text">
                                <p class="text-dark fs-5 mb-4 ">{!! $item->about_text !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="{{ asset('assets/img/page-image/home.png') }}" alt=""
                             style="width:100%; border-radius:5px; height:23em; background:#000 ">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <!-- About End -->



    <!-- Why Us Start -->
    <style>
        .rainbow {
            /* Font options */
            font-family: sans-serif;
            text-shadow: 2px 2px 4px #ccc;
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 20px;

            /* Chrome, Safari, Opera */
            -webkit-animation: rainbow 5s infinite;

            /* Internet Explorer */
            -ms-animation: rainbow 5s infinite;

            /* Standar Syntax */
            animation: rainbow 5s infinite;
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes rainbow {
            0% {
                color: orange;
            }

            10% {
                color: purple;
            }

            20% {
                color: red;
            }

            30% {
                color: CadetBlue;
            }

            40% {
                color: #f9f57a;
            }

            50% {
                color: coral;
            }

            60% {
                color: green;
            }

            70% {
                color: cyan;
            }

            80% {
                color: DeepPink;
            }

            90% {
                color: DodgerBlue;
            }

            100% {
                color: orange;
            }
        }

        /* Internet Explorer */
        @-ms-keyframes rainbow {
            0% {
                color: orange;
            }

            10% {
                color: purple;
            }

            20% {
                color: red;
            }

            30% {
                color: CadetBlue;
            }

            40% {
                color: #f9f57a;
            }

            50% {
                color: coral;
            }

            60% {
                color: green;
            }

            70% {
                color: cyan;
            }

            80% {
                color: DeepPink;
            }

            90% {
                color: DodgerBlue;
            }

            100% {
                color: orange;
            }
        }

        /* Standar Syntax */
        @keyframes rainbow {
            0% {
                color: orange;
            }

            10% {
                color: purple;
            }

            20% {
                color: red;
            }

            30% {
                color: CadetBlue;
            }

            40% {
                color: #f9f57a;
            }

            50% {
                color: coral;
            }

            60% {
                color: green;
            }

            70% {
                color: cyan;
            }

            80% {
                color: DeepPink;
            }

            90% {
                color: DodgerBlue;
            }

            100% {
                color: orange;
            }
        }
    </style>

    <div class="">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="rainbow" style=" margin-top:30px;"> Why Us!</p>
                <br>
            </div>
            <div class="row g-5">
                @foreach ($why_us as $why)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex align-items-start">
                            {{-- <img class="img-fluid flex-shrink-0" src="assets/img/icon-7.png" alt=""> --}}
                            <div class="ps-3">

                                <div class="card why-us" style="background-image: linear-gradient(#f57db7, #8271b2); border-radius:5px !important;">
                                    <div class="card-body">
                                        <h4 style="color: #fff;">{!! $why->title !!}</h4>
                                        <div>
                                            <span style="color: #fff; font-size:17px;">{!! $why->short_description !!}</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Why Us! End -->


    {{-- Projects --}}

    <div class="container">
        <style>
            a {
                text-decoration: none;
            }

            .cd-intro {
                width: 90%;
                max-width: 768px;
                text-align: center;
            }

            .cd-intro {
                margin: 4em auto;
            }

            @media only screen and (min-width: 768px) {
                .cd-intro {
                    margin: 5em auto;
                }
            }

            @media only screen and (min-width: 1170px) {
                .cd-intro {
                    margin: 6em auto;
                }
            }

            .cd-headline {
                font-size: 3.5rem;
                line-height: 1.2;
            }

            @media only screen and (min-width: 768px) {
                .cd-headline {
                    font-size: 3.5rem;
                    font-weight: 700;
                }
            }

            @media only screen and (min-width: 1170px) {
                .cd-headline {
                    font-size: 3.5rem;
                }
            }

            .cd-words-wrapper {
                display: inline-block;
                position: relative;
                text-align: left;
            }

            .cd-words-wrapper b {
                display: inline-block;
                position: absolute;
                white-space: nowrap;
                left: 0;
                top: 0;
            }

            .cd-words-wrapper b.is-visible {
                position: relative;
            }

            .no-js .cd-words-wrapper b {
                opacity: 0;
            }

            .no-js .cd-words-wrapper b.is-visible {
                opacity: 1;
            }

            /* --xslide---- */
            .cd-headline.slide span {
                display: inline-block;
                padding: .2em 0;
            }

            .cd-headline.slide .cd-words-wrapper {
                overflow: hidden;
                vertical-align: top;
            }

            .cd-headline.slide b {
                opacity: 0;
                top: .2em;
            }

            .cd-headline.slide b.is-visible {
                top: 0;
                opacity: 1;
                -webkit-animation: slide-in 0.6s;
                -moz-animation: slide-in 0.6s;
                animation: slide-in 0.6s;
            }

            .cd-headline.slide b.is-hidden {
                -webkit-animation: slide-out 0.6s;
                -moz-animation: slide-out 0.6s;
                animation: slide-out 0.6s;
            }

            @-webkit-keyframes slide-in {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(-100%);
                }

                60% {
                    opacity: 1;
                    -webkit-transform: translateY(20%);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0);
                }
            }

            @-moz-keyframes slide-in {
                0% {
                    opacity: 0;
                    -moz-transform: translateY(-100%);
                }

                60% {
                    opacity: 1;
                    -moz-transform: translateY(20%);
                }

                100% {
                    opacity: 1;
                    -moz-transform: translateY(0);
                }
            }

            @keyframes slide-in {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(-100%);
                    -moz-transform: translateY(-100%);
                    -ms-transform: translateY(-100%);
                    -o-transform: translateY(-100%);
                    transform: translateY(-100%);
                }

                60% {
                    opacity: 1;
                    -webkit-transform: translateY(20%);
                    -moz-transform: translateY(20%);
                    -ms-transform: translateY(20%);
                    -o-transform: translateY(20%);
                    transform: translateY(20%);
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }
            }

            @-webkit-keyframes slide-out {
                0% {
                    opacity: 1;
                    -webkit-transform: translateY(0);
                }

                60% {
                    opacity: 0;
                    -webkit-transform: translateY(120%);
                }

                100% {
                    opacity: 0;
                    -webkit-transform: translateY(100%);
                }
            }

            @-moz-keyframes slide-out {
                0% {
                    opacity: 1;
                    -moz-transform: translateY(0);
                }

                60% {
                    opacity: 0;
                    -moz-transform: translateY(120%);
                }

                100% {
                    opacity: 0;
                    -moz-transform: translateY(100%);
                }
            }

            @keyframes slide-out {
                0% {
                    opacity: 1;
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                    transform: translateY(0);
                }

                60% {
                    opacity: 0;
                    -webkit-transform: translateY(120%);
                    -moz-transform: translateY(120%);
                    -ms-transform: translateY(120%);
                    -o-transform: translateY(120%);
                    transform: translateY(120%);
                }

                100% {
                    opacity: 0;
                    -webkit-transform: translateY(100%);
                    -moz-transform: translateY(100%);
                    -ms-transform: translateY(100%);
                    -o-transform: translateY(100%);
                    transform: translateY(100%);
                }
            }

            .colourful {
                animation: colorchange 8s infinite;
                /* animation-name followed by duration in seconds*/
                /* you could also use milliseconds (ms) or something like 2.5s */
                -webkit-animation: colorchange 8s infinite;
                /* Chrome and Safari */
                -moz-animation: colorchange 8s infinite;
                -ms-animation: colorchange 8s infinite;
                -o-animation: colorchange 8s infinite;
            }

            @keyframes colorchange {
                0% {
                    color: #eb008b;
                }

                25% {
                    color: #fff100;
                }

                50% {
                    color: #01a54f;
                }

                75% {
                    color: #00adef;
                }

                100% {
                    color: #eb008b;
                }
            }

            @-webkit-keyframes colorchange

            /* Safari and Chrome - necessary duplicate */
                {
                0% {
                    color: #eb008b;
                }

                25% {
                    color: #fff100;
                }

                50% {
                    color: #01a54f;
                }

                75% {
                    color: #00adef;
                }

                100% {
                    color: #eb008b;
                }
            }

            @-moz-keyframes colorchange {
                0% {
                    color: #eb008b;
                }

                25% {
                    color: #fff100;
                }

                50% {
                    color: #01a54f;
                }

                75% {
                    color: #00adef;
                }

                100% {
                    color: #eb008b;
                }
            }

            @-ms-keyframes colorchange {
                0% {
                    color: #eb008b;
                }

                25% {
                    color: #fff100;
                }

                50% {
                    color: #01a54f;
                }

                75% {
                    color: #00adef;
                }

                100% {
                    color: #eb008b;
                }
            }

            @-o-keyframes colorchange {
                0% {
                    color: #eb008b;
                }

                25% {
                    color: #fff100;
                }

                50% {
                    color: #01a54f;
                }

                75% {
                    color: #00adef;
                }

                100% {
                    color: #eb008b;
                }
            }
        </style>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center" style="padding-top: 40px;padding-bottom: 40px;">

                <h1 class="cd-headline slide">
                    <span style="font-weight: 700; color:#5f489d;">Our</span>
                    <span class="cd-words-wrapper colourful">
                        <b class="is-visible">Projects</b>
                        <b>Projects</b>
                        <b>Projects</b>
                    </span>
                </h1>
                <p style="color:#000; font-size:20px;">Bridge Your Business with the Virtual World</p>


                <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


            </div>
        </div>

        <style>
            /* Style tab links */
            .tablink {
                background-color: #bba2ff;
                color: #000;
                
                border: none;
                outline: none;
                cursor: pointer;
                padding: 8% 0;
                font-size: 16px;
                width: 100%;
                height: 100%;
                border-radius: 4px;
                margin-right: 20px;
            }

            .tablink:hover {
                background-color: #777;
                color: #fff;
            }

            /* Style the tab content (and add height:100% for full page content) */
            .tabcontent {
                color: white;
                display: none;
                padding: 25px 0px;
                height: 100%;
            }

            .but:hover {
                background-color: #afa329 !important;
            }

            @media screen and (max-width: 480px) {
                .tablink {
                background-color: #bba2ff;
                color: #000;
                
                border: none;
                outline: none;
                cursor: pointer;
                padding: 8% 0;
                font-size: 12px;
                width: 100%;
                height: 100%;
                border-radius: 4px;
                margin-right: 20px;
            }

            .tablink:hover {
                background-color: #777;
                color: #fff;
            }
            }

            /* #Home {background-color: red;}
    #News {background-color: green;}
    #Contact {background-color: blue;}
    #About {background-color: orange;} */
        </style>



        <div class="row">
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('hms', this)" id="defaultOpen">HMS</button>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('e_commerce', this, '#e12c7e')">E-Commerce</button>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('rms', this, '#79f1a6')">RMS</button>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('real_estate', this, '#faecb1')">Real Estate</button>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('education', this, '#aad6fa')">Education</button>
            </div>
            <div class="col-4 col-sm-4 col-md-2 col-lg-2" style="margin-bottom:8px;">
                <button class="tablink" onclick="openPage('web', this, '#fac2c0')">Websites</button>
            </div>
               
                
        </div>

        <div id="hms" class="tabcontent">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-3 col-lg-3" style="margin-bottom: 10px">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 5px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>HMS</h4>
                        <p style="color: #000;">Hotel Management System</p>
                        <a href="https://hms.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="e_commerce" class="tabcontent">
            <div class="row">
                
                
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>E-Commerce</h4>
                        <p style="color: #000;">E-Commerce</p>
                        <a href="https://ecommerce.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>E-Commerce For Furniture</h4>
                        <p style="color: #000;">Demo-1</p>
                        <a href="https://ecommerce-one.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>E-Commerce For Furniture</h4>
                        <p style="color: #000;">Demo-2</p>
                        <a href="https://ecommerce-two.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>E-Commerce For Furniture</h4>
                        <p style="color: #000;">Demo-3</p>
                        <a href="https://ecommerce-three.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
        
        

        <div id="real_estate" class="tabcontent">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>Real Estate</h4>
                        <p style="color: #000;">Real Estate</p>
                        <a href="https://3dhomes.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="rms" class="tabcontent">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>RMS</h4>
                        <p style="color: #000;">Restaurant Management System</p>
                        <a href="https://rms.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="education" class="tabcontent">
            <div class="row">

                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 10px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>Learnico</h4>
                        <p style="color: #000;">Education Management System</p>
                        <a href="https://learnico.unicoit.com/" target="blank"><button class="but"
                                style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="web" class="tabcontent">
            <div class="row">



                <div class="col-12 col-sm-12 col-md-3 col-lg-3" style="margin-bottom: 10px;">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 5px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>NJN INT. SDN BHD</h4>
                        <p style="color: #000;">interior design</p>
                        <a href="http://njninternational.com.my/" target="blank><button class="but"
                            style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3" style="margin-bottom: 10px;">
                    <div class="text-center"
                        style="background-color: #f3f5c8 ; border-radius:4px; border:1px solid #d3dc41; box-shadow: 5px 5px 5px #888;padding: 30px;">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="" style="margin-bottom: 15px;">
                        <h4>WANIA NJN TECHNICAL SERVICES</h4>
                        <p style="color: #000;">Civil Company</p>
                        <a href="https://www.waniatechnical.com/" target="blank><button class="but"
                            style="padding: 6px 30px; background-color: #a09410; border:none; border-radius:6px; font-size:14px; color:#fff;">View</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </div>




    {{-- Projects --}}

    <style>
        .cont {
            position: relative;
            width: 100%;
            padding: 30px 30px;
            background-color: #fff;
            height: 11rem;
            color: #000;
        }


        .cont:hover {
            height: 11rem;
            background-color: #5f489d;
            transition: 1s ease;
            color: #fff;

        }

        .title-word {
            animation: color-animation 4s linear infinite;
        }

        .title-word-1 {
            --color-1: #DF8453;
            --color-2: #194169;
            --color-3: #cf1195;
        }

        .title-word-2 {
            --color-1: #DBAD4A;
            --color-2: #ACCFCB;
            --color-3: #17494D;
        }

        .title-word-3 {
            --color-1: #194169;
            --color-2: #E4A9A8;
            --color-3: #cf1195;
        }

        .title-word-4 {
            --color-1: #cf1195;
            --color-2: #DF8453;
            --color-3: #194169;
        }

        @keyframes color-animation {
            0% {
                color: var(--color-1)
            }

            32% {
                color: var(--color-1)
            }

            33% {
                color: var(--color-2)
            }

            65% {
                color: var(--color-2)
            }

            66% {
                color: var(--color-3)
            }

            99% {
                color: var(--color-3)
            }

            100% {
                color: var(--color-1)
            }
        }

        /* Here are just some visual styles. 🖌 */



        .title {

            font-weight: 700;
            font-size: 3rem;
        }
    </style>

    <section style="background-color: #101d42; ">
        <div class="container">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center"
                    style="padding-top: 40px;padding-bottom: 40px;">
                    <h2 class="title">
                        <span class="title-word title-word-1">What</span>
                        <span class="title-word title-word-2">We</span>
                        <span class="title-word title-word-3">Serve</span>
                    </h2>
                    <p style="color:#fff;">Bridge Your Business with the Virtual World</p>
                </div>
            </div>

            <div class="row" style="margin-bottom: 40px;">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <a href="https://ecommerce.unicoit.com/">
                        <div class="cont">
                            <img src="{{ asset('assets/img/ecommerce.png') }}" alt="">
                            <p style="margin-top: 1rem; font-family:sans-serif;">E-Commerce</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/hospitality.png') }}" alt="">
                        <p style="margin-top: 1rem; font-family:sans-serif;">HMS</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="">
                        <p style="margin-top: 1rem;  font-family:sans-serif;">Real-Estate</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/travelling.png') }}" alt="">
                        <p style="margin-top: 1rem;  font-family:sans-serif;">Booking Systems</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <a href="https://rms.unicoit.com/">
                        <div class="cont">
                            <img src="{{ asset('assets/img/hospitality.png') }}" alt="">
                            <p style="margin-top: 1rem; font-family:sans-serif;">RMS</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/education.png') }}" alt="">
                        <p style="margin-top: 1rem; font-family:sans-serif;">Education</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/ecommerce.png') }}" alt="">
                        <p style="margin-top: 1rem;  font-family:sans-serif;">Software Development</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/website.png') }}" alt="">
                        <p style="margin-top: 1rem;  font-family:sans-serif;">Web Development</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/more.png') }}" alt="">
                        <p style="margin-top: 1rem;  font-family:sans-serif;">Many More</p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- Partner logo slider -->

    <style>
        .back-color {
            background-color: #333;
        }

        .logos {
            width: 200px;
            height: 200px;
            animation: scroll 40s linear infinite;
        }

        .slide-track {
            width: 100%;
            display: flex;
            gap: 4em;
            overflow: hidden;
        }

        .slider {
            margin-top: 0px;
            margin-bottom: 0px;
            background-color: whitesmoke;
            padding: 4em 1em 5em 1em;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translatex(-1000%)
            }
        }
    </style>


    <div class="back-color">

        <div class="slider">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p style="font-weight: 800; font-size: 36px; color:#000; margin-bottom:50px;">Our Partners</p>
                </div>
            </div>
            <div class="slide-track">
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-01.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-02.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-03.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-04.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos"src="{{ asset('assets/img/logo/logo-05.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-06.png') }}" alt="">
                </div>

                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-08.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-09.png') }}" alt="">
                </div>
                <!--<div class="slide">-->
                <!--    <img class="logos" src="{{ asset('assets/img/logo/logo-10.png') }}" alt="">-->
                <!--</div>-->
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-11.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-12.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-16.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-13.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-14.png') }}" alt="">
                </div>
                <div class="slide">
                    <img class="logos" src="{{ asset('assets/img/logo/logo-15.png') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- Partner logo slider end -->

    <div style="background-color:;">
        <div class="container" style="padding-top: 50px; padding-bottom: 0px; ">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-lg-6">
                    <p style="font-weight: 700; font-size:32px; color:#000;">Ready to Get Started?</p>
                    <p style="font-size: 14px; color:#000; font-weight:600;">Join a network of over 250,000 professionals
                        who are <br> transforming and accelerating their careers through cutting edge <br> tech skills.
                        Speak with a Learning Advisor, who can help answer <br> any of your questions.</p>

                </div>

                <div class="col-12 col-sm-6 col-lg-6 col-lg-6">
                    <div
                        style="background-color: #040711; border-radius:5px; padding:50px 35px 40px 35px; border-top:7px solid #5f489d;">
                        <p style="font-weight: 700; font-size:30px; color:#fff;">Speak with our Expert Advisor</p>
                        <p style="font-weight: 500; font-size:16px; color:#fff;">Select a date and time and our Learning
                            Advisor will be come in your touch timely.</p>

                        <div style="background-color: #e7e7e7;border-radius:3px ">
                            <div class="row">
                                <div class="col-3 col-sm-3 col-md-2 col-lg-2 text-center"
                                    style="padding:25px 30px 25px 30px;">
                                    <i class="fa-solid fa-headset" style="font-size: 30px;"></i>
                                </div>
                                <div class="col-9 col-sm-9 col-md-10 col-lg-10 text-left"
                                    style="padding: 25px 25px 25px 0px; ">
                                    <p style="font-size: 14px; color:#000; font-weight:600; ">There are always available
                                        our Advisors in your location. </p>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

    <!--######################### OUR SERVICES SCRIPT##########################3-->

    <script>
        /* main.js */
        jQuery(document).ready(function($) {
            //set animation timing
            var animationDelay = 2500,
                //loading bar effect
                barAnimationDelay = 3800,
                barWaiting = barAnimationDelay -
                3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
                //letters effect
                lettersDelay = 50,
                //type effect
                typeLettersDelay = 150,
                selectionDuration = 500,
                typeAnimationDelay = selectionDuration + 800,
                //clip effect 
                revealDuration = 600,
                revealAnimationDelay = 1500;

            initHeadline();


            function initHeadline() {
                //insert <i> element for each letter of a changing word
                singleLetters($('.cd-headline.letters').find('b'));
                //initialise headline animation
                animateHeadline($('.cd-headline'));
            }

            function singleLetters($words) {
                $words.each(function() {
                    var word = $(this),
                        letters = word.text().split(''),
                        selected = word.hasClass('is-visible');
                    for (i in letters) {
                        if (word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] +
                        '</em>';
                        letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[
                            i] + '</i>';
                    }
                    var newLetters = letters.join('');
                    word.html(newLetters).css('opacity', 1);
                });
            }

            function animateHeadline($headlines) {
                var duration = animationDelay;
                $headlines.each(function() {
                    var headline = $(this);

                    if (headline.hasClass('loading-bar')) {
                        duration = barAnimationDelay;
                        setTimeout(function() {
                            headline.find('.cd-words-wrapper').addClass('is-loading')
                        }, barWaiting);
                    } else if (headline.hasClass('clip')) {
                        var spanWrapper = headline.find('.cd-words-wrapper'),
                            newWidth = spanWrapper.width() + 10
                        spanWrapper.css('width', newWidth);
                    } else if (!headline.hasClass('type')) {
                        //assign to .cd-words-wrapper the width of its longest word
                        var words = headline.find('.cd-words-wrapper b'),
                            width = 0;
                        words.each(function() {
                            var wordWidth = $(this).width();
                            if (wordWidth > width) width = wordWidth;
                        });
                        headline.find('.cd-words-wrapper').css('width', width);
                    };

                    //trigger animation
                    setTimeout(function() {
                        hideWord(headline.find('.is-visible').eq(0))
                    }, duration);
                });
            }

            function hideWord($word) {
                var nextWord = takeNext($word);

                if ($word.parents('.cd-headline').hasClass('type')) {
                    var parentSpan = $word.parent('.cd-words-wrapper');
                    parentSpan.addClass('selected').removeClass('waiting');
                    setTimeout(function() {
                        parentSpan.removeClass('selected');
                        $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass(
                            'in').addClass('out');
                    }, selectionDuration);
                    setTimeout(function() {
                        showWord(nextWord, typeLettersDelay)
                    }, typeAnimationDelay);

                } else if ($word.parents('.cd-headline').hasClass('letters')) {
                    var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
                    hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
                    showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

                } else if ($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({
                        width: '2px'
                    }, revealDuration, function() {
                        switchWord($word, nextWord);
                        showWord(nextWord);
                    });

                } else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
                    $word.parents('.cd-words-wrapper').removeClass('is-loading');
                    switchWord($word, nextWord);
                    setTimeout(function() {
                        hideWord(nextWord)
                    }, barAnimationDelay);
                    setTimeout(function() {
                        $word.parents('.cd-words-wrapper').addClass('is-loading')
                    }, barWaiting);

                } else {
                    switchWord($word, nextWord);
                    setTimeout(function() {
                        hideWord(nextWord)
                    }, animationDelay);
                }
            }

            function showWord($word, $duration) {
                if ($word.parents('.cd-headline').hasClass('type')) {
                    showLetter($word.find('i').eq(0), $word, false, $duration);
                    $word.addClass('is-visible').removeClass('is-hidden');

                } else if ($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({
                        'width': $word.width() + 10
                    }, revealDuration, function() {
                        setTimeout(function() {
                            hideWord($word)
                        }, revealAnimationDelay);
                    });
                }
            }

            function hideLetter($letter, $word, $bool, $duration) {
                $letter.removeClass('in').addClass('out');

                if (!$letter.is(':last-child')) {
                    setTimeout(function() {
                        hideLetter($letter.next(), $word, $bool, $duration);
                    }, $duration);
                } else if ($bool) {
                    setTimeout(function() {
                        hideWord(takeNext($word))
                    }, animationDelay);
                }

                if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
                    var nextWord = takeNext($word);
                    switchWord($word, nextWord);
                }
            }

            function showLetter($letter, $word, $bool, $duration) {
                $letter.addClass('in').removeClass('out');

                if (!$letter.is(':last-child')) {
                    setTimeout(function() {
                        showLetter($letter.next(), $word, $bool, $duration);
                    }, $duration);
                } else {
                    if ($word.parents('.cd-headline').hasClass('type')) {
                        setTimeout(function() {
                            $word.parents('.cd-words-wrapper').addClass('waiting');
                        }, 200);
                    }
                    if (!$bool) {
                        setTimeout(function() {
                            hideWord($word)
                        }, animationDelay)
                    }
                }
            }

            function takeNext($word) {
                return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
            }

            function takePrev($word) {
                return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
            }

            function switchWord($oldWord, $newWord) {
                $oldWord.removeClass('is-visible').addClass('is-hidden');
                $newWord.removeClass('is-hidden').addClass('is-visible');
            }
        });
    </script>

    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it

        document.getElementById("defaultOpen").click();
    </script>

    <!-- Service Start -->
    <!-- <div class="container-xxl py-5 my-5 service-background">
            <div class="container py-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">Services</h1>
                    <br>
                </div>
                <div class="row g-4">
                    @foreach ($service as $service)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/' . $service->image) }}" alt="">
                            <h5 class="mb-3">{!! $service->title !!}</h5>
                            <p>{!! $service->short_description !!}</p><br>
                        </div>
                    </div>
    @endforeach
                    
                </div>
            </div>
        </div> -->
    <!-- Service End -->
@endsection
