<div class="topbar d-print-none">
    <div class="container-xxl">
        <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">

            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li>
                    <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                        <i class="iconoir-menu-scale"></i>
                    </button>
                </li>
                <li class="mx-3 welcome-text">
                    <h3 class="mb-0 fw-bold text-truncate">Good Morning, {{ Auth()->user()->name }}

                        @if ($dailyBalance && $dailyBalance->status == 'open')
                            <a href="{{ route('user.daily.balance.close') }}" class="btn btn-danger">Close Store</a>
                        @else
                            <a href="{{ route('user.daily.balance.open') }}" class="btn btn-success">Open Store</a>
                        @endif
                    </h3>

                </li>
            </ul>
            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li class="dropdown topbar-item">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown"
                        href="pages-starter.html#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt=""
                            class="thumb-lg rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt=""
                                    class="thumb-md rounded-circle">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                <h6 class="my-0 fw-medium text-dark fs-13">{{ Auth()->user()->name }}</h6>
                                <small class="text-muted mb-0">Admin</small>
                            </div>
                        </div>
                        <div class="dropdown-divider mt-0"></div>
                        <small class="text-muted px-2 pb-1 d-block">Account</small>
                        <a class="dropdown-item" href="pages-profile.html"><i
                                class="las la-user fs-18 me-1 align-text-bottom"></i> Profile</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item text-danger" href="href=" {{ route('user.logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i
                                class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

    </div>
</div>


<div class="startbar d-print-none">

    <div class="brand">
        <a href="{{ route('user.home') }}" class="logo">
            <span>
                Owais & Co.
            </span>

        </a>
    </div>


    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">

                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.users.index') }}">
                            <i class="iconoir-candlestick-chart menu-icon"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.blogs.index') }}">
                            <i class="iconoir-candlestick-chart menu-icon"></i>
                            <span>Blogs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="startbar-overlay d-print-none"></div>
