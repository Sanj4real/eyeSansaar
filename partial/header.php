<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->


    <title>EyeSansar | Optimist</title>



    <!-- Bootstrap cdn CSS -->
    <link href="app/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-family -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">


    <!-- line-awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />

    <!-- font-awesoeme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css"/>

    <!-- fancy-box -->
    <link rel="stylesheet" href="app/css/jquery.fancybox.min.css">

    <!-- owl-slider -->
    <link rel="stylesheet" type="text/css" href="app/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="app/css/owl.theme.default.min.css" />

    <!-- xZoom-master -->
    <link rel="stylesheet" href="app/css/xzoom.css" />
    <link rel="stylesheet" href="app/css/magnific-popup.css" />


    <!-- css-link -->
    <link rel="stylesheet" href="app/css/style.css">

</head>

<body>

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="top-left">
                            <ul>
                                <li>
                                    <a href="mailto:eyesansar@gmail.com"> <i class="las la-envelope"></i>
                                        eyesansar@gmail.com</a>
                                </li>
                                <li>
                                    <a href="tel:+9805654122"><i class="las la-phone"></i> 9805654122</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="top-right">
                            <ul>
                                <li>
                                    <a href="about.php">
                                        Welcome to EyeSansar</a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        <i class="las la-map-marker"></i>
                                        Find a store</a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                    <i class="las la-user"></i>
                                        Signup/Signin</a>
                                </li>
                                <!-- <li class="d-md-none d-lg-inline-block">
                                    <a href="signIn.php">
                                        <i class="lab la-dropbox"></i>
                                        My Order</a>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo">
                        <a href="index.php">
                            <img src="app/public/logo/logo.png" alt="site-logo">
                        </a>
                    </div>
                    <div class="menu mobile-hide d-none d-md-block ">
                        <ul>
                            <li>
                                <a href="list.php">Eyeglasses</a>
                            </li>
                            <li>
                                <a href="list.php">Sunglasses</a>
                            </li>
                            <li>
                                <a href="list.php">Sunglasses</a>
                            </li>
                            <li class="text">
                                <a href="list.php">Rs 999</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-right ">
                        <div class="header-search d-none d-lg-block right-common">
                            <form action="">
                                <input type="text" placeholder="Search product" name="headerSearch">
                                <i class="las la-search"></i>
                            </form>
                        </div>
                        <div class="header-button right-common d-block d-lg-none" id="category--list">
                            <i class="las la-bars"></i>
                        </div>
                        <!-- <div class="header-button right-common d-none d-lg-block">
                            <a href="signIn.php" class="site-button">Login/Signup <i class="las la-user"></i></a>
                        </div> -->
                        <div class="header-button right-common d-block d-xl-none">
                            <a href="cartList.php" class="site-button"><i class="las la-heart"></i></a>
                        </div>
                        <div class="header-button right-common d-block d-lg-none">
                            <a href="signIn.php" class="site-button"><i class="las la-mobile"></i></a>
                        </div>
                        <div class="header-button right-common d-block d-xl-none">
                            <button class="site-button checkCart" id="sidebarCollapse">
                                <div class="cart">
                                    <i class="las la-shopping-cart">
                                        <span>0</span>
                                    </i>
                                </div>
                            </button>
                        </div>
                        <div class="header-button right-common d-none d-lg-none d-xl-block">
                            <button class="site-button checkCart" id="sidebarCollapse">
                                <div class="cart">
                                    <i class="las la-shopping-cart">
                                        <span>0</span>
                                    </i>
                                    <h6>Your Cart <span>$0</span></h6>
                                </div>
                                <div class="checkout-cart">
                                    View Cart
                                </div>
                            </button>
                        </div>

                    </div>

                    <!-- <div class="mobile-sidebar " id="mobileSidebar" onclick="closeNav()">
                        <div class="logo sidebar-logo">
                            <a href="#">
                                <img src="app/img/logo/logo.png" alt="site-header">
                            </a>
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        </div>
                        <div class="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="list.php">New Arrivals</a>
                                </li>
                                <li>
                                    <a href="service.php">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="header-bottom d-none d-md-block">
            <div class="container">
                <ul>
                    <li class="category-name d-md-none d-lg-inline-block d-xl-inline-block" id="category--list">Category <i class="las la-angle-down"></i>
                        <div class="category-sidebar" id="category_sidebar">
                            <ul class="category-parent" id="category--parent">

                                <li class="category-child child">
                                    <a href="#">Vehículos</a>
                                    <div class="mega-menu">
                                        <div class="mega-block">
                                            <h4>Delivery Free</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-block">
                                            <h4>Delivery Free</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-block">
                                            <h4>Delivery Free</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                                <li>
                                                    <a href="#">delivery one</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="category-child">
                                    <a
                                        href="#">Supermercado</a>
                                </li>



                                <li class="nav-categs-departments__list nav-categs-departments__list--dynamic">
                                    <a href="#" data-order="0" role="button" aria-expanded="false">Tecnología</a>
                                </li>


                                <li class="category-child">
                                    <a
                                        href="
                                        #">Electrodomésticos</a>
                                </li>

                                <li class="category-child">
                                    <a href="
                                    #">Hogar
                                        y
                                        Muebles
                                    </a>
                                </li>

                                <li class="category-child">
                                    <a
                                        href="
                                       #">Moda</a>
                                </li>

                                <li class="category-child">
                                    <a href="
                                    #">Deportes
                                        y
                                        Fitness</a>
                                </li>

                                <li class="category-child">
                                    <a
                                        href="
                                        #">Herramientas</a>
                                </li>

                                <li class="category-child">
                                    <a href="
                                    #">Tiendas
                                        oficiales</a>
                                </li>


                                <li class="category-child">
                                    <a href="
                                   #">Ver más
                                        categorías</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <i class="las la-truck"></i> Free Delivery <span> All over Nepal </span>
                    </li>
                </ul>
            </div>
        </div> -->
    </header>