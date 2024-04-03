@php
$services = App\Models\service::orderBy ('id','ASC')->get();

@endphp




<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="logo"><img class="img-fluid me-2" src="assets/img/image.png" alt="" style="width: 45px;">Unico IT
            Limited</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right:28%;">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link ">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
            <!-- <a href="roadmap.html" class="nav-item nav-link">Roadmap</a> -->
            
            <!--<div class="nav-item dropdown">-->
            <!--    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>-->
            <!--    <div class="dropdown-menu shadow-sm m-0">-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">Software Development</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">Web Development</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">App Development</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">Digital Marketing</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">E-commerce Website Development</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">Customization Service</a>-->
            <!--        <a href="{{ url('#') }}" target="blank" class="dropdown-item">Cyber Security</a>-->

            <!--    </div>-->
            <!--</div>-->
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                <div class="dropdown-menu shadow-sm m-0">
                    @foreach($services as $item)
                    <a href="{{ route('service', $item->title) }}" class="dropdown-item" style="text-transform:none;">{{$item->title}}</a>
                    @endforeach

                </div>
            </div>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="{{ url('https://hms.unicoit.com/') }}" target="blank" class="dropdown-item">Hotel Management System</a>
                    <a href="{{ url('https://travel.unicoit.com/') }}" target="blank" class="dropdown-item">Travel & Booking Website</a>
                    <a href="{{ url('https://rms.unicoit.com/') }}" target="blank" class="dropdown-item">Restaurant Management System</a>
                    <a href="{{ url('https://3dhomes.unicoit.com/') }}" target="blank" class="dropdown-item">Real Estate Website</a>
                    <a href="{{ url('https://ortafox.com/') }}" target="blank" class="dropdown-item">E-Commerce Website</a>
                    <a href="{{ url('https://amzadinternational.unicoit.com') }}" target="blank" class="dropdown-item">Multi Vendor E-Commerce Website</a>
                    <a href="{{ url('https://ecommerce-three.unicoit.com/') }}" target="blank" class="dropdown-item">Furniture E-commerce Website</a>
                     <a href="{{ url('https://ecommerce-one.unicoit.com/') }}" target="blank" class="dropdown-item">Furniture E-commerce Website V2</a>
                    <a href="{{ url('https://cms.unicoit.com/') }}" target="blank" class="dropdown-item">Courier Management System</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
            {{-- <a href="#" class="nav-item nav-link">LogIn</a> --}}
        </div>
    </div>
</nav>
<!-- Navbar End -->