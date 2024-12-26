<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Apply</h1>
            <div class= "card mb-4">
                <div class = "card-header">
                    <i class = "fas fa-table me-1"></i>
                    List Apply
                </div>
                <div class ="table-responsive">
                    <table class ="table table-borderless table-hover align-middle">
                        <thead class="border-bottom">
                            <tr>
                                <th class = "text-muted">No</th>
                                <th class = "text-muted">Nama Lengkap</th>
                                <th class = "text-muted">Alamat Email</th>
                                <th class = "text-muted">Portofolio</th>
                                <th class = "text-muted">Program Studi</th>
                                <th class = "text-muted">Pendidikan Terakhir</th>
                                <th class = "text-muted">CV</th>
                                <th class = "text-muted">Nama Job, Nama Perusahaan</th>
                                <th class = "text-muted">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($result as $value) : ?>
                                <tr class="border-bottom">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['namalengkap'] ?></td>
                                    <td><?= $value['alamatemail'] ?></td>
                                    <td><?= $value['portofolio'] ?></td>
                                    <td><?= $value['programstudi'] ?></td>
                                    <td><?= $value['pendidikan_terakhir'] ?></td>
                                    <td><?= $value['cv'] ?></td>
                                    <td><?= $value['nama_job'] ?>, <?= $value['nama_perusahaan'] ?></td>
                                    <td>
                                        <a class= "btn btn-primary" href="<?= base_url('job/detailapply/' . $value['id_apply']) ?>" role= "button">D</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary py-3 px-3" href="<?= base_url() ?>">Go Back</a>
        </div>
    <!-- Jobs End -->
</main>
<?= $this->endSection() ?>

       