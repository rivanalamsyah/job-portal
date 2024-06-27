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

<body style="padding-top: 75px;">

    <!-- start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.maxy.academy">
                <img src="https://cms.maxy.academy/uploads/LogoMaxy.png" alt="Maxy Academy"
                    class="d-inline-block align-text-top img-nav" style="max-width: 120px;">
            </a>
            <!-- Tombol navbar-toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Akhir dari tombol navbar-toggler -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard" onclick="moveActiveLine(this)">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/main" onclick="moveActiveLine(this)">Job Portal</a>
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="/profile" onclick="moveActiveLine(this)">
                            <b style="color: navy;">LMS</b>
                            <img src="/img/people3.jpg" alt="Profile" class="img-fluid rounded-circle me-1"
                                style="width: 40px; height: 40px; margin-left: 10px;">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="active-line" id="active-line"></div>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- start container1 -->
    <div class="container-fluid background-container-user">
        <div class="row align-items-center">
            <div class="col text-center" style="margin-top: 20px; margin-bottom: 20px;">
                <h1 class="mb-3">
                    <span class="fw-bold text-primary">Find Your Dream Job Now</span>
                </h1>
                <h5 style="color: #888; margin-top: 10px; margin-bottom: 50px;">5000+ jobs vacancies for you to explore!
                </h5>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control form-control-lg" id="enterkeyword" name="enterkeyword"
                        placeholder="Enter Keyword" required>
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
                <button type="button" class="btn btn-primary btn-block btn-lg" id="search">Search</button>
            </div>
        </div>
    </div>
    <!-- end container1 -->

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
                <div class="w-100"></div> <!-- Menggunakan w-100 untuk membuat baris baru -->
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

    <!-- start 100 jobs-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="text-left">
                    <span class="fw-bold text-primary">100 Jobs</span>
                </h2>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-outline-primary btn-sm">
                    < Back</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col border" style="margin-right: 10px;">
                <div class="form-check"><br>
                    <h5>Date of Posting</h5>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        All Time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Last 24 Hours
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Last 3 Days
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Last 7 Days
                    </label>
                </div>
                <br>
                <div class="form-check">
                    <h5>Type of Employment</h5>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Full Time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Part Time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Work From Home
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Work From Office
                    </label>
                </div>
                <div class="form-check form-switch"><br>
                    <h5>Work Experience</h5>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Any experience</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Internship</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Work Remotely</label>
                </div>
            </div>
            <div class="col">
                <div class="top-job-card card rounded mb-3">
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
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Software Engineer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                9.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_amazon.jpeg" alt="amazon" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Amazon</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Back-End</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                19.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_bsi.jpeg" alt="bsi" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Bank BSI</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">System Analyst</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                10.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_bumn.jpeg" alt="bumn" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">BUMN</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Data Science</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                9.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="top-job-card card rounded mb-3">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_mandiri.jpeg" alt="mandiri" class="img-fluid me-1"
                                    width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Bank Mandiri</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Flutter Developer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                9.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
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
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Staf Marketing</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
                    <div class="card-body d-flex align-items-left">
                        <div class="topjob me-3">
                            <a href="#!">
                                <img src="/img/logo_company/logo_traveloka.jpeg" alt="traveloka"
                                    class="img-fluid me-1" width="35">
                            </a>
                            <div>
                                <h5 class="card-title fs-8">Traveloka</h5>
                                <p class="card-subtitle mb-1 fs-9">Jakarta</p>
                            </div>
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">Data Analyst</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                15.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
                <div class="top-job-card card rounded mb-3">
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
                            <div class="info">
                                <div class="d-flex justify-content-between">
                                    <div class="ms-auto">
                                        <i class="bi bi-bookmark bookmark-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text text-start">
                        <h6 class="card-titlejob">IT Support</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                9.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                        <button type="button" class="btn btn-outline-primary btn-tag btn-sm" disabled>
                            Marketing
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-tag btn-xs" disabled>
                            Design
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end 100 jobs-->

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
                        <li><a href="https://www.maxy.academy/products/" title="Explore Programs">Programs</a>
                        </li>
                        <li><a href="https://www.maxy.academy/#instructor" title="Meet our Tutors">Tutor</a></li>
                        <li><a href="https://www.maxy.academy/#package" title="Check our Packages">Packages</a>
                        </li>
                        <li><a href="https://www.maxy.academy/#faq" title="Frequently Asked Questions">FAQs</a>
                        </li>
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
        <span style="font-size: 12px; color: #888;">&copy; Hak Cipta Dilindungi @ 2024 oleh Maxy
            Academy</span>
    </div>`
    <!-- end copyright-->

    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="/js/onboarding_user.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var bookmarkIcons = document.querySelectorAll(".bookmark-icon");
            bookmarkIcons.forEach(function(icon) {
                icon.addEventListener("click", function() {
                    icon.classList.toggle("clicked");
                    if (icon.classList.contains("clicked")) {
                        icon.classList.remove("bi-bookmark");
                        icon.classList.add("bi-bookmark-fill");
                    } else {
                        icon.classList.remove("bi-bookmark-fill");
                        icon.classList.add("bi-bookmark");
                    }
                });
            });
        });
    </script>
</body>

</html>
