<?= $this->extend('auth/template') ?>
<?= $this->section('content') ?>


<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

<form action="<?= base_url('register') ?>" method="post">

    <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" value="<?= old('username') ?>"><br>
    <p></p>
    
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>"><br>
    <p></p>
    
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password"><br>
    <p></p>
    
    <!-- Dropdown atau radio untuk memilih role -->
    <label for="role">Role</label>
    <select name="role">
        <option value="user" <?= old('role') == 'user' ? 'selected' : '' ?>>User</option>
        <option value="admin" <?= old('role') == 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="owner" <?= old('role') == 'owner' ? 'selected' : '' ?>>Owner</option>
    </select><br>
    <p></p>

    
    <button type="submit">Register</button>

    <p>Sudah Punya Akun ? <a href="<?= site_url('login') ?>">Login</a></p>
    
    <p></p>

</form>
<?= $this->endSection() ?>
