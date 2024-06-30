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
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
        id="sidenav-main">
        <div class="text-center mb-5 mt-5">
            <img src="/img/avatars/profile.jpg" class="rounded-circle profile-img" alt="User Profile"
                style="width: 100px;">
            <h5 class="text-sm mt-3 text-uppercase font-weight-bold">Rivan Alamsyah</h5>
            <p class="text-xs mb-3 font-weight-bold">alamsyahrivan14@gmail.com</p>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard-student">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-course">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-book text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Course</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/order-history">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-history text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Order History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile-student">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-secondary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/activity-student">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-tasks text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Activity</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg">
        <!-- Content Section -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-start align-items-center">
                    <a href="/save-job" class="position-relative me-5"
                        style="font-weight: bold; text-decoration: none;">
                        <i class="fas fa-bookmark"></i> Saved
                        <span
                            style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 3px; background-color: rgb(38, 79, 228);"></span>
                    </a>
                    <a href="/activity-student" class="position-relative"
                        style="font-weight: bold; text-decoration: none;">
                        <i class="fas fa-check-circle"></i> Applied
                    </a>
                </div>
            </div>
            <div class="alert alert-success mt-5" role="alert" style="color: white;">
                Remember, you've saved this job before. Apply now to boost your chances of being recruited!
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4 col-md-2 ms-3 mt-3 mb-3 d-flex align-items-center justify-content-start">
                                <img src="img/logo_company/logo_traveloka.jpeg" alt="traveloka"
                                    style="max-width: 100%; height: auto; border-radius: 30px;">
                            </div>
                            <div class="col-8 col-md-8">
                                <div class="card-body">
                                    <h1 class="text-lg mt-3 text-uppercase font-weight-bold">System Analyst</h1>
                                    <h2 class="text-sm mb-3 font-weight-bold">PT Traveloka</h2>
                                    <p class="text-xs mb-3 font-weight-bold">
                                        <i class="fas fa-dollar-sign"></i> Rp 5000.000 - Rp 10.000.000
                                    </p>
                                    <p class="text-xs mb-3 font-weight-bold">
                                        <i class="fas fa-calendar-alt"></i> Dikirim pada: 24/10/2024 10:30
                                    </p>
                                    <button type="button" class="btn btn-xs btn-outline-primary"
                                        disabled>Technology</button>
                                    <button type="button" class="btn btn-xs btn-outline-warning"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4 col-md-2 ms-3 mt-3 mb-3 d-flex align-items-center justify-content-start">
                                <img src="img/logo_company/logo_bni.jpeg" alt="bni"
                                    style="max-width: 100%; height: auto; border-radius: 30px;">
                            </div>
                            <div class="col-8 col-md-8">
                                <div class="card-body">
                                    <h1 class="text-lg mt-3 text-uppercase font-weight-bold">Digital Marketing</h1>
                                    <h2 class="text-sm mb-3 font-weight-bold">PT Traveloka</h2>
                                    <p class="text-xs mb-3 font-weight-bold">
                                        <i class="fas fa-dollar-sign"></i> Rp 5000.000 - Rp 10.000.000
                                    </p>
                                    <p class="text-xs mb-3 font-weight-bold">
                                        <i class="fas fa-calendar-alt"></i> Dikirim pada: 24/10/2024 10:30
                                    </p>
                                    <button type="button" class="btn btn-xs btn-outline-primary"
                                        disabled>Technology</button>
                                    <button type="button" class="btn btn-xs btn-outline-warning"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/job-listing-student" class="btn btn-primary mt-3 mb-3">Explore other jobs</a>
        </div>
    </main>
    <!-- End Content Section -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/js/plugins/chartjs.min.js"></script>
    <script src="/js/argon-dashboard.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
</body>

</html>
