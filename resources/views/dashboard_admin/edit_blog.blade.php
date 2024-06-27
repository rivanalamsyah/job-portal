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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
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
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="text-white opacity-5"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Blog</li>
                    </ol>
                    <h6 class="text-white font-weight-bolder ms-2">Edit Blog</h6>
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
        <div class="container">
            <div class="card shadow-lg card-profile-bottom">
                <div class="container-fluid py-2">
                    <div class="row mt-4">
                        <div class="row">
                            <div class="col-12 mb-lg-0">
                                <form>
                                    <div class="mt-4">
                                        <p class="text-uppercase text-sm">Blog Title</p>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-uppercase text-sm">Content</p>
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
                                    <div class="mt-4">
                                        <p class="text-uppercase text-sm">Author</p>
                                        <select class="form-select" id="author" name="author">
                                            <option>Admin 1</option>
                                            <option>Admin 2</option>
                                            <option>Admin 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <p class="text-uppercase text-sm">Category</p>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle"
                                                id="kategoriDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" placeholder="Select or Search Category">
                                            <div class="dropdown-menu" aria-labelledby="kategoriDropdown">
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Web Design', 'kategoriDropdown')">Web
                                                    Design</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('HTML/CSS/JS', 'kategoriDropdown')">HTML/CSS/JS</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Freebies', 'kategoriDropdown')">Freebies</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Data Structure', 'kategoriDropdown')">Data
                                                    Structure</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Tutorials', 'kategoriDropdown')">Tutorials</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <p class="text-uppercase text-sm">Tags</p>
                                        <div class="dropdown">
                                            <input type="text" class="form-control dropdown-toggle"
                                                id="tagDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" placeholder="Select or Search Tags">
                                            <div class="dropdown-menu" aria-labelledby="tagDropdown">
                                                <a class="dropdown-item"
                                                    onclick="selectOption('UI/UX', 'tagDropdown')">UI/UX</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Front-End', 'tagDropdown')">Front-End</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Back-End', 'tagDropdown')">Back-End</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Cloud Computing', 'tagDropdown')">Cloud
                                                    Computin</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('Machine Learning', 'tagDropdown')">Machine
                                                    Learning</a>
                                                <a class="dropdown-item"
                                                    onclick="selectOption('DevOps', 'tagDropdown')">DevOps</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-4">
                                <p class="text-uppercase text-sm">Select Photo</p>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mt-4">
                                <p class="text-uppercase text-sm">Published on</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publishOptions"
                                        id="automatic" checked>
                                    <label class="form-check-label" for="automatic">
                                        Automatic
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publishOptions"
                                        id="setDateTime">
                                    <label class="form-check-label" for="setDateTime">
                                        Set date and time
                                    </label>
                                </div>
                                <div id="dateTimePicker" class="mt-3" style="display: none;">
                                    <div class="row">
                                        <div class="col">
                                            <label for="publishDate">Date</label>
                                            <input type="text" class="form-control" id="publishDate"
                                                placeholder="Jun 11, 2024">
                                        </div>
                                        <div class="col">
                                            <label for="publishTime">Time</label>
                                            <input type="text" class="form-control" id="publishTime"
                                                placeholder="6:30 AM">
                                        </div>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <div id="datepicker" class="datepicker"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#successModal">
                                    Update Blog
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="successModal" tabindex="-1"
                                aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="modal-title" id="successModalLabel">Success!</h5>
                                            <img src="/img/illustrations/success-post-job.jpg" alt="Success Icon">
                                            <p>Congratulations! You have successfully updated your blog.</p>
                                            <a href="/maxy-blog" class="btn btn-outline-primary">View my Blog</a>
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
    <!--   Core JS Files   -->
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
        $(document).ready(function() {
            $('#publishDate').datepicker({
                format: 'M dd, yyyy',
                todayHighlight: true,
                autoclose: true
            });

            $('input[name="publishOptions"]').on('change', function() {
                if ($('#setDateTime').is(':checked')) {
                    $('#dateTimePicker').show();
                } else {
                    $('#dateTimePicker').hide();
                }
            });
        });
    </script>
    <script>
        function selectOption(option, inputId) {
            document.getElementById(inputId).value = option;
        }
    </script>
</body>

</html>
