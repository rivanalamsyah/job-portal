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
        @include('job_portal.layouts.slider2')
        <!-- slider Area End-->

        <!-- Job List Area Start -->
        <div class="job-listing-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <!-- filter job Start -->
                    @include('job_portal.layouts.guest.filter_job')
                    <!-- filter job End -->

                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">

                                <!-- sort job Start -->
                                @include('job_portal.layouts.guest.sort_job')
                                <!-- sort Job list End -->

                                <!-- list job Start -->
                                @include('job_portal.layouts.guest.list_job')
                                <!-- list Job list End -->

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
