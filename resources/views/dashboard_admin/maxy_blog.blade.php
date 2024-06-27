<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/icon.png">

    <title>Maxy Academy | {{ $title }} </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/dashboard-admin" target="_blank">
                <img src="/img/icon.png" class="navbar-brand-img h-100" alt="logo_maxy">
                <span class="ms-1 font-weight-bold">Maxy Academy</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard-admin">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#adsManagementSubmenu" data-bs-toggle="collapse"
                        aria-expanded="false">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-chart-bar-32 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Ads Management</span>
                    </a>
                    <div id="adsManagementSubmenu" class="collapse">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item">
                                <a class="nav-link" href="/billing">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-credit-card text-warning text-sm opacity-10"></i>
                                    </div>
                                    <span class="sidenav-normal"> Billing </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/campaign">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-bullet-list-67 text-primary text-sm opacity-10"></i>
                                    </div>
                                    <span class="sidenav-normal"> Campaign </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/packages">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-box-2 text-info text-sm opacity-10"></i>
                                    </div>
                                    <span class="sidenav-normal"> Packages </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/maxy-blog">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Maxy Blog</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile-admin">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signin-admin">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3">
            <div class="card card-plain shadow-none" id="sidenavCard">
                <img class="w-50 mx-auto" src="/img/img-blog/new-blog.jpg" alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0">New Blog?</h6>
                        <p class="text-xs font-weight-bold mb-0">Inspire the Future, Spread Opportunity.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-sm mb-0 w-100" href="/new-blog" type="button">Create New Blog</a>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Blog</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Maxy Blog</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="/profile-admin" class="nav-link text-white font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Admin</span>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-white p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell cursor-pointer"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
                                    aria-labelledby="dropdownMenuButton">
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="/img/team-1.jpg" class="avatar avatar-sm me-3"
                                                        alt="Profile Picture">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New Applicant</span> from Nadia
                                                        Aulia
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        13 minutes ago
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New Applicant</span> from Rivan
                                                        Alamsyah
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        30 minutes ago
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="/img/team-3.jpg" class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New Applicant</span> from Muslim
                                                        Safiq
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        49 minutes ago
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Blog Post
                                        </p>
                                        <h5 class="font-weight-bolder">180</h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+55%</span> since
                                            last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="fas fa-file-alt text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">All Time</p>
                                        <h5 class="font-weight-bolder">2548</h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span> since last
                                            week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="fas fa-chart-line text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">This Month</p>
                                        <h5 class="font-weight-bolder">275</h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">24%</span> since last
                                            quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="fas fa-calendar-alt text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Last Month</p>
                                        <h5 class="font-weight-bolder">495</h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than last
                                            month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="fas fa-chart-bar text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 py-4 px-4" id="blogContainer">
            <div class="col-3" id="blog1">
                <div class="card">
                    <img src="/img/blog/foto1.jpg" class="card-img-top" alt="blog1">
                    <div class="card-body">
                        <h5 class="card-title">Tips dan Trik Belajar Python untuk Developer Pemula</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog1" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton1">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog2">
                <div class="card">
                    <img src="/img/blog/foto2.jpg" class="card-img-top" alt="blog2">
                    <div class="card-body">
                        <h5 class="card-title">Python dan Java: Mana yang Lebih Baik?</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog2" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton2">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog3">
                <div class="card">
                    <img src="/img/blog/foto3.jpg" class="card-img-top" alt="blog3">
                    <div class="card-body">
                        <h5 class="card-title">5 Framework Terbaik untuk Pengembangan Web di 2024</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog3" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton3">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog4">
                <div class="card">
                    <img src="/img/blog/foto1.jpg" class="card-img-top" alt="blog4">
                    <div class="card-body">
                        <h5 class="card-title">Menguasai JavaScript: Dasar hingga
                            Lanjutan</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog4" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton4">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog5">
                <div class="card">
                    <img src="/img/blog/foto1.jpg" class="card-img-top" alt="blog5">
                    <div class="card-body">
                        <h5 class="card-title">Tips dan Trik Belajar Python untuk Developer Pemula</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog5" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton5">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog6">
                <div class="card">
                    <img src="/img/blog/foto2.jpg" class="card-img-top" alt="blog6">
                    <div class="card-body">
                        <h5 class="card-title">Python dan Java: Mana yang Lebih Baik?</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog6" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton6">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog7">
                <div class="card">
                    <img src="/img/blog/foto3.jpg" class="card-img-top" alt="blog7">
                    <div class="card-body">
                        <h5 class="card-title">5 Framework Terbaik untuk Pengembangan Web di 2024</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog7" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton7">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3" id="blog8">
                <div class="card">
                    <img src="/img/blog/foto1.jpg" class="card-img-top" alt="blog8">
                    <div class="card-body">
                        <h5 class="card-title">Menguasai JavaScript: Dasar hingga
                            Lanjutan</h5>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-clock"></i> Published, 30 June 2024
                        </p>
                        <p class="mb-2 font-weight-bold text-sm">
                            <i class="fas fa-chart-line"></i> 275 views
                        </p>
                        <a class="btn btn-outline-warning btn-xs mt-2 disabled">Programming</a>
                        <br>
                        <button class="btn btn-danger mt-2 delete-btn" data-id="blog8" data-toggle="modal"
                            data-target="#deleteModal">Delete</button>
                        <a href="/edit-blog" class="btn btn-primary mt-2">Edit</a>
                        <a href="#" id="shareButton8">
                            <i class="fas fa-share" style="margin-left: 10px;"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this blog post?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete"
                            data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Share -->
        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white">
                        <h5 class="modal-title" id="shareModalLabel">Choose Social Media to Share:</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://web.facebook.com/" class="text-dark">
                                    <i class="fab fa-facebook fa-3x"></i>
                                    <p>Facebook</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://x.com/" class="text-dark">
                                    <i class="fab fa-twitter fa-3x"></i>
                                    <p>Twitter</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://www.linkedin.com/" class="text-dark">
                                    <i class="fab fa-linkedin fa-3x"></i>
                                    <p>LinkedIn</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://www.instagram.com/" class="text-dark">
                                    <i class="fab fa-instagram fa-3x"></i>
                                    <p>Instagram</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://api.whatsapp.com/send?phone=YOURNUMBER" class="text-dark"
                                    target="_blank">
                                    <i class="fab fa-whatsapp fa-3x"></i>
                                    <p>WhatsApp</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://mail.google.com/" class="text-dark">
                                    <i class="far fa-envelope fa-3x"></i>
                                    <p>Email</p>
                                </a>
                            </div>
                            <div class="col-md-3 text-center mb-3">
                                <a href="https://www.tiktok.com/" class="text-dark">
                                    <i class="fab fa-tiktok fa-3x"></i>
                                    <p>TikTok</p>
                                </a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            for (let i = 1; i <= 8; i++) {
                const shareButton = document.getElementById(`shareButton${i}`);
                shareButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    $('#shareModal').modal('show');
                });
            }
        });
    </script>
    <script>
        function resetGrid() {
            const container = document.getElementById('blogContainer');
            const columns = container.querySelectorAll('.col');
            const itemsPerRow = 4;

            let index = 1;
            columns.forEach(col => {
                col.style.order = index;
                index++;
            });

            const rowCount = Math.ceil(columns.length / itemsPerRow);
            let currentRow = 1;
            columns.forEach((col, idx) => {
                const colIndex = idx % itemsPerRow + 1;
                if (colIndex !== currentRow) {
                    col.style.order = currentRow * itemsPerRow + colIndex;
                }
                if (colIndex === itemsPerRow) {
                    currentRow++;
                }
            });
        }

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const blogId = this.getAttribute('data-id');
                const modalBody = document.querySelector('#deleteModal .modal-body');
                modalBody.textContent =
                    `Are you sure you want to delete "${document.getElementById(blogId).querySelector('.card-title').textContent}"?`;
                $('#deleteModal').modal('show');

                document.getElementById('confirmDelete').addEventListener('click', function() {
                    document.getElementById(blogId).remove();
                    $('#deleteModal').modal('hide');

                    resetGrid();
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            resetGrid();
        });
    </script>
</body>

</html>
