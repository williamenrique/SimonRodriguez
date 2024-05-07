<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">PERIODOS ACADEMICOS</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Nuestros preriodos academicos</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">La UNESR cuenta con 3 periodos academicos</p>
                        </div>
                        <div class="section-title-heading mb-20 mt-5">
                            <h1 class="primary-color">PERIODO 1 </h1>
                            <h3 class="mb-4">ENERO - JUNIO</h3>
                            <h1 class="primary-color">PERIODO 2 </h1>
                            <h3 class="mb-4">SEPTIEMBRE - DICIEMBRE</h3>
                            <h1 class="primary-color">PERIODO 3 INTENSIVOS</h1>
                            <h3 class="primary-color">JULIO - AGOSTO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
<?= footer($data)?>