<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job</h1>
            <div class= "card mb-4">
                <div class = "card-header">
                    <i class = "fas fa-table me-1"></i>
                    List Lowongan Pekerjaan
                </div>
                <div class ="table-responsive">
                    <table class ="table table-borderless table-hover align-middle">
                        <thead class="border-bottom">
                            <tr>
                                <th class = "text-muted">No</th>
                                <th class = "text-muted">Logo</th>
                                <th class = "text-muted">Nama Pekerjaan</th>
                                <th class = "text-muted">Nama Perusahaan</th>
                                <th class = "text-muted">Syarat</th>
                                <th class = "text-muted">Gaji</th>
                                <th class = "text-muted">Jenis Pekerjaan</th>
                                <th class = "text-muted">Batas Pendaftaran</th>
                                <th class = "text-muted">Kategori</th>
                                <th class = "text-muted">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($result as $value) : ?>
                                <tr class="border-bottom">
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img src="<?= base_url('picture/' . $value['picture']) ?>" 
                                        alt="" width= "100">
                                    </td>
                                    <td><?= $value['nama_job'] ?></td>
                                    <td><?= $value['nama_perusahaan'] ?></td>
                                    <td><?= $value['syarat'] ?></td>
                                    <td><?= $value['Gaji'] ?></td>
                                    <td><?= $value['jenis_pekerjaan'] ?></td>
                                    <td><?= $value['batas_pendaftaran'] ?></td>
                                    <td><?= $value['nama_category'] ?></td>
                                    <td>
                                        <a class= "btn btn-primary" href="<?= base_url('job/' . $value['id_job']) ?>" role= "button">D</a>
                                            <?php if (in_array(session()->get('role'), ['owner', 'admin'])): ?>
                                                <a class= "btn btn-warning" href="<?= base_url('job/edit/' . $value['id_job']) ?>" role= "button">E</a>
                                                    <form action="<?= base_url('job/' . $value['id_job'] ) ?>" method="post">
                                                        <input type="hidden" name="_method" value = "DELETE">
                                                        <button type="submit" class="btn btn-danger"
                                                        role = "button" onclick="return confirm('Apakah anda yakin?')">H</button>
                                                    </form>
                                            <?php endif; ?> 
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

       