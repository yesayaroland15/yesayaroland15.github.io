<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobWinni - Job Fair Portal When You Apply</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Start Body atau Content -->
        <?= $this->include('layout/topbar') ?>
        <!-- End Body atau Content -->

        <!-- Start Body atau Content -->
        <?= $this->renderSection('content') ?>
        <!-- End Body atau Content -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="<?= base_url('job/about') ?>">About Us</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('pesan/contact') ?>">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Social Media</h5>
                        <a class="btn btn-link text-white-50" href="https://www.instagram.com/winnicodeofficial/" target="_blank">Instagram</a>
                        <a class="btn btn-link text-white-50" href="https://www.linkedin.com/company/winnicodegarudateknologi/" target="_blank">Linked In</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Asia Afrika No.158, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40261</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>085159932501</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@winnicode.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/winnicodeofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/winnicodegarudateknologi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <img class="img-fluid" src="<?= base_url('img/winnicode.jpg'); ?>" alt="Responsive image">
                        <p class="mb-2">Jurnalistik Program winnicode adalah program pengembangan sumber daya manusia yang ditujukan bagi pemuda pemudi yang berkarir di dunia report.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" >JobWinni</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" >Yesaya Roland Steven</a>
                            </br>Distributed By <a class="border-bottom"  href="https://winnicode.com/" target="_blank">Winnicode Garuda Teknologi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
        function previewImage() {
            const picture = document.querySelector('#picture');
            const picture_preview = document.querySelector('.picture-preview');
            const file_picture = new FileReader();
            file_picture.readAsDataURL(picture.files[0]);
            file_picture.onLoad = function(e) {
                picture_preview.src = e.target.result;
            }
        }
    </script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/js/main.js"></script>
</body>
