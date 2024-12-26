<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

        <!-- Create Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job</h1>
                <p class="mb-4">this is the place to send job vacancy data that is being carried out according to the specified date</p>
                <div class="row g-4">
                    <div class="col-12">
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://blog-cdn.kitalulus.com/blog/wp-content/uploads/2024/02/20100050/630e1506140f095328fdfe7c_pengertian-job-matching-adalah.jpg"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <form action="<?= base_url('job/create') ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" id="picture" name = "picture" >
                                            <label for="picture">Logo Perusahaan</label>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nama_job" 
                                            name = "nama_job" placeholder="Nama Job">
                                            <label for="nama_job">Nama Job</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="nama_perusahaan" class="form-control" id="nama_perusahaan" 
                                            name = "nama_perusahaan"  placeholder="Nama Perusahaan">
                                            <label for="nama_perusahaan">Nama Perusahaan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="syarat" 
                                            name = "syarat" placeholder="Syarat">
                                            <label for="syarat">Syarat</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="Gaji" 
                                            name = "Gaji" placeholder="Gaji">
                                            <label for="Gaji">Gaji</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="jenis_pekerjaan" 
                                            name = "jenis_pekerjaan" placeholder="Jenis Pekerjaan">
                                            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="batas_pendaftaran" 
                                            name = "batas_pendaftaran" placeholder="Batas Pendaftaran">
                                            <label for="batas_pendaftaran">Batas Pendaftaran</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <label for="id_category"></label>
                                                <select type="text" class="form-control" id="id_category" name = "id_category">
                                                    <?php foreach ($category as $value) : ?>
                                                        <option value="<?= $value['id_category'] ?>">
                                                            <?= $value['nama_category'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Create</button>
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
       