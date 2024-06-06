<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>UNESR</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="<?= IMG ?>logo.png">
		<!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link rel="stylesheet" href="<?= PLUGINS ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/animate.min.css">
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
		<!-- <link rel="stylesheet" href="<?= PLUGINS ?>css/fontawesome-all.min.css"> -->
		<link rel="stylesheet" href="<?= PLUGINS ?>css/themify-icons.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/slick.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/style.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/default.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/responsive.css">
		<link rel="stylesheet" href="<?= PLUGINS ?>css/meanmenu.css">
		<link rel="stylesheet" href="<?= CSS ?>estilo.css">
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
										<p class="phone-number"><?= $data['tlf_instituto'] ?></p>
									</div>
									<div class="header-contact header-contact-email">
										<span class="ti-email"></span>
										<p class="email-name white-text"><a href="#" class="text-white"><?= $data['email_instituto'] ?></a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="header-social-icon-list">
									<ul>
										<li><a href="<?= $data['face_instituto']?>" target="_blank"><span class="ti-facebook"></span></a>
										</li>
										<li><a href="<?= $data['insta_instituto']?>" target="_blank"><span class="ti-instagram"></span></a>
										</li>
										<!-- <li><a href="#"><span class="ti-dribbble"></span></a></li>
										<li><a href="#"><span class="ti-google"></span></a></li>
										<li><a href="#"><span class="ti-pinterest"></span></a></li> -->
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
									<a href="<?= base_url()?>">
										<img src="<?= IMG ?>logo.png" alt="" style="width: 50px;">
									</a>
								</div>
							</div>
							<div class="col-xl-10 col-lg-10 col-md-6 col-6">
								<div class="main-menu f-right">
									<nav id="mobile-menu" style="display: block;">
										<ul>
											<li>
												<a href="<?= base_url()?>">INICIO</a>
											</li>
											<li>
												<a href="<?= base_url()?>sitio/acerca">ACERCA</a>
											</li>
											<li>
												<a href="#">FORMACIÓN</a>
												<ul class="submenu">
													<li>
														<a href="<?= base_url()?>sitio/captacion">CAPTACIÓN</a>
													</li>
													<li>
														<a href="<?= base_url()?>sitio/carreras">CARREAS OFERTADAS</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">INSCRIPCIÓN</a>
												<ul class="submenu">
													<li>
														<a href="<?= base_url()?>sitio/proceso">PROCESO DE INSCRIPCIÓN SGA</a>
													</li>
													<li>
														<a href="<?= base_url()?>sitio/periodos">PERIODOS ACADEMICOS</a>
													</li>

												</ul>
											</li>
											<!-- <li>
                                            <a href="#">CONVENIO</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="<?= base_url()?>sitio/plantilla">INSTITUCIONALES</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url()?>sitio/plantilla">UNERS INCES</a>
                                                </li>
                                            </ul>
                                        </li> -->
											<li>
												<a href="<?= base_url()?>sitio/nosotros">NOSOTROS</a>
											</li>
											<li>
												<a href="#">CONTACTO</a>
												<ul class="submenu">
													<li>
														<a href="<?= base_url()?>sitio/contacto">CONTACTANOS</a>
													</li>
													<li>
														<a href="<?= base_url()?>sitio/pregunta">información</a>
													</li>
												</ul>
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