<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>ADMIN LOGIN SURVEI KEPUASAN MASYARAKAT KOTA MALANG</title>
    <!-- CSS files -->
    <link href="<?= base_url('assets/') ?>dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/demo.min.css?1684106062" rel="stylesheet"/>

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist2/img/favicon.png">
    <link href="<?= base_url('assets/') ?>dist2/css/mcc-style.css" rel="stylesheet"/>
    <script src="<?= base_url('assets/') ?>dist2/jquery-3.7.1.min.js"></script>

    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body class="d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="card card-md">
          <div class="card-header mcc-bg-card">
            <a href="#" class="navbar-brand"><img src="<?= base_url('assets/') ?>dist2/img/mcc-logo-putih.png" height="45" alt=""></a>
          </div>
          <div class="card-body">
            <h2 class="text-center">LOGIN ADMIN</h3>
            <?php echo $this->session->flashdata('response'); ?>
            <form method="post" action="<?php echo base_url('login/authLogin'); ?>" autocomplete="off" novalidate>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="email" class="form-control" name="username" placeholder="username" autocomplete="off">
                <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  name="password" placeholder="password"  autocomplete="off">
                <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
              </div>
              <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control"  name="konfirmasi_password" placeholder="konfirmasi password"  autocomplete="off">
                <?= form_error('konfirmasi_password','<small class="text-danger pl-3">','</small>'); ?>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn mcc-btn w-100">Masuk</button>
              </div>
            </form>
          </div>
          <div class="text-center card-footer page-pretitle">&copy; IT-TEAM Malang Creative Center.</div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>
  </body>
</html>