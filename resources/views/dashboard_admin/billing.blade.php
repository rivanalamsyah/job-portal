<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="maxy-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <div id="adsManagementSubmenu" class="collapse show">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="/billing">
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
                    <a class="nav-link" href="/maxy-blog">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Billing</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Billing Information</h6>
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
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-2">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-md-12 mb-lg-0 mb-2">
                                    <div class="card mt-1">
                                        <div class="card-header pb-0 p-3">
                                            <div class="row">
                                                <div class="col-6 d-flex align-items-center">
                                                    <h6 class="mb-0">Account Information</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-md-12 mb-md-0 mb-4">
                                                    <div
                                                        class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                                        <img class="w-10 me-3 mb-0" src="/img/logos/mastercard.png"
                                                            alt="logo">
                                                        <div class="ms-3">
                                                            <h6 class="mb-0">Maxy Academy</h6>
                                                            <small class="text-muted">Bank Mandiri</small>
                                                            <h5 class="mb-0">
                                                                9754&nbsp;&nbsp;&nbsp;5873&nbsp;&nbsp;&nbsp;3956&nbsp;&nbsp;&nbsp;7852
                                                            </h5>
                                                        </div>
                                                        <i class="fas fa-pencil-alt text-dark cursor-pointer position-absolute top-0 end-0 mt-2 me-2 editIcon"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit Card"></i>
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
                <div class="col-12 mt-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>History Transactions</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-2">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                ID Invoices</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Company</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Job Position</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Package</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Date</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Transaction</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234567</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Gojek</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">UI/UX
                                                    Designer</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown1">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown1')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown1')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234568</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Traveloka</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">System
                                                    Analyst</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown2" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown2">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown2')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown2')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234569</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Tokopedia</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">IT Support</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown3" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown3">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown3')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown3')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234570</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Unilever</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Design
                                                    Grafis</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown4" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown4">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown4')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown4')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234571</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Gudang
                                                    Garam</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Cloud
                                                    Computing</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown5" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown5">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown5')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown5')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234572</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Astra
                                                    Media</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Mobile
                                                    Developer</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown6" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown6">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown6')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown6')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234573</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Bank
                                                    Mandiri</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Project
                                                    Manager</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown7" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown7">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown7')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown7')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234574</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Amazon</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Content
                                                    Creator</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown8" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown8">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown8')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown8')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234575</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Indofood</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Data
                                                    Engineer</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown9" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown9">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown9')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown9')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">234576</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Pertamina</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Mobile
                                                    Developer</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">1 Month</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/09/25
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/view" class="text-xs font-weight-bold"
                                                    style="color: inherit; font-weight: bold; transition: color 0.3s;"
                                                    onmouseover="this.style.color='blue'"
                                                    onmouseout="this.style.color='inherit'" download>View</a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle"
                                                        type="button" id="statusDropdown10"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Pending
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="statusDropdown10">
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Paid', 'statusDropdown10')">Paid</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Unpaid', 'statusDropdown10')">Unpaid</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h6 class="mb-0">Billing Information</h6>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <span class="mb-2 text-xs">Company Name: <span
                                                        class="text-dark font-weight-bold ms-sm-2">Viking
                                                        Burrito</span></span>
                                                <span class="mb-2 text-xs">Email Address: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                                                <span class="text-xs">ID Invoices: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">234573</span></span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0 delete-btn"
                                                    href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal">
                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <span class="mb-2 text-xs">Company Name: <span
                                                        class="text-dark font-weight-bold ms-sm-2">Stone Tech
                                                        Zone</span></span>
                                                <span class="mb-2 text-xs">Email Address: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">lucas@stone-tech.com</span></span>
                                                <span class="text-xs">ID Invoices: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">234570</span></span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0 delete-btn"
                                                    href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal">
                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                </a>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <span class="mb-2 text-xs">Company Name: <span
                                                        class="text-dark font-weight-bold ms-sm-2">Viking
                                                        Burrito</span></span>
                                                <span class="mb-2 text-xs">Email Address: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                                                <span class="text-xs">ID Invoices: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">234568</span></span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0 delete-btn"
                                                    href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#confirmDeleteModal">
                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-0">Recently Invoices</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Gojek</h6>
                                                    <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                + $ 1000
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Traveloka</h6>
                                                    <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                + $ 750
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Linkdataku</h6>
                                                    <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                + $ 1,000
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">JNE Express</h6>
                                                    <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                + $ 1200
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                            <div class="d-flex align-items-center">
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"></i></button>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-1 text-dark text-sm">Indihome</h6>
                                                    <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                + $ 500
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Account Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 text-start">
                            <label for="accountName" class="form-label">Account Name</label>
                            <input type="text" class="form-control" id="accountName"
                                placeholder="Enter account name">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="accountBank" class="form-label">Account Bank</label>
                            <input type="text" class="form-control" id="accountBank"
                                placeholder="Enter account bank">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="accountNumber" class="form-label">Account Number</label>
                            <input type="text" class="form-control" id="accountNumber"
                                placeholder="Enter account number">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/js/plugins/chartjs.min.js"></script>
    <script src="/js/argon-dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.editIcon').on('click', function() {
            $('.editModal').modal('show');
        });
    </script>
    <<script>
        function setStatus(status, dropdownId) {
            const dropdownButton = document.getElementById(dropdownId);
            dropdownButton.innerText = status;
            let badgeColor;
            switch (status) {
                case 'Paid':
                    badgeColor = 'btn-success';
                    break;
                case 'Unpaid':
                    badgeColor = 'btn-danger';
                    break;
                default:
                    badgeColor = 'btn-secondary';
            }
            dropdownButton.classList.remove('btn-secondary', 'btn-success', 'btn-danger');
            dropdownButton.classList.add(badgeColor);
        }
    </script>
</body>

</html>
