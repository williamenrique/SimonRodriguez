<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">Carreras</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div class="course-details-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 events-sidebar-margin">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Perfil del Egresado</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link" id="perfil"> </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 events-sidebar-margin">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Pensun por carrera</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link" id="pensum"> </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section about-title-section-2 mb-30">
                        <h5>Breve introducción al perfil</h5>
                        <p class="text-justify"></p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-title-section about-title-section-2 mb-30">
                        <h5>Breve introducción al perfil</h5>
                        <p class="text-justify"> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= footer($data)?>