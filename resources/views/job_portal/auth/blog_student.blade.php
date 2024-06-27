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
    <!--================Blog Area =================-->
    <section class="blog_area section-padding pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <!-- blog item Start-->
                        @include('job_portal.layouts.auth.blog_item')
                        <!-- blog item End-->
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!-- blog search Start-->
                        @include('job_portal.layouts.auth.blog_search')
                        <!-- blog search End-->

                        <!-- blog categories Start-->
                        @include('job_portal.layouts.auth.blog_categories')
                        <!-- blog categories End-->

                        <!-- blog recent posts Start-->
                        @include('job_portal.layouts.auth.blog_recent_posts')
                        <!-- blog recent posts End-->

                        <!-- blog tags Start-->
                        @include('job_portal.layouts.auth.blog_tags')
                        <!-- blog tags End-->
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
