<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<main>
    <!-- Apply Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Apply</h1>
            <div class= "card mb-4">
                <div class ="card-body">
                    <div style="display: flex; justify-content: center; align-items: center; height: 20vh;">
                        <img src="<?= base_url('img/apply.jpg'); ?>" style="max-width: 10%; height: auto;">
                    </div>
                    <form action="<?= base_url('job/apply') ?>" method="post" enctype="multipart/form-data">  
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" id="namalengkap" name = "namalengkap" placeholder="Your Name">
                        </div>
                        <p></p>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" id="alamatemail" name = "alamatemail" placeholder="Your Email">
                        </div>
                        <p></p>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" id="programstudi" name = "programstudi" placeholder="Program Studi">
                        </div>
                        <p></p>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" id="pendidikan_terakhir" name = "pendidikan_terakhir" placeholder="Pendidikan Terakhir">
                        </div>
                        <p></p>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" id="portofolio" name = "portofolio" placeholder="Portfolio Website">
                        </div>
                        <p></p>
                        <div class="col-12 col-sm-6">
                            <div class="form-floating">
                                <label for="id_job"></label>
                                    <select type="text" class="form-control" id="id_job" name = "id_job">
                                        <?php foreach ($job as $value) : ?>
                                            <option value="<?= $value['id_job'] ?>">
                                                <?= $value['nama_job'] ?>, <?= $value['nama_perusahaan'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                        </div>
                        <p></p>
                        <input type="file" name="pdf">
                        <p></p>
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>            
        </div>
    <!-- Apply End -->
</main>

<?= $this->endSection() ?>