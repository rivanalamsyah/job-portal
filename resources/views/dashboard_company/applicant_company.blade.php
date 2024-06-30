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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="/job-management">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-briefcase-24 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Job Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/applicant-company">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Applicant Management
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Applicant Management</h6>
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
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center mb-0">
                            <h6>Applicants Table</h6>
                        </div>
                        <div class="card-body px-2 pt-2 pb-2">
                            <div class="table-responsive p-2">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-xs font-weight-bolder opacity-7">
                                                Profile</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Position</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Created</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Updated</th>
                                            <th
                                                class="text-center text-uppercase text-xs font-weight-bolder opacity-7">
                                                Information</th>
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
                                                <p class="text-xs font-weight-bold mb-0">System Analyst</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal1">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Front-End</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal2">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Back-End</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-primary">Processed</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal3">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Cloud Computing</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-primary">Processed</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal4">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Mobile Apps</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal5">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">System Analyst</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal6">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Front-End</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal7">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">Back-End</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-primary">Processed</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal8">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">UI/UX</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-danger">Rejected</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal9">Detail</span>
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
                                                <p class="text-xs font-weight-bold mb-0">System Analyst</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Accepted</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">23/10/24
                                                    08:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">25/10/24
                                                    17:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#detailModal10">Detail</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal detail information -->
            <div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel2"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel2">Detail Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Requirements Table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Requirement</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Total</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Deadline</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                Completion</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">UI/UX Designer</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">5</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">25/09/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">60%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info"
                                                                role="progressbar" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Front-End Dev</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">3</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">17/10/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">50%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" aria-valuenow="50"
                                                                aria-valuemin="0" aria-valuemax="50"
                                                                style="width: 50%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Back-End Dev</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">2</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">15/09/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">30%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" aria-valuenow="30"
                                                                aria-valuemin="0" aria-valuemax="30"
                                                                style="width: 30%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm">System Analyst</h6>
                                                        </div>
                                                    </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">4</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">07/08/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">70%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" aria-valuenow="70"
                                                                aria-valuemin="0" aria-valuemax="70"
                                                                style="width: 70%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Quality Assurance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">2</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">10/08/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">80%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info"
                                                                role="progressbar" aria-valuenow="80"
                                                                aria-valuemin="0" aria-valuemax="80"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Project Manager</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">3</p>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">25/08/24 10:00</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">90%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" aria-valuenow="90"
                                                                aria-valuemin="0" aria-valuemax="90"
                                                                style="width: 90%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script src="/js/argon-dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>
