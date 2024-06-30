<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">
    <title>Maxy Academy | {{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <style>
        .profile-img {
            width: 100px;
        }

        @media (max-width: 768px) {
            .navbar-vertical {
                width: 100%;
                position: static;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
        id="sidenav-main">
        <div class="text-center mb-5 mt-5">
            <img src="/img/avatars/profile.jpg" class="rounded-circle profile-img" alt="User Profile">
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
                    <a class="nav-link active" href="/profile-student">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-secondary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">My Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/activity-student">
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
