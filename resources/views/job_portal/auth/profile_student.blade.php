<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <title>Maxy Academy | {{ $title }} </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .custom-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .custom-container h5,
        .custom-container p {
            color: #000000;
        }

        .card {
            border-radius: 10px;
        }

        .card-body h5,
        .card-body p {
            color: #000000;
        }

        .badge {
            font-size: 1rem;
        }
    </style>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#" target="_blank">
                <img src="/img/icon.png" class="navbar-brand-img h-100" alt="logo_maxy">
                <span class="ms-1 font-weight-bold">Rivan Alamsyah</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-book text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-history text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Order History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile-student">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-tasks text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Activity</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="main-content position-relative border-radius-lg ">
        <div class="container-fluid py-2">
            <div class="row">
                <div class="container my-4">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12">
                            <div class="custom-container">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="saved-tab" data-bs-toggle="tab"
                                            data-bs-target="#saved" type="button" role="tab" aria-controls="saved"
                                            aria-selected="false">Saved</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="applied-tab" data-bs-toggle="tab"
                                            data-bs-target="#applied" type="button" role="tab"
                                            aria-controls="applied" aria-selected="true">Applied</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="saved" role="tabpanel"
                                        aria-labelledby="saved-tab">
                                        <!-- Content for Saved Jobs will go here -->
                                        <p class="text-white">You have not saved any jobs yet.</p>
                                    </div>
                                    <div class="tab-pane fade show active" id="applied" role="tabpanel"
                                        aria-labelledby="applied-tab">
                                        <div class="single-job-items mb-50">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a
                                                        href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <img src="img/logo_company/logo_traveloka.jpeg"
                                                            alt="traveloka"
                                                            style="width: 85px; height: 85px; border-radius: 15px;">
                                                    </a>
                                                </div>
                                                <div class="job-tittle job-tittle1">
                                                    <a
                                                        href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <h4>Digital Marketing</h4>
                                                    </a>
                                                    <a href="/profile-company">
                                                        <h6>Traveloka</h6>
                                                    </a>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>Jakarta, Indonesia
                                                        </li>
                                                        <li><i class="fas fa-dollar-sign"></i>Rp 5.000.000 - Rp
                                                            10.000.000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link items-link2 f-right">
                                                <a
                                                    href="/job-details-student?title=Digital%20Marketing&company=Traveloka">Full
                                                    Time</a>
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="single-job-items mb-50">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a
                                                        href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <img src="img/logo_company/logo_traveloka.jpeg"
                                                            alt="traveloka"
                                                            style="width: 85px; height: 85px; border-radius: 15px;">
                                                    </a>
                                                </div>
                                                <div class="job-tittle job-tittle1">
                                                    <a
                                                        href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <h4>Digital Marketing</h4>
                                                    </a>
                                                    <a href="/profile-company">
                                                        <h6>Traveloka</h6>
                                                    </a>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>Jakarta, Indonesia
                                                        </li>
                                                        <li><i class="fas fa-dollar-sign"></i>Rp 5.000.000 - Rp
                                                            10.000.000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link items-link2 f-right">
                                                <a
                                                    href="/job-details-student?title=Digital%20Marketing&company=Traveloka">Full
                                                    Time</a>
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="single-job-items mb-50">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <img src="img/logo_company/logo_traveloka.jpeg" alt="traveloka"
                                                            style="width: 85px; height: 85px; border-radius: 15px;">
                                                    </a>
                                                </div>
                                                <div class="job-tittle job-tittle1">
                                                    <a href="/job-details-student?title=Digital%20Marketing&company=Traveloka">
                                                        <h4>Digital Marketing</h4>
                                                    </a>
                                                    <a href="/profile-company">
                                                        <h6>Traveloka</h6>
                                                    </a>
                                                    <ul>
                                                        <li><i class="fas fa-map-marker-alt"></i>Jakarta, Indonesia</li>
                                                        <li><i class="fas fa-dollar-sign"></i>Rp 5.000.000 - Rp 10.000.000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link items-link2 f-right">
                                                <a href="/job-details-student?title=Digital%20Marketing&company=Traveloka">Full Time</a>
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/js/plugins/chartjs.min.js"></script>
    <script src="/js/argon-dashboard.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
