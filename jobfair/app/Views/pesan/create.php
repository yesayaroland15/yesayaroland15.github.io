<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Message</h1>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Jobfair. If you have a problem, you can make your message like email, password, subject, and message. Please Leave Your Message</p>
                <div class="row g-4">
                    <div class="col-12">
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://static-00.iconduck.com/assets.00/message-icon-512x463-tqzmxrt7.png"
                            frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <form action="<?= base_url('pesan/create') ?>" method="post">
                            <?= csrf_field() ?>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nama" 
                                            name = "nama" placeholder="Your Name">
                                            <label for="nama">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" 
                                            name = "email"  placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" 
                                            name = "subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" 
                                            name = "message" style="height: 200px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
         
<?= $this->endSection() ?>
       