<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="maxy-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">

    <title>Maxy Academy | {{ $title }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">
    <link id="pagestyle" href="/css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script defer src="/js/script.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/dashboard-company" target="_blank">
                <img src="/img/icon.png" class="navbar-brand-img h-100" alt="logo_maxy">
                <span class="ms-1 font-weight-bold">Maxy Academy</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard-company">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/job-management">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Job Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/applicant-company">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Applicant</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/profile-company">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/logout-company"">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <div class="card card-plain shadow-none" id="sidenavCard">
                <img class="w-50 mx-auto" src="/img/illustrations/icon_newjob.jpg" alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0">New Job?</h6>
                        <p class="text-xs font-weight-bold mb-0">Create the Future, Share Vacancies.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-sm mb-0 w-100" href="/new-job" type="button">Create New Job</a>
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Job Management
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Job Management</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="/profile-company" class="nav-link text-white font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Company</span>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="/profile-company" class="nav-link text-white p-0">
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
                                                    <img src="/img/team-1.jpg" class="avatar avatar-sm me-3">
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
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Views</p>
                                        <h5 class="font-weight-bolder">
                                            1280
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+27%</span> since
                                            last month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="fas fa-eye text-lg opacity-10" aria-hidden="true"></i>
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
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Click</p>
                                        <h5 class="font-weight-bolder">
                                            245
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span> since last
                                            week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="fas fa-mouse-pointer text-lg opacity-10" aria-hidden="true"></i>
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
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Accepted</p>
                                        <h5 class="font-weight-bolder">
                                            37
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+24%</span> from
                                            limits
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="fas fa-award text-lg opacity-10" aria-hidden="true"></i>
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
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Apply</p>
                                        <h5 class="font-weight-bolder">
                                            127
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+23%</span> from
                                            limits
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="fas fa-file-signature text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card mb-5">
                        <div class="card-header pb-0">
                            <h6>Job Management Table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2 mt-0">
                            <div class="table-responsive p-2">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                ID Job</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7"">
                                                Position</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Applicant</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Date</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012345</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">System Analyst</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">75</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012346</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Front-End Developer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">115</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012347</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Back-End Developer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">50</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012348</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">UI/UX Designer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">125</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012349</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Cloud Computing</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">25</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012350</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mobile Apps</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">45</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012351</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Project Manager</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">15</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012352</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Digital Marketing</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">90</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012353</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Data Engineer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">25</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012354</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Content Creator</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">15</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012355</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">System Analyst</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">75</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012356</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Front-End Developer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">115</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012357</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Back-End Developer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">50</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012358</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">UI/UX Designer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">125</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012359</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Cloud Computing</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">25</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012360</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Mobile Apps</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">45</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012361</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Project Manager</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">15</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012362</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Digital Marketing</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">90</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012363</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Data Engineer</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">25</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">012364</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">Content Creator</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">15</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Active</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/job-management-position">Detail</a></li>
                                                        <li><a class="dropdown-item" href="/edit-job">Edit</a></li>
                                                        <li><a class="dropdown-item iklan-button"
                                                                href="#">Iklankan</a></li>
                                                        <li><a class="dropdown-item" href="#"
                                                                onclick="confirmDelete(this)">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Modal delete -->
                            <div id="confirmDeleteModal" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm Delete</h5>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this item?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger"
                                                id="confirmDeleteButton">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal iklankan -->
                            <div class="modal fade" id="penawaranModal" tabindex="-1" role="dialog"
                                aria-labelledby="penawaranLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="penawaranLabel">Upgrade your plan
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-lg font-weight-bold"><i
                                                                        class="fas fa-star text-warning"></i> Starter
                                                                    Package
                                                                </h5>
                                                                <p class="text-sm font-weight-bold mb-1">Price: $100
                                                                </p>
                                                                <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                                                    30 days</p>
                                                                <ul class="text-xs font-weight-bold list-unstyled"
                                                                    style="text-align: left;">
                                                                    <li><i class="fas fa-check-circle"></i> Basic
                                                                        advertising package ideal for starting
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Includes
                                                                        standard visibility in search results
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Customer
                                                                        support via email</li>
                                                                </ul>
                                                                <a href="/bill-ads"
                                                                    class="btn btn-primary">Upgrade</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-lg font-weight-bold"><i
                                                                        class="fas fa-key text-info"></i> Basic Package
                                                                </h5>
                                                                <p class="text-sm font-weight-bold mb-1">Price: $200
                                                                </p>
                                                                <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                                                    60 days</p>
                                                                <ul class="text-xs font-weight-bold list-unstyled"
                                                                    style="text-align: left;">
                                                                    <li><i class="fas fa-check-circle"></i> Basic
                                                                        advertising package ideal for starting
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Includes
                                                                        standard visibility in search results
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Customer
                                                                        support via email</li>
                                                                </ul>
                                                                <a href="/bill-ads"
                                                                    class="btn btn-primary">Upgrade</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-lg font-weight-bold"><i
                                                                        class="fas fa-check-circle text-success"></i>
                                                                    Standard Package
                                                                </h5>
                                                                <p class="text-sm font-weight-bold mb-1">Price: $300
                                                                </p>
                                                                <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                                                    90 days</p>
                                                                <ul class="text-xs font-weight-bold list-unstyled"
                                                                    style="text-align: left;">
                                                                    <li><i class="fas fa-check-circle"></i> Basic
                                                                        advertising package ideal for starting
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Includes
                                                                        standard visibility in search results
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Customer
                                                                        support via email</li>
                                                                </ul>
                                                                <a href="/bill-ads"
                                                                    class="btn btn-primary">Upgrade</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-lg font-weight-bold"><i
                                                                        class="fas fa-heart text-danger"></i> Premium
                                                                    Package
                                                                </h5>
                                                                <p class="text-sm font-weight-bold mb-1">Price: $400
                                                                </p>
                                                                <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                                                    120 days</p>
                                                                <ul class="text-xs font-weight-bold list-unstyled"
                                                                    style="text-align: left;">
                                                                    <li><i class="fas fa-check-circle"></i> Basic
                                                                        advertising package ideal for starting
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Includes
                                                                        standard visibility in search results
                                                                    </li>
                                                                    <li><i class="fas fa-check-circle"></i> Customer
                                                                        support via email</li>
                                                                </ul>
                                                                <a href="/bill-ads"
                                                                    class="btn btn-primary">Upgrade</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/job-management" class="btn btn-danger"
                                                data-dismiss="modal">Close</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/js/argon-dashboard.min.js?v=2.0.4"></script>
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
    <script>
        var rowToDelete;

        function confirmDelete(element) {
            rowToDelete = element.closest('tr');
            var modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            modal.show();
        }

        document.getElementById('confirmDeleteButton').addEventListener('click', function() {
            if (rowToDelete) {
                rowToDelete.remove();
            }
            var modal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
            modal.hide();
        });

        document.querySelector('#confirmDeleteModal .btn-secondary').addEventListener('click', function() {
            var modal = bootstrap.Modal.getInstance(document.getElementById('confirmDeleteModal'));
            modal.hide();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.iklan-button').click(function() {
                $('#penawaranModal').modal('show');
            });
        });
    </script>
</body>

</html>
