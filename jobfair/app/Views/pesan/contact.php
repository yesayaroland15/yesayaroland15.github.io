<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Hubungi Kami</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>Jl. Asia Afrika No.158, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40261</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span>admin@winnicode.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center bg-light rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>085159932501</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe  class="position-relative rounded w-200 h-200"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7355379424903!2d107.6155624178616!3d-6.922185082417268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7be0c68ab23%3A0x48a54e31d533b864!2sJl.%20Asia%20Afrika%20No.158%2C%20Kb.%20Pisang%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040261!5e0!3m2!1sid!2sid!4v1730274186731!5m2!1sid!2sid" width="600" height="450" style="border:0;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary w-100 py-3" type="button" href="<?= base_url('pesan/create') ?>">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
         
<?= $this->endSection() ?>
       