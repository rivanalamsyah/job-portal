<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">

    <title>Maxy Academy | {{ $title }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/css/nucleo-icons.css" rel="stylesheet">
    <link href="/css/nucleo-svg.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet">
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

<body class="g-sidenav-show bg-gray-100">
    <div class="position-absolute w-100 min-height-300 top-0"
        style="background-image: url('/img/background/background-company.jpg'); background-position: center 50%;">
        <span class="mask bg-primary opacity-6"></span>
    </div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" /dashboard-company " target="_blank">
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
                    <a class="nav-link" href="/profile-company">
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
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="text-white opacity-5"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Job</li>
                    </ol>
                    <h6 class="text-white font-weight-bolder ms-2">Create New Job</h6>
                </nav>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
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
        <div class="container mt-4">
            <div class="card shadow-lg mx-4 card-profile-bottom">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow-lg">
                                <div class="card-body p-3">
                                    <div class="row gx-4">
                                        <p class="text-uppercase text-sm">Role Information</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="position-required" class="form-control-label">Position
                                                        Required</label>
                                                    <input id="position-required" class="form-control" type="text"
                                                        placeholder="Enter Position Required">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="position-required" class="form-control-label">Amount
                                                        Required</label>
                                                    <input id="position-required" class="form-control" type="text"
                                                        placeholder="Enter Position Required">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="location-select" class="form-control-label">Select
                                                        Location</label>
                                                    <select id="location-select" class="form-control">
                                                        <option value="">Choose Location</option>
                                                        <option value="location1">DKI Jakarta</option>
                                                        <option value="location2">DI Yogyakarta</option>
                                                        <option value="location3">Surabaya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <p class="text-uppercase text-sm">Work Type</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="workType"
                                                        id="fullTime" value="full-time" checked>
                                                    <label class="form-check-label" for="fullTime">Full-time</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="workType"
                                                        id="partTime" value="part-time">
                                                    <label class="form-check-label" for="partTime">Part-time</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="workType"
                                                        id="onsite" value="onsite">
                                                    <label class="form-check-label" for="onsite">Onsite</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="workType"
                                                        id="remote" value="remote">
                                                    <label class="form-check-label" for="remote">Remote</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="workType"
                                                        id="hybrid" value="hybrid">
                                                    <label class="form-check-label" for="hybrid">Hybrid</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <p class="text-uppercase text-sm">Education</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="educationLevel" id="smaSmk" value="sma-smk" checked>
                                                    <label class="form-check-label" for="smaSmk">SMA/SMK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="educationLevel" id="d4S1" value="d4-s1">
                                                    <label class="form-check-label" for="d4S1">D4/S1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="educationLevel" id="s2S3" value="s2-s3">
                                                    <label class="form-check-label" for="s2S3">S2/S3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <p class="text-uppercase text-sm">Salary</p>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="currency" class="form-label">Currency</label>
                                                <select id="currency" class="form-select">
                                                    <option selected>IDR</option>
                                                    <option>USD</option>
                                                    <option>EUR</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="min-pay" class="form-label">From</label>
                                                <input type="text" class="form-control" id="min-pay"
                                                    placeholder="Example: IDR 5,000,000">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="max-pay" class="form-label">To</label>
                                                <input type="text" class="form-control" id="max-pay"
                                                    placeholder="Example: IDR 25,000,000">
                                            </div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="mt-4">
                                            <p class="text-uppercase text-sm">About the job</p>
                                            <!-- Quill Toolbar -->
                                            <div id="toolbar1" class="toolbar">
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
                                            <div id="editor1" class="editor-container"></div>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="mt-4">
                                            <p class="text-uppercase text-sm">Requirements</p>
                                            <!-- Quill Toolbar -->
                                            <div id="toolbar2" class="toolbar">
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
                                            <div id="editor2" class="editor-container"></div>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#successModal">
                                                Post Job
                                            </button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="successModal" tabindex="-1"
                                            aria-labelledby="successModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h5 class="modal-title" id="successModalLabel">Success!</h5>
                                                        <img src="/img/illustrations/success-post-job.jpg"
                                                            alt="Success Icon">
                                                        <p>Congratulations! Your job posting has been successfully
                                                            added.
                                                            We're excited to help you find the best candidates. Thank
                                                            you
                                                            for using our platform!</p>
                                                        <a href="/job-management" class="btn btn-outline-primary">View
                                                            my
                                                            job</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="/js/core/popper.min.js"></script>
        <script src="/js/core/bootstrap.min.js"></script>
        <script src="/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- Quill JS -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill1 = new Quill('#editor1', {
                modules: {
                    toolbar: '#toolbar1'
                },
                theme: 'snow'
            });

            var quill2 = new Quill('#editor2', {
                modules: {
                    toolbar: '#toolbar2'
                },
                theme: 'snow'
            });

            var quill3 = new Quill('#editor3', {
                modules: {
                    toolbar: '#toolbar3'
                },
                theme: 'snow'
            });

            function submitForm() {
                var content1 = quill1.root.innerHTML;
                var content2 = quill2.root.innerHTML;
                var content3 = quill3.root.innerHTML;

                document.getElementById('content1').value = content1;
                document.getElementById('content2').value = content2;
                document.getElementById('content3').value = content3;

                console.log(document.getElementById('content1').value);
                console.log(document.getElementById('content2').value);
                console.log(document.getElementById('content3').value);
            }
        </script>
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
