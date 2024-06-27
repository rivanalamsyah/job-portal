<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icon.png">
    <link rel="icon" href="/img/icon.png">
    <title>Maxy Academy | {{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="/css/style.css" rel="stylesheet" />
</head>

<body class="">
    <main class="main-content">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="navbar-brand font-weight-bolder ms-lg-0 ms-3" style="color: black;">
                                    <img src="/img/icon.png" alt="Maxy Academy Logo"
                                        style="height: 30px; margin-right: 5px; margin-left: 20px;">
                                    Maxy Academy
                                </div>
                                <div class="card-header pb-0 text-start mt-5">
                                    <h4 class="font-weight-bolder">Reset Password</h4>
                                    <p class="mb-0">Please provide a new password to continue using your Maxy account.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" aria-label="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="New Password" aria-label="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-lg btn-primary w-100 mt-4 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#resetPasswordModal">
                                                Reset Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('/img/bg-password.jpg');
          background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resetPasswordModalLabel">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="/img/illustrations/success.jpg" alt="Success Icon" style="height: 75px;">
                    <h5>Submitted Successfully!</h5>
                    <p>Your password reset request has been successfully sent. Thank You!</p>
                </div>
                <div class="modal-footer">
                    <a href="/signin-student" class="btn btn-primary w-100">Login</a>
                </div>
            </div>
        </div>
    </div>
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
        document.getElementById("resetPasswordBtn").addEventListener("click", function(event) {
            event.preventDefault();
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false
            });
            myModal.show();
            $('#successModal').on('hidden.bs.modal', function() {
                window.location.href =
                    "/signin-student";
            });
        });
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
