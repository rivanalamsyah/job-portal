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

        <!-- Online CV Area Start -->
        <div class="online-cv cv-bg section-overly pt-70 pb-100" data-background="img/background/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="/signin-student" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->

        <!-- Featured_job_start -->
        @include('job_portal.layouts.guest.featured_job')
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

        <!-- Blog Area Start -->
        @include('job_portal.layouts.guest.blog_preview')

    </main>

    <!-- footer start -->
    @include('job_portal.layouts.footer')
    <!-- footer End -->

    <!-- JS here -->
    @include('job_portal.layouts.scripts')

</body>

</html>
