<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item text-white active" aria-current="page">This is a Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">Ini adalah beberapa orang yang menyukai JobWinni</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                    <img class="img-fluid" src="<?= base_url('img/testimonial-2.jpg'); ?>" style="max-width: 200px; height: auto;" alt="Responsive image">
                            <p></p>
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>Saya senang sekali. Dengan adanya JobWinni, saya bisa mendapatkan pekerjaan dengan baik dan benar.</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-1">
                                    <h5 class="mb-1">Alex</h5>
                                    <small>Doctor</small>
                                </div>
                            </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <img class="img-fluid" src="<?= base_url('img/testimonial-4.jpg'); ?>" style="max-width: 200px; height: auto;" alt="Responsive image">
                                <p></p>
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>Ini menunjukan bahwa JobWinni merupakan pekerja yang paling banyak diikuti oleh beberapa perusahaan</p>
                                <div class="d-flex align-items-center">
                                    <div class="ps-1">
                                        <h5 class="mb-1">Jean</h5>
                                        <small>Nurse</small>
                                    </div>
                                </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                    <img class="img-fluid" src="<?= base_url('img/testimonial-3.jpg'); ?>" style="max-width: 200px; height: auto;" alt="Responsive image">
                            <p></p>
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p>Saya senang sekali. Dengan adanya JobWinni, saya bisa mendapatkan pekerjaan dengan baik dan benar.</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-1">
                                    <h5 class="mb-1">Ali</h5>
                                    <small>Doctor</small>
                                </div>
                            </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <img class="img-fluid" src="<?= base_url('img/testimonial-1.jpg'); ?>" style="max-width: 200px; height: auto;" alt="Responsive image">
                                <p></p>
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>Ini menunjukan bahwa JobWinni merupakan pekerja yang paling banyak diikuti oleh beberapa perusahaan</p>
                                    <div class="d-flex align-items-center">
                                        <div class="ps-1">
                                            <h5 class="mb-1">Joana</h5>
                                            <small>Nurse</small>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
         
<?= $this->endSection() ?>

