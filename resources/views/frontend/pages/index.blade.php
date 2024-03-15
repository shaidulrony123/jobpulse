@extends('frontend.layout.app')

@section('frontend_content')
    <!-- Banner Sectoin -->
    <section id="page-banner" style="background: url('{{ asset('assets/img/banner/banner.jpg') }}') no-repeat center/cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </section>


    <!-- Category Section -->
    <section id="categoryList" class="overflow-hidden space-top">
        <div class="container bg-white">
            <div class="section-title text-center">
                <h1 class="fw-bolder">Explore By Category</h1>
            </div>
            <div class="row p-4 justify-content-center">
            @foreach ($category as $categoryItem)
                <div class="col-lg-3 border m-2 categoryItem">
                    <a href="{{ route('alljobs-by-category', $categoryItem->category_id)}}" target="_blank" class="text-decoration-none">
                        <h4 class="mb-2">{{ $categoryItem->category_name }}</h4>
                        <p>{{ $categoryItem->total_jobs }} Job</p>
                    </a>

                </div>
            @endforeach
            </div>
        </div>
    </section>


    <!-- Job Section -->
    <section id="jobList" class="overflow-hidden space-top">
        <div class="container joblist-inner">
            <div class="section-title text-center">
                <h1 class="fw-bolder">Job Listing</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($jobsList as $Jobs)
                    <div class="job-list-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="job-cnt">
                                    <a href="{{ route('job-details', $Jobs->id)}}" class="text-primary text-decoration-none fs-5 fw-bold">{{$Jobs->designation}}</a></h5>
                                    <p class="fw-bold ">{{$Jobs->organization_name}}</p>
                                    <p class="text-gray"><i class="fa-solid fa-location-dot"></i> {{$Jobs->job_location}}</p>
                                    <p class="mb-1"><i class="fa fa-calendar"></i> Deadline: <b>{{$Jobs->application_deadline}}</b></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-cnt">

                                    <p class="mb-1"><i class="fa-solid fa-briefcase"></i> {{$Jobs->experience}}</p>
                                    <p class="mb-1"><i class="fa-solid fa-graduation-cap"></i> {{$Jobs->education}}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="job-cnt">

                                    <a href="{{ route('apply_job', $Jobs->id)}}" class="btn btn-md btn-primary ap-btn">Apply Now</a>

                                    <a href="{{ route('job-details', $Jobs->id)}}" class="btn btn-md btn-primary mt-3">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <section class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Company</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms &amp; Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms &amp; Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contact</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" spellcheck="false" data-ms-editor="true">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        © <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
