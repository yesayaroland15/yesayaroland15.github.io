<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job</h1>
            <div class= "card mb-4">
                <div class ="card-body">
                    <img src="<?= base_url('picture/' . $result['picture']) ?>" alt="" width = "15%">
                    <p></p>
                    <h5 class ="card-title"><?= $result['nama_job']?></h5>
                    <p class="card-text">Nama Perusahaan: <?= $result['nama_perusahaan']?></p>
                    <p class="card-text">Syarat: <?= $result['syarat']?></p>
                    <p class="card-text">Gaji: <?= $result['Gaji']?></p>
                    <p class="card-text">Jenis Pekerjaan: <?= $result['jenis_pekerjaan']?></p>
                    <p class="card-text">Batas Pendaftaran: <?= $result['batas_pendaftaran']?></p>
                    <p class="card-text">Kategori: <?= $result['nama_category']?></p>
                </div>
            </div>
            <a class="btn btn-primary py-3 px-3" href="<?= base_url('job') ?>">Go Back</a>
        </div>
    <!-- Jobs End -->
</main>
<?= $this->endSection() ?>

       