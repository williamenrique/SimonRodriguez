<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= IMG ?>logo.png">
	<title><?= $data['page_title']?></title>
	<!-- CSS here -->
    <link rel="stylesheet" href="<?= CSS ?>estilo.css">
	<link rel="stylesheet" href="<?= PLUGINS ?>css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="animate.min.css"> -->
    <!-- <link rel="stylesheet" href="magnific-popup.css"> -->
    <link rel="stylesheet" href="<?= PLUGINS ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= PLUGINS ?>css/themify-icons.css">
    <!-- <link rel="stylesheet" href="<?= PLUGINS ?>css/slick.css"> -->
    <link rel="stylesheet" href="<?= PLUGINS ?>css/meanmenu.css">
    <link rel="stylesheet" href="<?= CSS ?>default.css">
    <link rel="stylesheet" href="<?= CSS ?>style.css">
    <link rel="stylesheet" href="<?= CSS ?>responsive.css">
</head>

<body>
    <!-- header-start -->
	<header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="header-contact header-contact-phone">
                                    <span class="ti-headphone"></span>
                                    <p class="phone-number">+0123456789</p>
                                </div>
                                <div class="header-contact header-contact-email">
                                    <span class="ti-email"></span>
                                    <p class="email-name"><a href="#" class="__cf_email__" data-cfemail="265553565649545266414b474f4a0845494b">EMAIL@GMAIL.COM</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                    <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?= IMG ?>logo.png" style="width:50px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="#home">INICIO</a>
                                        </li>
                                        <li>
                                            <a href="#about">FORMACION</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about_us.html">CARREAS EN CURSO</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">INSCRIPCION</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="events_01.html">PROCESO DE INSCRIPCION</a>
                                                </li>
                                                <li>
                                                    <a href="events_02.html">PERIODOS ACADEMICOS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="course_01.html">GALERIA</a>
                                        </li>
                                        <li>
                                            <a href="events_01.html">CONVENIO</a>
                                        </li>
                                        <li>
                                            <a href="contact_us.html">CONTACTO</a>
                                        </li>
										<li>
                                            <a href="contact_us.html">NOSOTROS</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->