@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
    <!-- Hero Section Start -->
    <section class=" blog-section-hero-bg container-fluid vh-100 blog-bg">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center w-100">
            <div class="text-center">
                <h1 style="font-size: 78.26px;" class="fw-bold text-black">Stay Updated with <span
                        style="color:#E6B110;">Gargash</span>
                </h1>
                <p class="fs-6 fw-normal text-dark">Your go-to luxury car care destination for expert service and insights to
                    ensure a smooth and worry-free drive. </p>
            </div>
            <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">
                <form action="{{ route('user.blog.search') }}" method="GET">
                    <div class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-75">
                        <span class="align-items-center d-flex gap-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" name="query" placeholder="Search article" autofocus>
                        </span>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <div class="align-items-center d-flex gap-2 w-75">
                    <h2 class="fs-5 fw-bold">Popular Tags :</h2>
                    <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                        <p class="fs-6 fw-normal m-0 px-3 py-1">Merc</p>
                    </div>
                    <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                        <p class="fs-6 fw-normal m-0 px-3 py-1">User Experience</p>
                    </div>
                    <div class="align-items-center border border-dark d-flex justify-content-center rounded-3">
                        <p class="fs-6 fw-normal m-0 px-3 py-1">User Interfaces</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Featured Section Start -->
    <style>
        @media (min-width: 768px) {
            .Featured-section {
                margin-top: -6rem;
            }
        }
    </style>
    @if ($featuredBlog)
        <section class="Featured-section bg-white container rounded-4 py-0">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img src="{{ asset($featuredBlog->image) }}" alt="{{ $featuredBlog->title }}"
                        style="object-fit: cover; object-position: center; background-position: center;">
                </div>
                <div class="col-md-6 d-flex flex-column gap-3 py-4">
                    <span class="Featured badge p-2 rounded w-fit" style="color: #36B37E; background: #36b37e29;">
                        Featured
                    </span>
                    <h2 class="fw-bold" style="color: #183B56;">{{ $featuredBlog->title }}</h2>
                    <p class="fs-6 fw-light">{{ Str::limit($featuredBlog->content, 150) }}</p>
                    <div class="align-items-center d-flex justify-content-between">
                        <div class="align-items-center d-flex gap-2">
                            <img src="{{ asset($featuredBlog->author_image) }}" alt="{{ $featuredBlog->author }}"
                                class="img-fluid " style="max-width: 10%;">
                            <span class="d-flex flex-column gap-1">
                                <h6 class="fs-6 fw-normal m-0">{{ $featuredBlog->author }}</h6>
                                <span class="align-items-center d-flex gap-1">
                                    <i class="fa-solid fa-circle-check" style="color: #36B37E; background: #36b37e29;"></i>
                                    <p class="m-0">Verified Author</p>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Featured Section End -->
    <!-- Text Area Start -->
    <section class="container">
        <div class="d-flex flex-column gap-3">
            <h2 class="fs-2 fw-semibold text-black text-center w-fit mx-auto" style="border-bottom:2px solid #E6B110;">How
                This Specialist Luxury Car Workshop Came to Be</h2>
            <span>
                <p>Our journey began with a passion for high-performance vehicles and a commitment to providing top-tier
                    service for luxury car owners. Recognizing the need for a dedicated workshop specializing in premium
                    automotive brands, we set out to create a space where precision, expertise, and customer satisfaction
                    come first.</p>
                <p>With years of experience in the automotive industry, our team of highly skilled professionals ensures
                    that every vehicle receives the care and attention it deserves. From routine maintenance to complex
                    repairs, we utilize advanced technology and industry-leading techniques to deliver exceptional results.
                </p>
                <p>Driven by our love for luxury cars and a vision to set new standards in automotive servicing, our
                    workshop has grown into a trusted name among enthusiasts and collectors. Our dedication to quality
                    workmanship and customer trust continues to fuel our success, making us the go-to destination for
                    specialist luxury car care.</p>
            </span>
        </div>
    </section>
    <!-- Text Area End -->
    <!-- Recent Articles Section Start-->
    <section class="container py-5 pb-0">
        <div class="align-items-center row">
            <div class="col-md-6 text-start">
                <div class="d-flex flex-column gap-2">
                    <h2 class="fs-2 m-0 fw-bolder">
                        <span style="color: #E6B110;">Relevant </span> Articles
                    </h2>
                    <p class="fs-6 fw-light lh-base m-0">Here’s what we've been up to recently.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-primary bg-transparent "
                    style="border: 4px solid #202D75; color:#202D75;"> View all <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- Recent Articles Section End-->
    <!-- Bold Section Start-->
    <p>asasas</p>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center g-2 h-100">
            <div class="col-md-12 d-flex gap-3 h-75 ">
                @foreach ($blogs as $blog)
                    <div class="blog-img-5 col-md-3 d-flex flex-column h-100 justify-content-between px-4 py-3 rounded-4">
                        <span class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                        <div class="d-flex flex-column gap-3 pb-4">
                            <div>
                                <h2 class="fs-6 fw-semibold lh-sm text-light">{{ $blog->title }}</h2>
                                <p class="fw-light lh-sm m-0 text-light" style="font-size: 0.8rem;">
                                    {{ Str::limit($blog->excerpt, 100) }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="align-items-center d-flex gap-2">
                                    <img src="{{ asset('assets/user/img/bolg-icon-logo.png') }}" alt=""
                                        class="img-fluid">
                                    <span>
                                        <p class="fw-semibold lh-base m-0 text-light" style="font-size: small;">By
                                            {{ $blog->author }}</p>
                                        <span>
                                            <span class="align-items-center d-flex gap-1" style="font-size: small;">
                                                <i class="fa-solid fa-circle-check"
                                                    style="color: #36B37E; background: #36b37e29;"></i>
                                                <p class=" fw-lighter m-0 text-light" style="font-size: x-small;">Verified
                                                </p>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <p class="m-0 my-auto text-secondary" style="font-size: small;">
                                    {{ $blog->created_at->format('F d, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- sticky-icons Section Start -->
    @include('user.layouts.partials.sticky-icons')

    <!-- sticky-icons Section End -->
@endsection

@section('js')
@endsection
