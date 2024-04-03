@extends('layouts.app')
@section('content')
    @php
        $about_us = App\Models\about_us::where('title', 'About Us')->get();
        $our_goal = App\Models\about_us::where('title', 'Our Goal')->get();
    @endphp
    <!-- Header Start -->
    <style>
        @media screen and (max-width: 480px) {
            .contact-mbl {
                padding-top: 70px !important;
                padding-bottom: 70px !important;
            }

            .mbl-text {
                font-size: 36px !important;
            }
            .mbl-abt-ban {
                width: 100% !important;
            }
        }
    </style>

    <div class="">
        <div class="row">
            <div class="col-lg-12 col-md-12"
                style=" width:100%;">
                
                <img class="mbl-abt-ban" src="public/assets/img/page-image/abt-bg.png" alt="Girl in a jacket">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    @foreach ($about_us as $item)
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid image-1" src="{{ asset('unico_admin/assets/image/' . $item->image) }}"
                            alt="" style="border-radius: 10px;">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6">About Us</h1>
                            <div class="text-dark about-text">
                                <div style="font-size: 17px;">
                                    {!! $item->about_text !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <!-- About End -->

    <style>
        .cont {
            position: relative;
            width: 100%;
            padding: 30px 30px;
            background-color: #fff;
            height: 11rem;
        }


        .cont:hover {
            height: 11rem;
            background-color: #e7a6c3;
            transition: 1.5s ease;

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
                    <div class="cont">
                        <img src="{{ asset('assets/img/ecommerce.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">E-Commerce</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/hospitality.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">HMS</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/real-estate.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Real-Estate</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/travelling.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Booking Systems</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/hospitality.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">RMS</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/education.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Education</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/ecommerce.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Software Development</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/website.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Web Development</p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 text-center" style="margin-bottom: 20px;">
                    <div class="cont">
                        <img src="{{ asset('assets/img/more.png') }}" alt="">
                        <p style="margin-top: 1rem; color: #000; font-family:sans-serif;">Many More</p>
                    </div>
                </div>


            </div>

        </div>
    </section>


    <!-- Our Goal -->

    <!--<div class="container-xxl py-5">-->
    <!--    <div class="container">-->
    <!--        @foreach ($our_goal as $item)
    -->
    <!--        <div class="row g-5 align-items-center">-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">-->
    <!--                <div class="h-100">-->
    <!--                    <h1 class="display-6">{{ $item->title }}</h1>-->
    <!--                    {!! $item->about_text !!}-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <img class="img-fluid" src="assets/img/Earth-Tech.png" alt="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--
    @endforeach-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Goal End -->
@endsection
