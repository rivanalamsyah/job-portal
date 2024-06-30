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
        @include('job_portal.layouts.slider2')
        <!-- slider Area End-->
        
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <!-- filter job start -->
                    @include('job_portal.layouts.auth.filter_job')
                    <!-- filter job End -->

                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">

                                <!-- sort job start -->
                                @include('job_portal.layouts.auth.sort_job')
                                <!-- sort job End -->

                                <!-- list job start -->
                                @include('job_portal.layouts.auth.list_job')
                                <!-- list job End -->

                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->

        <!--Pagination Start  -->
        @include('job_portal.layouts.pagination')
        <!--Pagination End  -->
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
