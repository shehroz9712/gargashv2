@extends('user.layouts.app')

@section('css')
    <style>
        /* Custom styles for carousel navigation buttons */
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            /* Adjust size */
            height: 40px;
            /* Adjust size */
            background-color: #202D75;
            /* Background color */
            border-radius: 50%;
            /* Make it circular */
            top: 50%;
            /* Center vertically */
            transform: translateY(-50%);
            /* Center vertically */
            opacity: 1;
            /* Ensure it's visible */
        }

        .carousel-control-prev {
            left: -20px;
            /* Position to the left */
        }

        .carousel-control-next {
            right: -20px;
            /* Position to the right */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: brightness(0) invert(1);
            /* Make icons white */
            width: 20px;
            /* Adjust icon size */
            height: 20px;
            /* Adjust icon size */
        }
    </style>
    <style>
        @media (min-width: 768px) {
            .Featured-section {
                margin-top: -6rem;
            }
        }
    </style>
    <style>
        /* Customize carousel arrows */
        .blogCarousel {
            background-color: #202D75 !important;
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        @media (min-width:1200px) {
            .left-icon {
                margin-left: -1rem;
            }

            .right-icon {
                margin-right: -1rem;
            }
        }
    </style>
@endsection


@section('content')
    <section class=" blog-section-hero-bg container-fluid vh-100 blogs-hero-height-responsive blog-bg">
        <div class="align-items-center container d-flex flex-column h-100 justify-content-center w-100">
            <div class="text-center">
                <h1 class="fw-bold blogs-hero-heading-font-size-responsive text-black">Pitstop to <span
                        style="color:#E6B110;">Brilliance</span>
                </h1>
                <p class="fs-6 fw-normal text-dark">Your go-to luxury car care destination for expert service and insights to
                    ensure a smooth and worry-free drive. </p>
            </div>
            <div class="align-items-center d-flex gap-4 flex-column justify-content-center w-100">
                <form action="{{ route('user.blog.search') }}" method="GET">
                    @csrf
                    <div class="align-items-center bg-white d-flex justify-content-between px-3 py-2 rounded-3 w-75">
                        <span class="align-items-center d-flex gap-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" name="query" placeholder="Search article" autofocus>
                        </span>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <div class="align-items-md-center d-flex flex-column flex-md-row gap-2 w-75">
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
                    <p class="fs-6 fw-light">{{ Str::limit($featuredBlog->short_content, 150) }}</p>
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

    <section class="container py-5">
        <div class="align-items-center row">
            <div class="col-md-12 text-start">
                <div class="d-flex flex-column gap-2">
                    <h2 class="display-6 m-0 fw-bolder">
                        <span style="color: #E6B110;">Popular</span> Articles
                    </h2>
                    <p class="fs-6 fw-light lh-base m-0">We share common trends, strategies ideas, opinions, short & long
                        stories from the team behind company.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center g-2 h-100">
            <div class="col-md-12 d-flex flex-column flex-md-row gap-3 h-100">
                @foreach ($mostViewedBlogs as $index => $blog)
                    <div class="bolg-image-{{ $index + 1 }} col-md-6 d-flex flex-column h-100 justify-content-between px-4 py-3"
                        style="background-image: url('{{ asset($blog->image) }}'); background-size: cover; background-position: center;">
                        <span class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">Featured</span>
                        <a href="{{ route('user.blog.detail', $blog->id) }}">
                            <div class="d-flex flex-column gap-3 pb-4">
                                <h2 class="fs-3 fw-semibold lh-sm text-light">{{ $blog->title }}</h2>
                                <div class="d-flex justify-content-between">
                                    <span class="align-items-center d-flex gap-2">
                                        <img src="{{ asset('assets/user/img/bolg-icon-logo.png') }}" alt=""
                                            class="img-fluid">
                                        <span>
                                            <p class="fs-6 fw-bold lh-base m-0 text-light">By {{ $blog->author }}</p>
                                            <span>
                                                <span class="align-items-center d-flex gap-1">
                                                    <i class="fa-solid fa-circle-check"
                                                        style="color: #36B37E; background: #36b37e29;"></i>
                                                    <p class="fs-6 fw-lighter m-0 text-light">Verified</p>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="m-0 my-auto text-secondary">{{ $blog->created_at->format('F d, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <section class="container py-5">
        <div class="row">
            <div class="col-md-12 text-start">
                <div class="d-flex flex-column gap-2">
                    <h2 class="display-6 m-0 fw-bolder">
                        <span style="color: #E6B110;">Recent</span> Articles
                    </h2>
                    <p class="fs-6 fw-light lh-base m-0">Here’s what we've been up to recently.</p>
                </div>
            </div>
        </div>

        <div class="blogs-popular-articales-hight-responsive container">
            <div class="h-100 row align-items-center g-2 justify-content-center">
                <div class="h-100 carousel slide" data-bs-ride="carousel" id="blogCarousel">
                    <div class="h-100 carousel-inner mt-5">
                        @foreach ($blogs->chunk(4) as $chunk)
                            {{-- Group posts in sets of 4 --}}
                            <div class="h-100 carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="h-100 row">
                                    @foreach ($chunk as $blog)
                                        <div class="h-100 col-md-3">
                                            <a href="{{ route('user.blog.detail', $blog->id) }}">
                                                <div class="d-flex flex-column blog-img-5 h-100 justify-content-between px-4 py-3 rounded-4"
                                                    style="    background: url('{{ asset($blog->image) }}') no-repeat center center/cover;">
                                                    <span
                                                        class="Featured badge bg-light px-3 py-2 rounded rounded-pill text-dark w-fit">
                                                        Featured
                                                    </span>
                                                    <div class="d-flex flex-column gap-3 pb-4">
                                                        <div>
                                                            <h2 class="text-light fw-semibold fs-6 lh-sm">
                                                                {{ $blog->title }}</h2>
                                                            <p class="m-0 text-light fw-light lh-sm"
                                                                style="font-size:.8rem">
                                                                {{ Str::limit($blog->short_content, 100) }}
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span class="d-flex align-items-center gap-2">
                                                                <img alt="" class="img-fluid"
                                                                    src="{{ asset('assets/user/user/img/bolg-icon-logo.png') }}">
                                                                <span>
                                                                    <p class="m-0 text-light fw-semibold lh-base"
                                                                        style="font-size:small">By {{ $blog->author }}</p>
                                                                    <span class="d-flex align-items-center gap-1"
                                                                        style="font-size:small">
                                                                        <i class="fa-circle-check fa-solid"
                                                                            style="color:#36b37e;background:#36b37e29"></i>
                                                                        <p class="m-0 text-light fw-lighter"
                                                                            style="font-size:x-small">Verified</p>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <p class="m-0 my-auto text-secondary" style="font-size:small">
                                                                {{ $blog->created_at->format('F d, Y') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>

    </section>



    <section class="container py-5">
        <div class="align-items-center row">
            <div class="col-md-6 text-start">
                <div class="d-flex flex-column gap-2">
                    <h2 class="display-6 m-0 fw-bolder">
                        <span style="color: #E6B110;">Case </span> Studies
                    </h2>
                    <p class="fs-6 fw-light lh-base">Here’s what we've been up to recently.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end justify-content-start">
                <button type="button" class="bg-transparent btn btn-primary fs-6 w-50 w-md-25"
                    style="border: 4px solid #202D75; color:#202D75;"> View all <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>
    <section class="bg-white border container mb-md-5 overflow-visible p-0 rounded-4">
        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <a href="blog-details.php">
                                <img src="{{ asset('assets/user/img/blog-img-8.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 d-flex flex-column gap-3 py-4">
                            <span class="Featured badge p-2 rounded w-fit"
                                style="color: #36B37E; background: #36b37e29;">Featured</span>
                            <h2 class="fw-bold" style="color: #183B56;">The Benefits of Regular Car Servicing</h2>
                            <p class="fs-6 fw-light">In this digital generation where information can be easily obtained
                                within seconds, business cards ...</p>
                            <div class="align-items-center d-flex justify-content-between">
                                <div class="align-items-center d-flex gap-2 justify-content-center">
                                    <img src="{{ asset('assets/user/img/bolg-icon-logo.png') }}" alt=""
                                        class="img-fluid " style="max-width: 40%;">
                                    <span class="d-flex flex-column gap-1">
                                        <h6 class="fs-6 fw-bold m-0">By Gargash</h6>
                                        <span class="align-items-center d-flex gap-1">
                                            <i class="fa-solid fa-circle-check"
                                                style="color: #36B37E; background: #36b37e29;"></i>
                                            <p class="m-0 fs-6 fw-light">Verified</p>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('assets/user/img/blog-img-8.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 d-flex flex-column gap-3 py-4">
                            <span class="Featured badge p-2 rounded w-fit"
                                style="color: #36B37E; background: #36b37e29;">Featured</span>
                            <h2 class="fw-bold" style="color: #183B56;">The Benefits of Regular Car Servicing</h2>
                            <p class="fs-6 fw-light">In this digital generation where information can be easily obtained
                                within seconds, business cards ...</p>
                            <div class="align-items-center d-flex justify-content-between">
                                <div class="align-items-center d-flex gap-2 justify-content-center">
                                    <img src="{{ asset('assets/user/img/bolg-icon-logo.png') }}" alt=""
                                        class="img-fluid " style="max-width: 40%;">
                                    <span class="d-flex flex-column gap-1">
                                        <h6 class="fs-6 fw-bold m-0">By Gargash</h6>
                                        <span class="align-items-center d-flex gap-1">
                                            <i class="fa-solid fa-circle-check"
                                                style="color: #36B37E; background: #36b37e29;"></i>
                                            <p class="m-0 fs-6 fw-light">Verified</p>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-0 translate-middle-y left-icon">
                <button
                    class="align-items-center blogCarousel border-0 d-flex justify-content-center px-3 py-2 rounded-pill shadow text-light"
                    type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </div>
            <div class="position-absolute top-50 end-0 translate-middle-y right-icon">
                <button
                    class="align-items-center blogCarousel border-0 d-flex justify-content-center px-3 py-2 rounded-pill shadow text-light"
                    type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>


    @include('user.layouts.partials.sticky-icons')
@endsection

@section('js')
@endsection
