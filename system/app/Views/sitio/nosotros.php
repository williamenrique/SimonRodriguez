<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">En proceso</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- team start -->
    <div class="team-area separator pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">NUESTRAS AUTORIDADES </h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color"> UNESR EXT SAN FELIPE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fh"></div>
            <div class="team-list" id="autoridades">
                
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- team start -->
    <div class="team-area pt-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">CREADORES DEL BLOG</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Equipo de trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list" id="team">
                
            </div>
        </div>
    </div>
    <!-- team end -->
<?= footer($data)?>