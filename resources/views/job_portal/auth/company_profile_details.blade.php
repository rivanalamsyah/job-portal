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

    <section class="blog_area single-post-area section-padding pt-20 pb-20">
        <div class="container">
            <div class="row">
                <!-- about company Start -->
                @include('job_portal.layouts.auth.company_details')
                <!-- about company End -->

                <!-- job availables Start -->
                @include('job_portal.layouts.auth.job_availables')
                <!-- job availables End -->
            </div>
        </div>
    </section>

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
