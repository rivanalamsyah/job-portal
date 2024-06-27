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
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="/dashboard-company"
                            style="color: black;">
                            <img src="/img/icon.png" alt="Maxy Academy Logo" style="height: 30px; margin-right: 10px;">
                            Maxy Academy
                        </a>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <input type="radio" id="student" name="toggle">
                                    <label for="student" class="student"><a class="nav-link me-2"
                                            href="/signin-student">Student</a></label>
                                    <input type="radio" id="company" name="toggle" checked>
                                    <label for="company" class="company"><a class="nav-link me-2"
                                            href="/signin-company">Company</a></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start mt-5">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email & password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form id="validationForm" role="form" novalidate>
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                id="validationCustomEmail" placeholder="Email" aria-label="Email"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a valid email address.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg"
                                                id="validationCustomPassword" placeholder="Password"
                                                aria-label="Password" required>
                                            <div class="invalid-feedback">
                                                Please provide a password that contains both letters and numbers.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <p class="mb-2 text-sm mx-auto"><a href="/forgot-password"
                                                    class="text-primary text-gradient font-weight-bold">Forgot
                                                    Password?</a></p>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="/signup-company"
                                            class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('/img/background-signin.jpg'); background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="/js/core/popper.min.js"></script>
    <script src="/js/core/bootstrap.min.js"></script>
    <script src="/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/js/plugins/smooth-scrollbar.min.js"></script>
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
        document.addEventListener('DOMContentLoaded', function() {
            const studentRadio = document.getElementById('student');
            const companyRadio = document.getElementById('company');

            function updateRoute() {
                if (studentRadio.checked) {
                    window.location.href = "/signin-student";
                } else if (companyRadio.checked) {
                    window.location.href = "/signin-company";
                }
            }
            companyRadio.checked = true;
            window.location.href = "#company";
            studentRadio.addEventListener('change', updateRoute);
            companyRadio.addEventListener('change', updateRoute);
        });
    </script>
    <script>
        document.getElementById('validationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var emailInput = document.getElementById('validationCustomEmail');
            var passwordInput = document.getElementById('validationCustomPassword');

            var isValidEmail = validateEmail(emailInput.value);
            var isValidPassword = validatePassword(passwordInput.value);

            emailInput.classList.remove('is-invalid');
            passwordInput.classList.remove('is-invalid');

            if (!isValidEmail) {
                emailInput.classList.add('is-invalid');
            }

            if (!isValidPassword) {
                passwordInput.classList.add('is-invalid');
            }

            if (isValidEmail && isValidPassword) {
                window.location.href = "/dashboard-company";
            }
        });

        function validateEmail(email) {
            return email.includes('@');
        }

        function validatePassword(password) {
            var hasLetter = /[a-zA-Z]/.test(password);
            var hasNumber = /\d/.test(password);
            return hasLetter && hasNumber;
        }
    </script>
</body>

</html>
