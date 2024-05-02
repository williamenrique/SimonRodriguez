<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">CAPTACIÓN</h2>
                                <p class="text-white">
                                    "Sólo la educación impone obligaciones a la voluntad. Estas obligaciones son las que llamamos hábitos."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="section-title-heading mb-50 text-center">
                <h1 class="primary-color">Descripción grafica del proceso de captación</h1>
            </div>
            <div class="row">
                <?php 
                    for ($i=2; $i < 10; $i++) { 
                        echo '
                        <div class="col-xl-6 col-lg-6 mb-4">
                            <img src="' . IMG .'captacion/'.$i.'.png" class="img-fluid">
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </div>
<?= footer($data)?>