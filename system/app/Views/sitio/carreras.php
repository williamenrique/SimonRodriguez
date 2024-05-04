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
                            <div id="perfil"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 events-sidebar-margin">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Pensun por carrera</h4>
                            <div class="sidebar-rc-post">
                                <ul>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="course_details.html">
                                                    <img src="img/courses/rcourses_thumb01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="course_details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="course_details.html">
                                                    <img src="img/courses/rcourses_thumb02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="course_details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex mb-20">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html">
                                                    <img src="img/courses/rcourses_thumb03.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="course_details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-rc-post-main-area d-flex">
                                            <div class="rc-post-thumb">
                                                <a href="course_details.html">
                                                    <img src="img/courses/rcourses_thumb04.png" alt="">
                                                </a>
                                            </div>
                                            <div class="rc-post-content">
                                                <h4>
                                                    <a href="course_details.html">How to design mobile apps with full resposibe layout</a>
                                                </h4>
                                                <div class="widget-advisors-name">
                                                    <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget mb-40 widget-padding white-bg">
                    <h4 class="widget-title">Recent Course</h4>
                    <div class="widget-tags clearfix">
                        <ul class="sidebar-tad clearfix">
                            <li>
                                <a href="#">CSE</a>
                            </li>
                            <li>
                                <a href="#">Business</a>
                            </li>
                            <li>
                                <a href="#">Study</a>
                            </li>
                            <li>
                                <a href="#">English</a>
                            </li>
                            <li>
                                <a href="#">Education</a>
                            </li>
                            <li>
                                <a href="#">Engineering</a>
                            </li>
                            <li>
                                <a href="#">Advisor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= footer($data)?>