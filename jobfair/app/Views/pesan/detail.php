<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job</h1>
            <div class= "card mb-4">
                <div class ="card-body">
                    <h5 class ="card-title">Message</h5>
                    <p class="card-text">Nama: <?= $result['nama']?></p>
                    <p class="card-text">Email: <?= $result['email']?></p>
                    <p class="card-text">Subject: <?= $result['subject']?></p>
                    <p class="card-text">Message: <?= $result['message']?></p>
                </div>
            </div>
            <a class="btn btn-primary py-3 px-3" href="<?= base_url() ?>">Go Back</a>
        </div>
    <!-- Jobs End -->
</main>
<?= $this->endSection() ?>

       