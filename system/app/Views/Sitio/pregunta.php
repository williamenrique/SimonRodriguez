<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">PREGUNTAS INFORMATIVAS</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- faq start -->
    <div class="fag-area pt-100 pb-70 mb-">
        <div class="container">
            <div class="faq-list">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="faq-area-title mb-35">
                            <h2 class="mb-15">Preguntas informativas :</h2>
                            <p>Le dará una explicación completa del sistema y le expondrá las enseñanzas reales del gran explorador de la verdad, el maestro constructor de la felicidad humana que uno rechaza.</p>
                        </div>
                        <div class="faq-wrapper mb-30 wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <div class="accordion" id="accordion">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq end -->
<?= footer($data)?>