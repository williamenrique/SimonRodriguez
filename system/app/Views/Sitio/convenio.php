<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">CONVENIO</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
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

            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section mb-30">
                        
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30">
                        <img src="<?= IMG ?>acerca/felixadam.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= footer($data)?>