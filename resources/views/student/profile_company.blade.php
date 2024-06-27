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
    <!-- start banner company-->
    <div class="container">
        <img src="/img/background/bg_company.png" class="img-fluid" alt="background-company"
            style="max-width: 100%; height: auto;">
    </div>
    <!-- end banner company-->

    <!-- start content company-->
    <div class="container">
        <div class="row">
            <div class="topjob me-3">
                <a href="#!">
                    <img src="/img/logo_company/logo_gojek_panjang.jpg" alt="gojek" class="img-fluid me-1"
                        width="25%">
                </a>
                <div class="ms-auto text-end">
                    <a href="#" class="share-icon">
                        <i class="bi bi-share fs-6"> Bagikan</i>
                    </a>
                    <h5 class="card-subtitlejob">PT. Aplikasi Karya Anak Bangsa</h5>
                </div>
            </div>
            <div class="card-text mt-5">
                <h5 class="card-subtitlejob">Tentang Perusahaan</h5>
                <p class="card-subtitlejob">PT. Aplikasi Karya Anak Bangsa, yang dikenal sebagai Gojek, adalah
                    perusahaan teknologi yang berbasis
                    di Indonesia. Didirikan pada 2010, Gojek telah mengubah lanskap transportasi dan layanan online di
                    Asia Tenggara. Platformnya menyediakan layanan taksi, pengiriman makanan, pembayaran digital, serta
                    berbagai layanan lainnya. Inovatif dan inklusif, Gojek menjadi tulang punggung ekonomi gig di
                    kawasan ini, memberdayakan jutaan pengemudi dan mitra usaha kecil. Dengan visi untuk meningkatkan
                    kualitas hidup masyarakat, perusahaan ini terus berinovasi, menyediakan solusi yang relevan dengan
                    kebutuhan masa kini, dan terus berupaya menjadi kekuatan positif dalam transformasi digital
                    Indonesia.</p>
            </div>
            <div class="card-text mt-5">
                <h5 class="card-subtitlejob">Lowongan Perusahaan</h5>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 9.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 min ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 19.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 50 min ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 10.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 3 hours ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 9.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 10 hours ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 19.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 5 days ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-job-card card rounded mb-3">
                            <div class="card-body d-flex align-items-left">
                                <div class="topjob me-3">
                                    <a href="#!">
                                        <img src="/img/logo_company/logo_gojek.jpeg" alt="gojek"
                                            class="img-fluid me-1" width="35">
                                    </a>
                                    <div>
                                        <h5 class="card-title fs-8"> Gojek</h5>
                                        <p class="card-subtitle mb-1 fs-9"> Jakarta</p>
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
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i>
                                        Full Time</p>
                                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i>
                                        Rp 10.000.000</p>
                                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> 6 days ago</p>
                                </div>
                                <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto fugiat repellendus corporis eaque itaque voluptate velit provident autem
                                    impedit eos?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content company-->

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
                                <li><a href="https://www.maxy.academy/#package"
                                        title="Check our Packages">Packages</a></li>
                                <li><a href="https://www.maxy.academy/#faq"
                                        title="Frequently Asked Questions">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="footer-title">Social Media</h5>
                            <ul class="social-media-icons">
                                <li class="list-inline-item"><a
                                        href="https://web.facebook.com/maxy.academy?_rdc=1&_rdr"
                                        title="Visit us on Facebook"><i class="fab fa-facebook fa-2x"
                                            title="Facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.twitter.com"
                                        title="Follow us on Twitter"><i class="fab fa-twitter fa-2x"
                                            title="Twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/maxy.academy/"
                                        title="Follow us on Instagram"><i class="fab fa-instagram fa-2x"
                                            title="Instagram"></i></a></li>
                            </ul>
                            <ul class="social-media-icons">
                                <li class="list-inline-item"><a href="https://www.linkedin.com/company/maxyacademy/"
                                        title="Connect with us on LinkedIn"><i class="fab fa-linkedin fa-2x"
                                            title="LinkedIn"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:info@maxyacademy.com"
                                        title="Email us"><i class="fas fa-envelope fa-2x" title="Email"></i></a>
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
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
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
