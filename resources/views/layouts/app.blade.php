<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')
<body>

    @include('layouts.partials.navbar')


    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                @yield('content')

            </div>


            <!--Start Footer-->
            @include('layouts.partials.footer')



            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    @include('layouts.partials.scripts')



</body>

</html>
