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

                <!-- content blog start -->
                @include('job_portal.layouts.auth.blog_content')
                <!-- content blog End -->

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!-- search blog start -->
                        @include('job_portal.layouts.auth.blog_search')
                        <!-- search blog End -->

                        <!-- category blog start -->
                        @include('job_portal.layouts.auth.blog_categories')
                        <!-- category blog End -->

                        <!-- recent blog start -->
                        @include('job_portal.layouts.auth.blog_recent_posts')
                        <!-- recent blog End -->

                        <!-- tags blog start -->
                        @include('job_portal.layouts.auth.blog_tags')
                        <!-- tags blog End -->

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
