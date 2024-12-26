<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <p></p>
  <header class="text-center p-3">
    <img class="img-fluid" src="<?= base_url('img/logo.jpg'); ?>" alt="Logo" style="max-width: 150px;">
  </header>
  <title>JobWinni</title>
  <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('<?= base_url('img/background.jpg') ?>'); /* Menambahkan gambar latar belakang */
      background-size: cover;  /* Menyesuaikan gambar dengan ukuran layar */
      background-position: center;  /* Menempatkan gambar di tengah */
      background-repeat: no-repeat;  /* Menghindari gambar berulang */
    }
  </style>
</head>
<body> 
    <?= $this->renderSection('content') ?>
</body>
</html>
