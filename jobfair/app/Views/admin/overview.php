<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= base_url('img/carousel-1.jpg') ; ?>" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Temukan Pekerjaanmu yang membuat kamu semangat</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Ini yang membuatmu semangat. mari buka dengan semangat baru yang sangat menyenangkan. Jadi anda merasa senang jika anda di apply perusahaan tersebut.</p>
                                    <a href="<?= base_url('job') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= base_url('img/carousel-2.jpg') ; ?>" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Temukan Pekerjaanmu yang membuat kamu semangat</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Ini yang membuatmu semangat. mari buka dengan semangat baru yang sangat menyenangkan. Jadi anda merasa senang jika anda di apply perusahaan tersebut</p>
                                    <a href="<?= base_url('job') ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="<?= base_url('img/about-1.jpg') ; ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="<?= base_url('img/about-2.jpg') ; ?>" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="<?= base_url('img/about-3.jpg') ; ?>" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="<?= base_url('img/about-4.jpg') ; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Here, we provide a variety of suitable job fields. Therefore, it must be done with the specified application. we will contact you if you receive the job application. What are the advantages?</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="<?= base_url('job/about') ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

</html>
<?= $this->endSection() ?>