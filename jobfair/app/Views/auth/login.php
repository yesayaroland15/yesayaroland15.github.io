<?= $this->extend('auth/template') ?>
<?= $this->section('content') ?>

<form action="<?= base_url('login') ?>" method="post">
    
    <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>"><br>
    <p></p>

    <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password"><br>
    <p></p>
    <button type="submit">Login</button>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    
    <p>Belum punya akun? <a href="<?= site_url('register') ?>">Daftar di sini</a></p>

</form>
<?= $this->endSection() ?>

