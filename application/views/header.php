<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rental Manga</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<? echo base_url('img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url ('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url ('css/style.css') ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>
   <div style="margin-top: 20px">
    <div class="container-fluid">
        <div class="row border-top px-xl-4">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">MENU</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 205px">
                        <a href="home" class="nav-item nav-link">Home</a>
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="detektifconan">Detektif Conan</a>
          <a class="dropdown-item" href="jujutsukaisen">Jujutsu Kaisen</a>
          <a class="dropdown-item" href="onepiece">One Piece</a>
        </div>
      </li>
    
                        <a href="shop" class="nav-item nav-link">Shop</a>                          
                        <a href="account" class="nav-item nav-link">Account</a>
                        <a href="outlet" class="nav-item nav-link">Outlet</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    
                    <div class=" py-6 px-xl-8">
            <div class="col-lg-12 d-none d-lg-block" style="margin-left: 160px;">
                <a href="home" class="text-decoration-none">
                <h2 class="text-primary font-weight-bold">RENTAL-MANGA</h2>
                </a>
            </div>
            
    </div>
            
            <div class="col-lg-3 col-1 text-right" >
                <a href="cart" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
            <div style="margin-right: 50px;" class="navbar-nav ml-auto py-0">
                            <a href="<?php echo base_url(); ?>login/logout" class="nav-item nav-link">Log Out</a>
                        </div>
        </div>
                        
                    </div>
            </div>
        </div>