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
                        <a class="nav-link active" aria-current="page" href="/blog"
                            onclick="moveActiveLine(this)">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rapidonboarding" onclick="moveActiveLine(this)">Rapid Onboarding</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" href="/orderhistory" onclick="moveActiveLine(this)">Order History</a>
                    </li>
                </ul>
            </div>
            <div class="active-line" id="active-line"></div>
            <div>
                <ul class="navbar-nav" style="padding-left: 10px; padding-right: 10px;">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link" href="/profile" onclick="moveActiveLine(this)">
                            <b style="color: navy;">LMS</b>
                            <img src="/img/people3.jpg" alt="Profile" class="img-fluid rounded-circle me-1"
                                style="width: 40px; height: 40px; margin-left: 10px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- start Navbar -->

    <!-- start search -->
    <div class="container background-search">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-floating-lg me-2 flex-grow-1">
                        <input type="text" class="form-control" id="keywordInput" placeholder="Enter Keywords">
                    </div>
                    <div class="form-floating-lg me-2 flex-grow-1">
                        <input type="text" class="form-control" id="locationInput" placeholder="Location">
                    </div>
                    <div class="form-floating-lg" style="margin-bottom: -10px;">
                        <button type="button" class="btn btn-warning" id="searchButton">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-2">
                <div class="form-floating-sm">
                    <select class="form-select" id="floatingSelect1" aria-label="Floating label select example">
                        <option selected>Salary</option>
                        <option value="1">Rp 2.000.000 - Rp 5.000.000</option>
                        <option value="2">Rp 5.000.000 - Rp 8.000.000</option>
                        <option value="3">Rp 8.000.000 - Rp 10.000.000</option>
                        <option value="4">> Rp 10.000.000</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating-sm">
                    <select class="form-select" id="floatingSelect2" aria-label="Floating label select example">
                        <option selected>Type of Work</option>
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Remote</option>
                        <option value="4">WFO</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating-sm">
                    <select class="form-select" id="floatingSelect3" aria-label="Floating label select example">
                        <option selected>Graduate</option>
                        <option value="1">SMA / SMK</option>
                        <option value="2">D4 / S1</option>
                        <option value="3">S2 / S3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating-sm">
                    <select class="form-select" id="floatingSelect4" aria-label="Floating label select example">
                        <option selected>Experience</option>
                        <option value="1">Freshgraduate</option>
                        <option value="2">Junior</option>
                        <option value="3">Middle</option>
                        <option value="4">Senior</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- end search -->

    <!-- start content -->
    <div class="container">
        <div>
            <h6>Total Posisi: 7</h6>
        </div>
        <div class="row">
            <div class="col">
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu kedua -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu ketiga -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu keempat -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu kelima -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu keenam -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu ketujuh -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- Kartu kedelapan -->
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
                        <h6 class="card-titlejob">UI/UX Designer</h6>
                        <div class="d-flex align-items-center">
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                8.000.000</p>
                            <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                        </div>
                        <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat
                            repellendus corporis eaque itaque voluptate velit provident autem impedit eos?</p>
                    </div>
                </div>
                <!-- end Kartu -->
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="d-flex align-items-start">
                        <a href="#!" class="me-3">
                            <img src="/img/logo_company/logo_gojek_panjang.jpg" alt="gojek" class="img-fluid"
                                width="25%">
                        </a>
                        <div class="ms-auto">
                            <a href="#" class="share-icon">
                                <i class="bi bi-share fs-6"></i>
                            </a>
                        </div>
                    </div>
                    <div class="company-info mt-3">
                        <h3 class="card-title job">UI/UX Designer
                            <button type="button" class="btn btn-outline-warning btn-sm" disabled>Design</button>
                        </h3>
                        <h5 class="card-subtitle job">PT. Aplikasi Karya Anak Bangsa</h5>
                        <p class="card-subtitle job mt-2"><i class="bi bi-geo-alt"></i> Kota Jakarta Selatan, Daerah
                            Khusus
                            Ibukota Jakarta</p>
                        <div class="d-flex align-items-center mt-3">
                            <p class="card-subtitle job me-3"><i class="bi bi-calendar-check me-1"></i> Full Time
                            </p>
                            <p class="card-subtitle job me-3"><i class="bi bi-currency-dollar me-1"></i> Rp
                                7.000.000 - Rp 9.000.000</p>
                            <p class="card-subtitle job me-3"><i class="bi bi-alarm me-1"></i> 5 days ago</p>
                        </div>
                    </div>
                    <div class="company-info mt-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#applyModal">Apply Now</button>
                        <button type="button" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </div>

                <div class="top-job-card card rounded mb-3">
                    <div class="row">
                        <h5 class="text-left mb-3 mt-3">
                            <span class="fw-bold text-primary" style="margin-left: 15px;">About The Role</span>
                        </h5>
                    </div>
                    <ul class="list-unstyled" style="margin-left: 15px; margin-right: 10px;">
                        <li>• Build solid, secure, performant and scalable APIs to serve our front-end platforms</li>
                        <li>• Optimize existing codes to improve performance and efficiency</li>
                        <li>• Collaborate with Product, QA and UI team to deliver features and improvements</li>
                        <li>• Implement best practices in code quality, security and data protection</li>
                    </ul>
                    <div class="row">
                        <h5 class="text-left mb-3 mt-3">
                            <span class="fw-bold text-primary" style="margin-left: 15px;">What You Will Need</span>
                        </h5>
                    </div>
                    <ul class="list-unstyled" style="margin-left: 15px; margin-right: 10px;">
                        <li>• Plan design efforts with PMs</li>
                        <li>• Deliver design concepts and solutions to meet business needs and its intended audience, in
                            varying degrees of fidelity and detail</li>
                        <li>• Translate research, business requirements and business flow diagrams into user flows,
                            wireframes, visual design mockups and/or functional prototypes</li>
                        <li>• Plan and participate in foundational user research and analysis, including translation of
                            user insights into product implications and new ideas</li>
                        <li>• Participate in projects with very broadly defined concepts, and sometimes on narrowly
                            defined, tactical deliverables</li>
                        <li>• Deliver design concepts and solutions to meet business needs and its intended audience, in
                            varying degrees of fidelity and detail</li>
                        <li>• Run design presentations and workshops to facilitate discussion on design feedback and
                            alignment Manage stakeholders on design progress</li>
                        <li>• Work across remote cross-functional teams to bring concepts from ideation to execution
                        </li>
                        <li>• Create design processes for respective work streams where necessary and actively shape the
                            interdisciplinary collaboration along the process</li>
                        <li>• Proactively identify tasks, workflows and anticipate implications to improve the overall
                            product experience</li>
                        <li>• Work closely with other designers to expand product pattern library, asset libraries and
                            design system</li>
                        <li>• Prepare clear and detailed design specifications for developers</li>
                        <li>• Partner with developers to ensure designs are properly implemented</li>
                    </ul>
                    <div class="row">
                        <h5 class="text-left mb-3 mt-3">
                            <span class="fw-bold text-primary" style="margin-left: 15px;">Requirements</span>
                        </h5>
                    </div>
                    <ul class="list-unstyled" style="margin-left: 15px; margin-right: 10px;">
                        <li>• Strong communication skills</li>
                        <li>• Bachelor's degree in design or a related field</li>
                        <li>• Minimum of 3 years of experience in UI/UX design</li>
                        <li>• Proficiency in design and prototyping tools such as Sketch, Figma, Adobe XD</li>
                        <li>• Strong portfolio showcasing UI/UX design work</li>
                        <li>• Understanding of user-centered design principles</li>
                        <li>• Ability to work in a fast-paced environment</li>
                        <li>• Attention to detail</li>
                        <li>• Team player with a positive attitude</li>
                    </ul>
                    <div class="row">
                        <h5 class="text-left mb-3 mt-3">
                            <span class="fw-bold text-primary" style="margin-left: 15px;">Perks and Benefits</span>
                        </h5>
                    </div>
                    <ul class="list-unstyled" style="margin-left: 15px; margin-right: 10px;">
                        <li>• Competitive salary</li>
                        <li>• Health insurance</li>
                        <li>• Annual leave</li>
                        <li>• Professional development opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- end content -->


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
                        <li><a href="https://www.maxy.academy/about-us" title="Learn About Us">About Us</a>
                        </li>
                        <li><a href="https://www.maxy.academy/products/" title="Our Services">Services</a>
                        </li>
                        <li><a href="https://wa.me/628113955599" title="Contact Us">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">More</h5>
                    <ul class="footer-more">
                        <li><a href="https://www.maxy.academy/partners" title="View Partners">Partners</a>
                        </li>
                        <li><a href="https://www.maxy.academy/products/" title="Explore Programs">Programs</a>
                        </li>
                        <li><a href="https://www.maxy.academy/#instructor" title="Meet our Tutors">Tutor</a>
                        </li>
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
    <script src="/js/onboarding_user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-lRL88U29nMvPpLhluOrv9+2JeT7Uo6T3v8b7/pStUqYQrgaQQn5tEoQaXUtC+tGt" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-ckv5IIh0f9CMEU/t2GtibCIuP0lfQixkbcLw/Jq+2FpXkqVqcC2xSSCxXPAoIiBB" crossorigin="anonymous">
    </script>
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
