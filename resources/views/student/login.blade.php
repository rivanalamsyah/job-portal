<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxy Academy | Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css"> <!-- Create or link to your own login.css file for custom styles -->
    <!-- Favicon -->
    <link rel="icon" href="/img/icon.png">
</head>

<body>
    <section class="container-fluid login h-100">
        <div class="row h-100">
            <div class="col-lg-6">
                <!-- Logo kecil di atas kiri -->
                <div class="d-flex align-items-start mb-3">
                    <img src="/img/logo_maxy.png" alt="Logo" style="height: 50px;">
                </div>
                <div class="header text-center my-5">
                    <h1 class="fs-1">Sign In</h1>
                </div>
                <div class="login-form mx-auto">
                    <form id="login-form" class="row g-3" novalidate>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Email Address" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
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
                                Please enter your password.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="signin-btn" class="btn btn-warning w-100" type="button">Sign In</button>
                            <a href="/" class="forgot-password">Forgot Password?</a>
                        </div>
                        <div class="col-md-12 text-center">
                            <span class="signup-txt">Don't have an account? <a href="/register"
                                    class="text-decoration-underline text-primary">Sign Up</a></span>
                            <button type="button" class="btn btn-outline-dark signin-google">
                                <i class="bi bi-google"></i> Sign in with Google</button>
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
            const loginForm = document.getElementById('login-form');
            const signInBtn = document.getElementById('signin-btn');

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

            signInBtn.addEventListener('click', function() {
                if (loginForm.checkValidity()) {
                    // Form valid, submit the form
                    loginForm.submit();
                } else {
                    // Form invalid, show validation messages
                    loginForm.classList.add('was-validated');
                }
            });
        });
    </script>
</body>

</html>