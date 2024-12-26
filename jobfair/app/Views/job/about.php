<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Header End -->
<div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item text-white active" aria-current="page">This is an About's Portal Job</li>
                    </ol>
                </nav>
            </div>
        </div>
<!-- Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="<?= base_url('img/about-2.jpg'); ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="<?= base_url('img/about-1.jpg'); ?>" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="<?= base_url('img/about-3.jpg'); ?>" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="<?= base_url('img/about-4.jpg'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">This is a jobfair portal. It aims to help workers find jobs in any field. You can now search for jobs on this jobfair portal. The benefits provided are numerous. Here are the benefits of this jobfair portal</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Boost Self-Confidence</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Knowledge of The Company</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Greater Opportunities</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="<?= base_url() ?>">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
<?= $this->endSection() ?>

       