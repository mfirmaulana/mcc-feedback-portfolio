<!doctype html>
<!--
* This Application created by IT-MCC
* Dedicated for MCC's Digital Infrastructures
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>DASHBOARD KUESIONER SURVEI KEPUASAN MASYARAKAT KOTA MALANG</title>
    <!-- CSS files -->
    <link href="<?= base_url('assets/') ?>dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url('assets/') ?>dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
	  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist2/img/favicon.png">
    <link href="<?= base_url('assets/') ?>dist2/css/mcc-style.css" rel="stylesheet"/>
    <script src="<?= base_url('assets/') ?>dist2/jquery-3.7.1.min.js"></script>
    <link href="<?= base_url('assets/') ?>dist2/DataTables/datatables.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>dist2/DataTables/datatables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#dataKuesioner').DataTable({
          responsive: true,
          autoWidth: false,
          // layout: {
          //     topStart: {
          //         buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
          //     }
          // }
        });
        $('#dataPengaduan').DataTable({
          responsive: true,
          autoWidth: false
        });
      });
    </script>
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
  <body>
  <div class="page">
    <aside class="navbar navbar-vertical navbar-expand-lg">
      <div class="container-fluid">
        <div class="navbar-brand navbar-brand-autodark mcc-bg-putih">
          <a href="#"><img src="<?= base_url('assets/') ?>dist2/img/mcc-logo-blue.png" alt="Tabler" class="mcc-nav-img"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="sidebar-menu">
          <ul class="navbar-nav pt-lg-3">
              <li class="nav-item">
                  <a class="nav-link mcc-nav-btn" href="#" onclick="sectionChart()">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"></span>
                      <span class="nav-link-title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mcc-nav-btn" href="#" onclick="sectionResponden()">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"></span>
                      <span class="nav-link-title">Data Responden</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link mcc-nav-btn" href="#" onclick="sectionPengaduan()">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"></span>
                      <span class="nav-link-title">Data Pengaduan</span>
                  </a>
              </li>
          </ul>
        </div>
      </div>
    </aside>