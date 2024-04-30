        <!-- subscribe start -->
    <div class="subscribe-area">
        <div class="container">
            <div class="subscribe-box">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="subscribe-text">
                                    <h1>Subscribete</h1>
                                    <span>Coloca tu correo y recibiras ultimas noticias</span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-4 justify-content-end">
                                <div class="email-submit-form">
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input placeholder="Coloca tu email" type="email">
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
    <footer id="Contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo d-flex">
                                    <img src="<?= IMG ?>logo.png" alt="" style="width:60px">
                                    <span class="ml-2 text-white" style="font-size: 40px">UNESR</span>
                                </div>
                                <div class="footer-para">
                                    <ul class="text-white" style="font-size: 14px">
                                        <li style="list-style: auto;">
                                        Tiene como visión ser una Institución global de vocación, integracionista y latinoamericana, abierta a los cambios. Flexible innovadora, andragogica y de excelencia, que
                                        promueva y practique la libertad de pensamiento y acción, fomente la participación y la
                                        profundización de los valores éticos democráticos, que permanezcan en la
                                        búsqueda constante del desarrollo sostenido y armonioso de la sociedad y el
                                        individuo y este profundamente comprometido con el desarrollo de la comunidad.
                                        </li>
                                        <li style="list-style: auto;">
                                            Tiene como misión fundamental la búsqueda, generación, aplicación y difusión del conocimiento y al afianzamiento de los valores transcendentales del hombre y la sociedad
                                        </li>
                                        <li style="list-style: auto;">
                                            Contribuir con el desarrollo económico y social de la región Sur del Lago y fomentar la defensa, protección y recuperación del medio ambiente, mediante actividades especiales de conservación ecológica. Auspiciar y realizar estudios sobre la realidad de la frontera y promover la integración binacional.
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-socila-icon">
                                    <span>Sigannos</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                            <li><a href="#"><span class="ti-dribbble"></span></a></li>
                                            <li><a href="#"><span class="ti-google"></span></a></li>
                                            <li><a href="#"><span class="ti-pinterest"></span></a></li>
                                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Quick Links</h1>
                                </div>
                                <div class="footer-menu clearfix">
                                    <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Condition</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Consultation</a></li>
                                        <li><a href="#">Team Member</a></li>
                                        <li><a href="#">Our Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 d-lg-none d-xl-block col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Post Recientes</h1>
                                </div>
                                <div class="recent-post d-flex mb-25">
                                    <div class="recent-post-thumb">
                                        <img src="img/post/recent_post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post d-flex">
                                    <div class="recent-post-thumb">
                                        <img src="img/post/recent_post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-text">
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <div class="footer-time">
                                            <span class="ti-time"></span>
                                            <span class="footer-published-time">05 May 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-xl-6 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Contactanos</h1>
                                </div>
                                <div class="footer-contact-list">
                                    <div class="single-footer-contact-info">
                                        <span class="ti-headphone "></span>
                                        <span class="footer-contact-list-text"><?= $data['tlf_instituto']?></span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-email "></span>
                                        <span class="footer-contact-list-text">
                                            <a href="#" ><?= $data['email_instituto']?></a>
                                        </span>
                                    </div>
                                    <div class="single-footer-contact-info">
                                        <span class="ti-location-pin"></span>
                                        <span class="footer-contact-list-text"><?= $data['direccion_instituto']?></span>
                                    </div>
                                </div>
                                <div class="opening-time">
                                    <span>Horas de estudio</span>
                                    <span class="opening-date">
                                        Lunes - Viernes : 08:00 am - 05:00 pm
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-25 pb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copyright text-center">
                                    <span>Copyright © 2024. All rights reserved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- JS here -->
    <script>const base_url = "<?= base_url()?>";</script>
    <script src="<?= PLUGINS ?>js/jquery-1.12.4.min.js"></script>
    <script src="<?= PLUGINS ?>js/popper.min.js"></script>
    <script src="<?= PLUGINS ?>js/bootstrap.min.js"></script>
    <script src="<?= PLUGINS ?>js/one-page-nav-min.js"></script>
    <script src="<?= PLUGINS ?>js/jquery.meanmenu.min.js"></script>
    <script src="<?= PLUGINS ?>js/owl.carousel.min.js"></script>
    <script src="<?= PLUGINS ?>js/slick.min.js"></script>
    <script src="<?= PLUGINS ?>js/plugins.js"></script>
    <script src="<?= PLUGINS ?>js/main.js"></script>
    <script src="<?= JS.$data['page_functions'] ?>"></script>

</body>

</html>