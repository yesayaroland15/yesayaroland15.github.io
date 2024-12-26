<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <div class="container-xxl py-5">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Detail Apply</h1>
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text">Nama: <?= esc($result['namalengkap']) ?></p>
                <p class="card-text">Alamat Email: <?= esc($result['alamatemail']) ?></p>
                <p class="card-text">Portofolio: <?= esc($result['portofolio']) ?></p>
                <p class="card-text">Program Studi: <?= esc($result['programstudi']) ?></p>
                <p class="card-text">Pendidikan Terakhir: <?= esc($result['pendidikan_terakhir']) ?></p>
                <p class="card-text">CV: <?= esc($result['cv']) ?></p>
                <p class="card-text">Nama Job, Nama Perusahaan: <?= isset($result['nama_job']) ? esc($result['nama_job']) : 'Job Not Found'; ?>, <?= isset($result['nama_perusahaan']) ? esc($result['nama_perusahaan']) : 'Company Not Found'; ?></p>
            </div>
        </div>

        <!-- Tombol Download PDF -->
        <?php if (isset($result['cv'])): ?>
            <a class="btn btn-primary py-3 px-3" href="<?= base_url('job/downloadCVPDF/' . $result['cv']) ?>">Download CV as PDF</a>
        <?php endif; ?>

        <a class="btn btn-primary py-3 px-3" href="<?= base_url() ?>">Go Back</a>
    </div>
</main>

<?= $this->endSection() ?>
