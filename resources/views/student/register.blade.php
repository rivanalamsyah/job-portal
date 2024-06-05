<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxy Academy | Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/register.css">
    <!-- Favicon -->
    <link rel="icon" href="/img/icon.png">
</head>

<body>
    <section class="container-fluid signup h-100">
        <div class="row h-100">
            <div class="col-lg-6">
                <!-- Logo kecil di atas kiri -->
                <div class="d-flex align-items-start mb-3">
                    <img src="/img/logo_maxy.png" alt="Logo" style="height: 50px;">
                </div>
                <div class="header text-center my-5">
                    <h1 class="fs-1">Sign Up</h1>
                </div>
                <div class="register-form mx-auto">
                    <form id="signup-form" class="row g-3" novalidate>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid first name.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                                required>
                            <div class="invalid-feedback">
                                Please provide a valid last name.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Address" required>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" aria-label="Password" aria-describedby="password-addon"
                                    required>
                                <span class="input-group-text" id="password-addon">
                                    <i class="fas fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid password.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" placeholder="Confirm Password" aria-label="Confirm Password"
                                    aria-describedby="confirm-password-addon" required>
                                <span class="input-group-text" id="confirm-password-addon">
                                    <i class="fas fa-eye" id="toggleConfirmPassword"></i>
                                </span>
                            </div>
                            <div class="invalid-feedback">
                                Passwords do not match.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="signup-btn" class="btn btn-warning w-100" type="button">Sign Up</button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span class="signup-txt">Already have an account? <a href="/login"
                                    class="text-decoration-underline text-primary">Sign In</a></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <img src="/img/bg_signin.png" alt="Hello Maxyans!" class="img-fluid position-absolute">
            </div>
        </div>
    </section>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePasswordButton = document.getElementById('togglePassword');
            const confirmPassInput = document.getElementById('confirm_password');
            const toggleConfirmPasswordButton = document.getElementById('toggleConfirmPassword');
            const signUpForm = document.getElementById('signup-form');
            const signUpBtn = document.getElementById('signup-btn');

            togglePasswordButton.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                const eyeIcon = togglePasswordButton.querySelector('i');
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            toggleConfirmPasswordButton.addEventListener('click', function() {
                const type = confirmPassInput.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassInput.setAttribute('type', type);

                const eyeIcon = toggleConfirmPasswordButton.querySelector('i');
                if (type === 'text') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });

            signUpBtn.addEventListener('click', function() {
                if (signUpForm.checkValidity()) {
                    // Form valid, submit the form
                    signUpForm.submit();
                } else {
                    // Form invalid, show validation messages
                    signUpForm.classList.add('was-validated');
                }
            });
        });
    </script>
</body>

</html>
