<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Pesan</h1>
            <div class= "card mb-4">
                <div class = "card-header">
                    <i class = "fas fa-table me-1"></i>
                    List Pesan
                </div>
                <div class ="table-responsive">
                    <table class ="table table-borderless table-hover align-midled">
                        <thead class="border-bottom">
                            <tr>
                                <th class = "text-muted">No</th>
                                <th class = "text-muted">Nama</th>
                                <th class = "text-muted">Email</th>
                                <th class = "text-muted">Subject</th>
                                <th class = "text-muted">Pesan</th>
                                <th class = "text-muted">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($result as $value) : ?>
                                <tr class="border-bottom">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['subject'] ?></td>
                                    <td><?= $value['message'] ?></td>
                                    <td>
                                        <a class= "btn btn-primary" href="<?= base_url('pesan/' . $value['id_pesan']) ?>" role= "button">D</a>
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

       