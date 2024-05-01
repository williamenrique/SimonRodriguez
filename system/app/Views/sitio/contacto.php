<?= head($data)?>
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?= IMG ?>bg/bg_001.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Contactanos</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">volver al inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Pagina realizada por grupo</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div class="advisors-area gray-bg pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="contact-info-text">
                        <div class="section-title mb-20">
                            <div class="section-title-heading mb-10">
                                <h1>Información de contacto</h1>
                            </div>
                            <div class="section-title-para">
                                <p>breve descripcion referente que se quiere captar</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-headphone"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Llamanos al</h5>
                                    <span><?= $data['tlf_instituto']; ?></span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Email de la UNESR</h5>
                                    <span><a href="#" ><?= $data['email_instituto']; ?></a></span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Dirección</h5>
                                    <span><?= $data['direccion_instituto']; ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="events-details-form faq-area-form mb-30 p-0">
                        <form>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="events-form-title mb-25">
                                        <h2>Tienes alguna pregunta</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Nombre :" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Email :" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Pregunta :" type="text">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <input placeholder="Experiencia :" type="text">
                                </div>
                                <div class="col-xl-12">
                                    <textarea cols="30" rows="10" placeholder="Mensaje :"></textarea>
                                </div>
                                <div class="col-xl-12">
                                    <div class="faq-form-btn events-form-btn">
                                        <button class="btn m-0">enviar </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
<?= footer($data)?>