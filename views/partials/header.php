<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Super Blog</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <<?php session_start() ?>
<header>
    <nav
        class="navbar navbar-dark bg-dark fixed-top py-3 d-flex align-items-stretch border-bottom border-dark fs-4 text-white m-20">
        <div class="container-fluid d-flex align-items-center fs-4 text-white mb-20">
            <a class="navbar-brand" href="index.php">Mon Super Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mon compte
                            </a>
                        <ul class="dropdown-menu">
                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                            <li class="nav-item">
                                <a class="dropdown-item" href="logout.php">Se deconnecter</a>
                            </li>
                             <?php } else { ?>
                            <li class="nav-item">
                            <a a class="dropdown-item" aria-current="page" href="signinup.php">S'inscrire</a>
                            </li>
                            <li class="nav-item">
                            <a a class="dropdown-item" href="login.php">Se connecter</a>
                            </li>
                            <?php } ?>
                        </ul>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Gestion
                            </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                            <a a class="dropdown-item" aria-current="page" href="addpost.php">Ajouter un post</a>
                            </li> 
                        </ul>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Catégories
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                    <li><a class="dropdown-item" href="#"><?php echo $category->getCategoryName() ?></a>
                                    </li>
                                    <?php } ?>
                            </ul>
                        </li>

                        <!-- <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </div>
    </nav>
</header>