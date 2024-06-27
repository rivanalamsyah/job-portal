<!-- app start -->
@include('job_portal.layouts.app')
<!-- app end -->

<body>

    <!-- Preloader Start -->
    @include('job_portal.layouts.preloader')
    <!-- Preloader end -->

    <header>
        <!-- Header Start -->
        @include('job_portal.layouts.auth.header_after')
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        @include('job_portal.layouts.auth.slider')
        <!-- slider Area End-->

        <!-- Our Services Start -->
        @include('job_portal.layouts.auth.categories')
        <!-- Our Services End -->

        <!-- Featured_job_start -->
        @include('job_portal.layouts.auth.featured_job')
        <!-- Featured_job_end -->

        <!-- top job -->
        @include('job_portal.layouts.auth.top_job')
        <!-- top job -->

    </main>

    <!-- banner start -->
    @include('job_portal.layouts.banner')
    <!-- banner End -->

    <!-- footer start -->
    @include('job_portal.layouts.footer')
    <!-- footer End -->

    <!-- JS here -->
    @include('job_portal.layouts.scripts')

</body>

</html>
