<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/onboarding_user.css">
    <!-- Favicon -->
    <link rel="icon" href="/img/icon.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Maxy Academy | {{ $title }}</title>
</head>

<body style="padding-top: 50px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.maxy.academy">
                <img src="https://cms.maxy.academy//uploads/LogoMaxy.png" alt=""
                    class="d-inline-block align-text-top img-nav" style="max-width: 120px;">
            </a>
            <!-- Tombol navbar-toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Akhir dari tombol navbar-toggler -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard" onclick="moveActiveLine(this)">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/main" onclick="moveActiveLine(this)">Job
                            Portal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog" onclick="moveActiveLine(this)">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rapidonboarding" onclick="moveActiveLine(this)">Rapid Onboarding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orderhistory" onclick="moveActiveLine(this)">Order History</a>
                    </li>
                </ul>
                <ul>
                    <li class="nav-item d-flex align-items-center ms-auto">
                        <a href="/register" class="btn btn-outline-dark mx-2 btn-sm">Sign Up</a>
                        <a href="/login" class="btn btn-outline-primary btn-sm">Log In</a>
                    </li>
                </ul>
                <div class="active-line" id="active-line"></div>
            </div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- start container 1 -->
    <div class="container background-container">
        <div class="row">
            <div class="col-lg-6" style="display: flex; align-items: center;">
                <div style="flex: 1;">
                    <h1 data-aos="fade-in" class="aos-init aos-animate" style="font-size: 72px;">
                        Discover
                        <br>
                        More Than
                        <br>
                        <span style="color: #0015ff" class="fw-bold">5000+ Jobs</span>
                    </h1>
                    <p>Great platform for the job seeker that searching for
                        <br> new career heights and passionate about startups.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start no-gutters">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control form-control-lg" id="position" name="position"
                            placeholder="Job preference?" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control form-control-lg" id="location" name="location"
                            placeholder="Location" required>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <button type="button" class="btn btn-warning btn-lg" id="signup_button">Apply for Jobs</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end container 1-->

    <!-- start candidates category-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="text-left">
                    Candidates <span class="fw-bold text-warning"> Category</span> <!-- Judul kategori -->
                </h2>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-outline-warning btn-sm">View All ></button>
            </div>
        </div>
        <div class="container">
            <!-- Baris pertama dengan 4 tombol -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/mentor.png" class="img-fluid" alt="mentor"
                                    style="max-width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Teacher</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/design.png" class="img-fluid" alt="design">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Design</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/finance.png" class="img-fluid" alt="finance">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Finance</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/industrial.png" class="img-fluid" alt="industrial">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Industrial</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- Baris baru untuk konten 4 kolom berikutnya -->
                <div class="w-100"></div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/marketing.png" class="img-fluid" alt="marketing">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Marketing</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/productivity.png" class="img-fluid" alt="productivity">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Productivity</span>
                                    <span class="small">10 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/sale.png" class="img-fluid" alt="sale">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Sales</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col mb-4">
                    <button class="card" onclick="handleCardClick">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/icon_category/bisnis.png" class="img-fluid" alt="bisnis">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="small-bold">Business</span>
                                    <span class="small">6 Position</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end candidates category-->

    <!-- start company partners-->
    <div class="container">
        <div class="col">
            <h2 class="text-center mb-3">
                Our<span class="fw-bold text-primary"> Partners</span>
            </h2>
            <!-- company logo-->
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="/img/partners/skintific.png" height="100" width="250" alt="skintific" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/schneider.png" height="100" width="250" alt="schneider" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/anteraja.png" height="100" width="250" alt="anteraja" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/lorealparis.png" height="100" width="250" alt="lorealparis" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/kedaisayur.png" height="100" width="250" alt="kedaisayur" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/kawanlama.png" height="100" width="250" alt="kawanlama" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/dnet.png" height="100" width="250" alt="dnet" />
                    </div>
                </div>
            </div>
            <br>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="/img/partners/edufund.png" height="100" width="250" alt="edufund" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/jennyhouse.png" height="100" width="250" alt="jennyhouse" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/triputra.png" height="100" width="250" alt="triputra" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/indocyber.png" height="100" width="250" alt="indocyber" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/scarlett.png" height="100" width="250" alt="scarlett" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/maybeline.png" height="100" width="250" alt="maybeline" />
                    </div>
                    <div class="slide">
                        <img src="/img/partners/tsm.png" height="100" width="250" alt="tsm" />
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
    <!-- end company partners-->

    <!-- start features job-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="text-left mb-3">
                    Features <span class="fw-bold text-primary">Job</span>
                </h2>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-outline-warning btn-sm">View All ></button>
            </div>
        </div>
        <!-- Top Job Cards -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <!-- First Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_mandiri.jpeg" alt="jne" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Bank Mandiri</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-xs"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Software Engineer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 5.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_nivea.jpeg" alt="jne" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Nivea</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-xs"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Data Scientist</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 5.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_grab.jpeg" alt="grab" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Grab</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-xs"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Cybersecurity</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 4.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Four Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Gojek</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-xs"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Network Engineer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 10.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- First Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_unilever.jpeg" alt="unilever" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Unilever</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-xs"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Systems Administrator</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 6.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_jne.jpeg" alt="jne" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">JNE Express</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Web Developer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 5.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_grab.jpeg" alt="grab" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Grab</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Full Time</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 4.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
            <!-- Four Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Gojek</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">IT Project Manager</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 10.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-xs" disabled> Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled> Design
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start features job-->

    <!-- Start Top Job Section -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="text-left mb-3">
                    Top <span class="fw-bold text-primary"> Job</span> Circulars
                </h2>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-outline-warning btn-sm">View All ></button>
            </div>
        </div>
        <!-- Top Job Cards -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <!-- First Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_unilever.jpeg" alt="unilever" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Unilever</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Software Engineer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 6.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_jne.jpeg" alt="jne" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">JNE Express</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Data Scientist</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 5.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_grab.jpeg" alt="grab" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Grab</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Cybersecurity</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 4.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Four Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Gojek</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Network Engineer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 10.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- First Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_unilever.jpeg" alt="unilever" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Unilever</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Systems Administrator</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 6.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_jne.jpeg" alt="jne" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">JNE Express</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Web Developer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 5.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_grab.jpeg" alt="grab" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Grab</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Internship</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 4.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Four Card -->
            <div class="col mb-3">
                <div class="top-job-card card rounded">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Gojek</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                        </div>
                        <div class="info">
                            <div class="d-flex justify-content-between">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary btn-label btn-sm"
                                        disabled>Fulltime</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Cloud Architect</h6>
                        <p class="card-subtitlejob mb-1">Salary: Rp 10.000.000 / month</p>
                        <p class="card-body">Lorem Ipsum is simply dummy text of the printing and
                            typesetting...</p>
                        <div class="nav-item d-flex align-items-center ms-auto">
                            <a href="/apply" class="btn btn-primary btn-custom">
                                <span class="btn-text">Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Top Job Section -->

    <!-- Start Testimony Section -->
    <div class="container background-container-testimony">
        <div class="row">
            <h2 class="text-center mb-3">
                <span class="fw-bold text-warning">5 million </span>talents get <br>
                via Maxy Academy
            </h2>
        </div>
        <div class="row justify-content-end">
            <!-- Kolom untuk card testimonial -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="testimonial">
                        <div class="profile">
                            <img src="/img/people1.jpg" alt="people1" class="img-fluid rounded-circle me-1"
                                width="35">
                        </div>
                        <div class="info">
                            <p class="name fs-8">Nadia Aulia</p>
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="verified-testimonial">
                        <span class="badge bg-success">Verified Testimonial <i class="fas fa-check"></i></span>
                    </div>
                    <div class="card-body">
                        <p class="card-text lorem-ipsum">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel metus
                            lectus. Ut sapien at metus interdum rutrum.
                            <a href="#" class="stretched-link fw-bold text-primary">See More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="testimonial">
                        <div class="profile">
                            <img src="/img/people2.jpg" alt="people2" class="img-fluid rounded-circle me-1"
                                width="35">
                        </div>
                        <div class="info">
                            <p class="name fs-8">Allisha Rahma</p>
                            <div class="stars">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="verified-testimonial">
                        <span class="badge bg-success">Verified Testimonial <i class="fas fa-check"></i></span>
                    </div>
                    <div class="card-body">
                        <p class="card-text lorem-ipsum">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel metus
                            lectus. Ut sapien at metus interdum rutrum.
                            <a href="#" class="stretched-link fw-bold text-primary">See More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimony Section -->

    <!-- start banner 2-->
    <div class="container">
        <img src="/img/banner_footer.png" class="img-fluid" alt="bannerfooter"
            style="max-width: 100%; height: auto;">
    </div>
    <!-- end banner 2-->

    <!-- footer-->
    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <img src="/img/logo_maxy.png" alt="logomaxy" class="img-fluid" title="Maxy Logo"
                            style="max-width: 150px;">
                    </div>
                    <br>
                    <p style="color: #007bff"><strong>Jakarta</strong></p>
                    <p>Pakuwon Tower 26-J <br>
                        Jl. Casablanca Raya No.88 <br>
                        Jakarta Selatan, DKI Jakarta 12960</p>
                    <p style="color: #007bff"><strong>Surabaya</strong></p>
                    <p>Ciputra World Office 15(15-16)<br>
                        Jl. Mayjen Sungkono Kav.89<br>
                        Surabaya, Jawa Timur 60224</p>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Menu</h5>
                    <ul class="footer-menu">
                        <li><a href="https://www.maxy.academy/" title="Go to Home">Home</a></li>
                        <li><a href="https://www.maxy.academy/about-us" title="Learn About Us">About Us</a></li>
                        <li><a href="https://www.maxy.academy/products/" title="Our Services">Services</a></li>
                        <li><a href="https://wa.me/628113955599" title="Contact Us">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">More</h5>
                    <ul class="footer-more">
                        <li><a href="https://www.maxy.academy/partners" title="View Partners">Partners</a></li>
                        <li><a href="https://www.maxy.academy/products/" title="Explore Programs">Programs</a></li>
                        <li><a href="https://www.maxy.academy/#instructor" title="Meet our Tutors">Tutor</a></li>
                        <li><a href="https://www.maxy.academy/#package" title="Check our Packages">Packages</a></li>
                        <li><a href="https://www.maxy.academy/#faq" title="Frequently Asked Questions">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Social Media</h5>
                    <ul class="social-media-icons">
                        <li class="list-inline-item"><a href="https://web.facebook.com/maxy.academy?_rdc=1&_rdr"
                                title="Visit us on Facebook"><i class="fab fa-facebook fa-2x"
                                    title="Facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.twitter.com"
                                title="Follow us on Twitter"><i class="fab fa-twitter fa-2x" title="Twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/maxy.academy/"
                                title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"
                                    title="Instagram"></i></a></li>
                    </ul>
                    <ul class="social-media-icons">
                        <li class="list-inline-item"><a href="https://www.linkedin.com/company/maxyacademy/"
                                title="Connect with us on LinkedIn"><i class="fab fa-linkedin fa-2x"
                                    title="LinkedIn"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:info@maxyacademy.com" title="Email us"><i
                                    class="fas fa-envelope fa-2x" title="Email"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="https://wa.me/628113955599"
                                title="Chat with us on WhatsApp"><i class="fab fa-whatsapp fa-2x"
                                    title="WhatsApp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-->

    <!-- start copyright-->
    <div style="text-align: center; margin-top: 20px;">
        <hr style="border-top: 1px solid #ddd;">
        <span style="font-size: 12px; color: #888;">&copy; Hak Cipta Dilindungi @ 2023 oleh Maxy
            Academy</span>
    </div>`
    <!-- end copyright-->

    <!-- JavaScript and dependencies -->
    <script src="/js/onboarding_user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
