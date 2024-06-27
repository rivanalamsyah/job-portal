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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/js/argon-dashboard.min.js?v=2.0.4"></script>
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
                window.location.href = "/dashboard-admin";
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