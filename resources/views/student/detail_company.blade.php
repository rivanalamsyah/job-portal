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

    <style>
        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        .upload-area {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .upload-area:hover {
            background-color: #f8f9fa;
        }
    </style>
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
                <div class="ms-auto">
                    <a href="#" class="share-icon">
                        <i class="bi bi-share fs-6"> Bagikan</i>
                    </a>
                </div>
            </div>
            <div class="card-text text-start">
                <h3 class="card-titlejob">UI/UX Designer <button type="button" class="btn btn-outline-warning btn-sm"
                        disabled>
                        Design
                    </button></h3>
                <h5 class="card-subtitlejob">PT. Aplikasi Karya Anak Bangsa</h5>
                <p class="card-subtitlejob"><i class="bi bi-geo-alt"></i> Kota Jakarta Selatan, Daerah Khusus Ibukota
                    Jakarta</p>
                <div class="d-flex align-items-center mb-3">
                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-calendar-check me-1"></i> Full Time</p>
                    <p class="card-subtitlejob mb-1 me-3"><i class="bi bi-currency-dollar me-1"></i> Rp 7.000.000 - Rp
                        9.000.000</p>
                    <p class="card-subtitlejob mb-1"><i class="bi bi-alarm me-1"></i> posted 5 days ago</p>
                </div>
            </div>
            <div class="company-info">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#applyModal">Apply Now</button>
                <button type="button" class="btn btn-outline-primary">Simpan</button>
            </div>
        </div>
    </div>
    <!-- end content company-->

    <!-- start description company-->
    <div class="container">
        <div class="top-job-card card rounded">
            <div class="row">
                <h5 class="text-left mb-3 mt-3">
                    <span class="fw-bold text-primary" style="margin-left: 15px;"> About The Role </span>
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
                    <span class="fw-bold text-primary" style="margin-left: 15px;"> What You Will Need </span>
                </h5>
            </div>
            <ul class="list-unstyled" style="margin-left: 15px; margin-right: 10px;">
                <li>• Plan design efforts with PMs</li>
                <li>• Deliver design concepts and solutions to meet business needs and its intended audience, in varying
                    degrees of fidelity and detail</li>
                <li>• Translate research, business requirements and business flow diagrams into user flows, wireframes,
                    visual design mockups and/or functional prototypes</li>
                <li>• Plan and participate in foundational user research and analysis, including translation of user
                    insights into product implications and new ideas</li>
                <li>• Participate in projects with very broadly defined concepts, and sometimes on narrowly defined,
                    tactical deliverables</li>
                <li>• Deliver design concepts and solutions to meet business needs and its intended audience, in varying
                    degrees of fidelity and detail</li>
                <li>• Run design presentations and workshops to facilitate discussion on design feedback and alignment
                    Manage stakeholders on design progress</li>
                <li>• Work across remote cross-functional teams to bring concepts from ideation to execution</li>
                <li>• Create design processes for respective work streams where necessary and actively shape the
                    interdisciplinary collaboration along the process</li>
                <li>• Proactively identify tasks, workflows and anticipate implications to improve the overall product
                    experience</li>
                <li>• Work closely with other designers to expand product pattern library, asset libraries and design
                    system</li>
                <li>• Prepare clear and detailed design specifications for developers</li>
                <li>• Partner with developers to ensure designs are properly implemented</li>
            </ul>
            <div class="row">
                <h5 class="text-left mb-3 mt-3">
                    <span class="fw-bold text-primary" style="margin-left: 15px;"> Requirements </span>
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
                    <span class="fw-bold text-primary" style="margin-left: 15px;"> Perks and Benefits </span>
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
    <!-- end description company-->

    <!-- Apply Now Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for UI/UX Designer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applyForm">
                        <div class="mb-3">
                            <label for="resume" class="form-label">Resume</label>
                            <input type="file" class="form-control" id="resume" name="resume" required>
                        </div>
                        <div class="upload-area" id="uploadArea">
                            Drag & drop your resume here or click to upload
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="submitBtn">Submit Application</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Apply Now Modal -->

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
        <span style="font-size: 12px; color: #888;">&copy; Hak Cipta Dilindungi @ 2024 oleh Maxy
            Academy</span>
    </div>`
    <!-- end copyright-->

    <!-- Bootstrap Bundle with Popper -->
    <script src="/js/onboarding_user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector('#uploadArea').addEventListener('click', function() {
            document.querySelector('#resume').click();
        });

        document.querySelector('#resume').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                document.querySelector('#uploadArea').textContent = this.files[0].name;
            }
        });

        document.getElementById('submitBtn').addEventListener('click', function() {
            var alertDiv = document.createElement('div');
            alertDiv.classList.add('alert', 'alert-success', 'alert-dismissible', 'fade', 'show');
            alertDiv.setAttribute('role', 'alert');
            alertDiv.innerHTML = `
    <i class="bi bi-check-circle-fill"></i>
    <strong>CV Terkirim!</strong> Thank you for sending your CV. We will quickly review and contact you if a suitable opportunity arises.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  `;
            document.body.appendChild(alertDiv);
        });
    </script>
</body>

</html>
