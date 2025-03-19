<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.layouts.partials.head')

<body>
    <div class="page-wrapper">

        <!-- Page Content-->

        @yield('content')
        </main>
    </div>

    @include('admin.layouts.partials.scripts')

</body>

</html>
