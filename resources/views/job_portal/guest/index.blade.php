<!-- app start -->
@include('job_portal.layouts.app')
<!-- app end -->

<body>

    <!-- Preloader Start -->
    @include('job_portal.layouts.preloader')
    <!-- Preloader end -->

    <header>
        <!-- Header Start -->
        @include('job_portal.layouts.guest.header_before')
        <!-- Header End -->
    </header>

    <main>

        <!-- slider Area Start-->
        @include('job_portal.layouts.guest.slider')
        <!-- slider Area End-->

        <!-- Our Services Start -->
        @include('job_portal.layouts.guest.categories')
        <!-- Our Services End -->

        <!-- Featured_job_start -->
        @include('job_portal.layouts.guest.featured_job')
        <!-- Featured_job_end -->

        <!-- Featured_job_start -->
        @include('job_portal.layouts.guest.top_job')
        <!-- Featured_job_end -->

        <!-- How  Apply Process Start-->
        @include('job_portal.layouts.apply_process')
        <!-- How  Apply Process End-->

        <!-- Testimonial Start -->
        @include('job_portal.layouts.guest.testimonial')
        <!-- Testimonial End -->

        <!-- Support Company Start-->
        @include('job_portal.layouts.guest.support_company')
        <!-- Support Company End-->

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
