<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <title>Maxy Academy | {{ $title }} </title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .toolbar {
            margin-bottom: 10px;
        }
        .editor-container {
            height: 300px;
        }
    </style>
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
                                <a class="nav-link active" href="/packages">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Packages</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Advertising Package</h6>
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
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">Advertising Packages</h6>
                            </div>
                            <p class="text-sm">Determine your choice of the best advertising package!</p>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Create Advertising Method</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="package-name" class="form-control-label">Package Name</label>
                                        <input class="form-control" type="text" placeholder="Platinum Package">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="price-input" class="form-control-label">Price</label>
                                        <input class="form-control" type="text" placeholder="Price: $500">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="duration-input" class="form-control-label">Duration</label>
                                        <input class="form-control" type="text" placeholder="180 days">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p class="text-uppercase text-sm">Description</p>
                                    <!-- Quill Toolbar -->
                                    <div id="toolbar" class="toolbar">
                                        <span class="ql-formats">
                                            <select class="ql-header">
                                                <option selected></option>
                                                <option value="1"></option>
                                                <option value="2"></option>
                                            </select>
                                            <select class="ql-font"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-align"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                            <button class="ql-video"></button>
                                        </span>
                                    </div>
                                    <div id="editor" class="editor-container"></div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary" type="button">Create an
                                        Advertisement</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2">Package that has been created</h6>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-star text-warning"></i> Starter
                                            Package</h5>
                                        <p class="text-sm font-weight-bold mb-1">Price: $100
                                        </p>
                                        <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                            30 days</p>
                                        <ul class="text-xs font-weight-bold list-unstyled" style="text-align: left;">
                                            <li><i class="fas fa-check-circle"></i> Basic
                                                advertising package ideal for starting
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Includes
                                                standard visibility in search results
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Customer
                                                support via email</li>
                                        </ul>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-primary" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-key text-info"></i> Basic Package
                                        </h5>
                                        <p class="text-sm font-weight-bold mb-1">Price: $200
                                        </p>
                                        <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                            60 days</p>
                                        <ul class="text-xs font-weight-bold list-unstyled" style="text-align: left;">
                                            <li><i class="fas fa-check-circle"></i> Basic
                                                advertising package ideal for starting
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Includes
                                                standard visibility in search results
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Customer
                                                support via email</li>
                                        </ul>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-primary" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-check-circle text-success"></i>
                                            Standard Package</h5>
                                        <p class="text-sm font-weight-bold mb-1">Price: $300
                                        </p>
                                        <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                            90 days</p>
                                        <ul class="text-xs font-weight-bold list-unstyled" style="text-align: left;">
                                            <li><i class="fas fa-check-circle"></i> Basic
                                                advertising package ideal for starting
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Includes
                                                standard visibility in search results
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Customer
                                                support via email</li>
                                        </ul>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-primary" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-heart text-danger"></i> Premium
                                            Package</h5>
                                        <p class="text-sm font-weight-bold mb-1">Price: $400
                                        </p>
                                        <p class="text-sm font-weight-bold mb-3 mt-1">Duration:
                                            120 days</p>
                                        <ul class="text-xs font-weight-bold list-unstyled" style="text-align: left;">
                                            <li><i class="fas fa-check-circle"></i> Basic
                                                advertising package ideal for starting
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Includes
                                                standard visibility in search results
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Customer
                                                support via email</li>
                                        </ul>
                                        <div class="col-md-12 mt-3">
                                            <button class="btn btn-primary" type="button">Edit</button>
                                            <button class="btn btn-danger" type="button">Delete</button>
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
    <!-- End Navbar -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/js/plugins/chartjs.min.js"></script>
    <script src="/js/argon-dashboard.js"></script>
    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: '#toolbar'
            },
            theme: 'snow'
        });
    </script>
</body>

</html>
