<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin.layouts.partials.head')
<body>

    @include('admin.layouts.partials.navbar')


    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                @yield('content')

            </div>


            <!--Start Footer-->
            @include('admin.layouts.partials.footer')



            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    @include('admin.layouts.partials.scripts')



</body>

</html>
