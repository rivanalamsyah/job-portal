<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="maxy-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">


    <title>Maxy Academy | {{ $title }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">
    <link id="pagestyle" href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
                    <h6 class="font-weight-bolder text-white mb-0">Position</h6>
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
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>UI/UX Designer</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-2">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Profile</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Date</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Curriculum Vitae</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Add Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown1')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown1')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown1')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">11/12/24
                                                    19:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                            alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>

                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown2')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown2')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown2')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">11/12/24
                                                    18:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                            alt="user3">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown3')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown3')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown3')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">11/12/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                            alt="user4">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown4')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown4')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown4')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">15/12/24
                                                    18:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user5">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown5')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown5')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown5')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">17/12/24
                                                    10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                            alt="user6">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown6')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown6')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown6')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">18/12/24
                                                    20:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown7')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown7')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown7')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">21/12/24
                                                    11:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                            alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown8')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown8')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown8')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">22/12/24
                                                    13:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown9')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown9')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown9')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">22/12/24
                                                    13:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal">Klik here
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-4.jpg" class="avatar avatar-sm me-3"
                                                            alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                                    </div>
                                                </div>
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
                                                                onclick="setStatus('Processed', 'statusDropdown10')">Processed</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Accepted', 'statusDropdown10')">Accepted</button>
                                                        </li>
                                                        <li><button class="dropdown-item" type="button"
                                                                onclick="setStatus('Rejected', 'statusDropdown10')">Rejected</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">22/12/24
                                                    13:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download>
                                                    <i class="fas fa-file-pdf text-lg me-1"></i> CV
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm message-btn"
                                                    data-bs-toggle="modal" data-bs-target="#messageModal"> Klik here
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Message Modal -->
                        <!-- Message Modal -->
                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="messageModalLabel">Type your message..</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="editor-container"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="saveMessage">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/js/argon-dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
        function setStatus(status, dropdownId) {
            document.getElementById(dropdownId).innerText = status;
            var badgeColor;
            switch (status) {
                case 'Processed':
                    badgeColor = 'bg-primary';
                    break;
                case 'Accepted':
                    badgeColor = 'bg-success';
                    break;
                case 'Rejected':
                    badgeColor = 'bg-danger';
                    break;
                default:
                    badgeColor = 'bg-primary';
            }
            document.getElementById(dropdownId).classList.remove('bg-warning', 'bg-success', 'bg-danger');
            document.getElementById(dropdownId).classList.add(badgeColor);
        }
    </script>
    <script>
        var quill = new Quill('#editor-container', {
            theme: 'snow'
        });

        document.getElementById('saveMessage').addEventListener('click', function() {
            var messageContent = quill.root.innerHTML;
            console.log('Message content:', messageContent);
        });
    </script>
</body>

</html>