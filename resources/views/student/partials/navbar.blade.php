<body>

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
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard" onclick="moveActiveLine(this)">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            onclick="moveActiveLine(this)">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/minibootcamp" onclick="moveActiveLine(this)">Mini Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rapidonboarding" onclick="moveActiveLine(this)">Rapid Onboarding</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" href="/orderhistory" onclick="moveActiveLine(this)">Order History</a>
                    </li>
                    <li class="nav-item" style="display: flex; align-items: center; margin-left:250px;">
                        <button type="button" class="btn btn-outline-dark mx-2" href="/register">Sign Up</button>
                        <button type="button" class="btn btn-outline-primary" href="/login">Log In</button>
                    </li>
                </ul>
                <div class="active-line" id="active-line"></div>
            </div>
        </div>
    </nav>

    <!-- JavaScript and dependencies -->
    <script src="/js/onboarding_user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-lRL88U29nMvPpLhluOrv9+2JeT7Uo6T3v8b7/pStUqYQrgaQQn5tEoQaXUtC+tGt" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-ckv5IIh0f9CMEU/t2GtibCIuP0lfQixkbcLw/Jq+2FpXkqVqcC2xSSCxXPAoIiBB" crossorigin="anonymous">
    </script>

</body>
