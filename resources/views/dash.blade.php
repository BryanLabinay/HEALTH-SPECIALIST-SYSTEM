<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo Medico De Dios Hospital</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('Css/app.css') }}">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-0 background-color">
        <div class="container-fluid justify-content-between">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->
                <a class="navbar-brand me-3 d-flex align-items-center" href="{{ route('dashboard') }}" wire:navigate>
                    <img src="{{ url('Image/logo/grupo.png') }}" alt="Logo" class="logo"></a>

                <!-- Search form -->
                <form class="input-group w-auto my-auto d-none d-sm-flex">
                    <input autocomplete="off" type="search" class="form-control rounded input1" placeholder="Search"
                        style="min-width: 125px;" />
                </form>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold text-black"
                        href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold text-black"
                        href="{{ route('add.appointment') }}">Appointment</a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold text-black"
                        href="{{ route('appointment.list') }}">Approved</a>
                </li>
                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold text-black"
                        href="#">Events</a>
                </li>
            </ul>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-comments fa-lg text-primary "></i>
                        <span class="badge rounded-pill badge-notification bg-danger">6</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-bell fa-lg text-primary "></i>
                        <span class="badge rounded-pill badge-notification bg-danger">12</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a class="nav-link d-sm-flex align-items-sm-center dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <strong class="d-none d-sm-block ms-1 me-3">User</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Right elements -->
        </div>
    </nav>
    <!-- Navbar -->
</div>
</body>

</html>
