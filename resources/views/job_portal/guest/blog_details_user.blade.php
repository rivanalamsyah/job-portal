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

    <section class="blog_area single-post-area section-padding pt-20 pb-20">
        <div class="container">
            <div class="row">

                <!-- blog content Start -->
                @include('job_portal.layouts.guest.blog_content')
                <!-- blog content End -->

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!-- blog search Start -->
                        @include('job_portal.layouts.guest.blog_search')
                        <!-- blog search End -->

                        <!-- blog categories Start -->
                        @include('job_portal.layouts.guest.blog_categories')
                        <!-- blog categories End -->

                        <!-- blog recent Start -->
                        @include('job_portal.layouts.guest.blog_recent_posts')
                        <!-- blog recent End -->

                        <!-- blog recent Start -->
                        @include('job_portal.layouts.guest.blog_tags')
                        <!-- blog recent End -->

                    </div>
                </div>
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
