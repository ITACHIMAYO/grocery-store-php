<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/img/icon.png">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/templatemo.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/slick/slick-theme.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h2 align-self-center" href="<?php echo  BASE_URL; ?>">
                <img class="piña" src="<?php echo BASE_URL; ?>assets/img/icon.png">
                <?php echo  TITLE; ?>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo  BASE_URL . 'Principal/about'; ?>">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo  BASE_URL . 'Principal/shop'; ?>">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo  BASE_URL . 'Principal/contact'; ?>">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fas fa-fw fa-search text-success mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#" id="verCarrito">
                        <i class="fas fa-fw fa-cart-arrow-down text-success mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white" id="btnCantidadCarrito">0</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo BASE_URL . 'principal/deseo/'; ?>">
                        <i class="fas fa-fw fa-heart text-success mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white" id="btnCantidadDeseo">0</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fas fa-fw fa-user text-success mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-util text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>