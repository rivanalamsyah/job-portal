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
        <!-- job post company Start -->
        <div class="job-post-company pt-20 pb-20">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">

                        <!-- job single -->
                        @include('job_portal.layouts.guest.job_single')
                        <!-- job single End -->

                        <!-- job description -->
                        @include('job_portal.layouts.guest.job_description')
                        <!-- job description End -->

                    </div>
                    <!-- Right Content -->

                     <!-- job overview -->
                     @include('job_portal.layouts.guest.job_overview')
                     <!-- job overview End -->

                </div>
            </div>
        </div>
        <!-- job post company End -->
    </main>

    <!-- footer start -->
    @include('job_portal.layouts.footer')
    <!-- footer End -->

    <!-- JS here -->
    @include('job_portal.layouts.scripts')

</body>

</html>
