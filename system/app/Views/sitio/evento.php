<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h2 class="white-color f-700">En Construcción</h2>
                                <p class="text-white"><?= $data['pensamiento'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
<?= footer($data)?>