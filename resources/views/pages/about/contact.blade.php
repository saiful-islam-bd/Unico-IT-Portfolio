@extends('layouts.app')
@section('content')

<!-- Header Start -->
<style>
    @media screen and (max-width: 480px) {
        .contact-mbl {
            padding-top: 70px !important;
            padding-bottom: 70px !important;
        }
        .mbl-text{
            font-size: 36px !important;
        }
    }
</style>
<div class="">
    <div class="row">
        <div class="col-lg-12 col-md-12" style="background-image: url('public/assets/img/page-image/subs-bg.jpg'); background-repeat: no-repeat; width:100%;">
            <div class="text-center contact-mbl" style="padding-top: 160px;padding-bottom: 160px;">
                <p class="mbl-text" style="font-size: 60px; color:#fff; font-weight:700;">Contact Us</p>
            </div>
        </div>
    </div>
</div>

<!-- Header End -->


<!--  Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 20px;">
                <h1 class="display-6">Contact Us</h1>
                <p class="contact-heading">If You Have Any Query, Please Contact Us</p>
            </div>
           
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 20px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7761760229296!2d101.70754457467623!3d3.153635096821761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3771d1a5dc15%3A0x23c1faa81dd46731!2s20%2C%20Jalan%20Perak%2C%20Kuala%20Lumpur%2C%2050450%20Wilayah%20Persekutuan%2C%20Wilayah%20Persekutuan%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sbd!4v1684227802821!5m2!1sen!2sbd" width="100%" height="350" style="border:0;margin-top: 0px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 0px; padding-top: 30px;">
                <form action="https://formspree.io/f/xpzebgeq" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 ">
                        <input type="submit" value="Send" style="padding: 5px 25px; background-color:#b13888; border:none; border-radius:4px; color:#fff; float:left;">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Address Start -->
<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card-2" style="padding: 20px;">
                    <img src="assets/img/Country/logo-01.png" alt="Avatar" style="width:65%; margin-top:30px;">
                    <div class="container">
                        <br> <br>
                        <h4><b>Head Office</b></h4>
                        <p> Unico It Limited @Soho Suites KLCC, No.20, Jalan Perak 50450 Kuala Lumpur, Malaysia</p>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-2" style="padding: 20px;">
                    <img src="assets/img/Country/logo-01.png" alt="Avatar" style="width:65%; margin-top:30px;">
                    <div class="container">
                        <br> <br>
                        <h4><b>Canada Office</b></h4>
                        <p> 250 Yonge St #2201, Toronto, ON M5B 2L7, Canada Toronto, ON, Canada M5B2L7</p>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card-2" style="padding: 20px;">
                    <img src="assets/img/Country/logo-01.png" alt="Avatar" style="width:65%; margin-top:30px;">
                    <div class="container">
                        <br> <br>
                        <h4>Bangladesh Office</h4>
                        <p> Unico IT Limited @ Road 34, Gulshan 2, Dhaka-1212, Dhaka, <br>Bangladesh</p>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-lg-3 col-md-6">
            </div>
            {{-- <div class="col-sm">


                    

                </div> --}}
        </div>
    </div>
</div>
<!-- Address End -->


@endsection