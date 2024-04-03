@extends('layouts.app')
    @section('content')

@foreach($services as $item)
    <!-- Header Start -->
    <div>
        <div class="row">
            <div class="col-lg-12">
                <img src="{{ asset('public/assets/img/test/'. $item->large_image)}}" alt="" style="width:100%">

            </div>
        </div>
    </div>
    {{-- <div class="container-fluid hero-header bg-light py-5 mb-5 common-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                
                <div class="col-lg-12 animated fadeIn">
                     <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                        src="" alt="">
                       
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header End -->


    <!-- seo Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center" >
                <!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">-->
                <!--    <img class="img-fluid" src="{{ asset('public/assets/img/test/'. $item->image)}}" alt="">-->
                <!--</div>-->
                <div class="col-lg-12 wow fadeInUp " data-wow-delay="0.5s">
                    <div class="h-100 text-center" style="padding-left:11px;padding-right:8px;color:#000;text-align:justify;">
                        <h2 class="display-6" style="margin-bottom:20px;">{{$item->title}}</h1>
                        <p style="text-align: justify";>{!!$item->long_description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- seo End -->
    
    <!-- Service Start -->
    <div class="container-xxl my-5 service-background">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Service Categories</h1>
                <br>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item" style="background-color: #f2f8fe; padding-top:3rem; padding-bottom:2rem;
                    padding-left:3rem; padding-right:3rem;">
                        <img class="img-fluid mb-4" src="{{ asset('public/assets/img/test/'. $item->image)}}" alt="">
                        <h5 class="mb-3">{{$item->title}}</h5>
                         {!!$item->short_description!!}
                       <br>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
    <!-- Service End -->
@endforeach

@endsection