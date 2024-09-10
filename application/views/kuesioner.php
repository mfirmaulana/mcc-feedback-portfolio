<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, viewport-fit=cover"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>
            KUESIONER SURVEI KEPUASAN MASYARAKAT KOTA MALANG TAHUN 2024
		</title>
		<!-- CSS files -->
		<link href="<?= base_url('assets/') ?>dist/css/tabler.min.css?1684106062" rel="stylesheet" />
		<link href="<?= base_url('assets/') ?>dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
		<link href="<?= base_url('assets/') ?>dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
		<link href="<?= base_url('assets/') ?>dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
		<link href="<?= base_url('assets/') ?>dist/css/demo.min.css?1684106062" rel="stylesheet" />
		<link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist2/img/favicon.png">
		<link href="<?= base_url('assets/') ?>dist2/css/mcc-style.css" rel="stylesheet"/>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="<?= base_url('assets/') ?>dist2/jquery-3.7.1.min.js"></script>
		<style>
			@import url("https://rsms.me/inter/inter.css");
			:root {
				--tblr-font-sans-serif: "Inter Var", -apple-system, BlinkMacSystemFont,
					San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
			}
			body {
				font-feature-settings: "cv03", "cv04", "cv11";
			}
		</style>
	</head>
	<body>
		<div class="d-flex flex-column row">
			<!-- Page body -->
			<div class="page page-center">
				<div class="container-xl container-center col-lg-7 py-4">
					<div class="row row-cards">
						<div class="">
							<div class="card">
								<div class="card-header mcc-bg-card">
									<a href="." class="navbar-brand"><img src="<?= base_url('assets/') ?>dist2/img/mcc-logo-putih.png" height="65" alt=""></a>
								</div>
                                <form id="formKuesioner" method="POST" action="<?php echo base_url() . 'kuesioner/submit/' ?>">
								<div class="card-body">
									<br>
									<h1 style="text-align:center;">KUESIONER SURVEI KEPUASAN MASYARAKAT KOTA MALANG TAHUN 2024</h1>
                                    <br>
                                    <p class="text-muted" style="text-align:center;">
                                        Perangkat Daerah : Dinas Koperasi, Perindustrian dan Perdagangan<br> (<b>Malang Creative Center</b>).<br>
                                        
                                    </p>
									<hr>
                                    <?php echo $this->session->flashdata('response'); ?>
                                    <?php echo $this->session->flashdata('captcha'); ?>
                                    <ul class="steps steps-counter steps-vertical">
                                        <!--A.PROFIL RESPONDEN-->
                                        <li class="step-item" id="Stepa">
                                            <b>A. Data Diri Responden</b>
                                            <div class="step col-md-6 col-lg-12" id="step-1" >									
                                                <div class="card-body">
                                                    <div class="row row-card">
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Nama Depan</label>
                                                            <input type="text" class="form-control" id="namadepan" name="namadepan" value="<?= set_value('namadepan'); ?>" placeholder="Nama Depan" required>
                                                            <small id="cek_namadepan" class="text-danger"></small>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Nama Belakang</label>
                                                            <input type="text" class="form-control" id="namabelakang" name="namabelakang" value="<?= set_value('namabelakang'); ?>" placeholder="Nama Belakang" required>
                                                            <small id="cek_namabelakang" class="text-danger"></small>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">No Telepon / HP</label>
                                                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor Telepon / HP" value="<?= set_value('nohp'); ?>" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" required>
                                                            <small id="cek_nohp" class="text-danger"></small>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                                                            <small id="cek_email" class="text-danger"></small>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Usia</label>
                                                            <div class="input-group mb-2">
                                                            <input type="text" class="form-control" id="usia" name="usia" value="<?= set_value('usia'); ?>" placeholder="Usia" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" required>
                                                            <span class="input-group-text">Tahun</span>
                                                            </div>
                                                            <small id="cek_usia" class="text-danger"></small>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Frekuensi Kunjungan</label>
                                                            <div class="input-group mb-2">
                                                            <input type="text" class="form-control" id="frekkunjungan" name="frekkunjungan" value="<?= set_value('frekkunjungan'); ?>" placeholder="Frekuensi Kunjungan" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" required>
                                                            <span class="input-group-text">Tahun</span>
                                                            </div>
                                                            <small id="cek_frekkunjungan" class="text-danger"></small>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">Jenis Kelamin</div>
                                                        <div>
                                                        <label class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" id="jeniskelamin" name="jeniskelamin" value="Laki-laki">
                                                            <span class="form-check-label">Laki-laki</span>
                                                        </label>
                                                        <label class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" id="jeniskelamin" name="jeniskelamin" value="Perempuan">
                                                            <span class="form-check-label">Perempuan</span>
                                                        </label>
                                                        </div>
                                                        <small id="cek_jeniskelamin" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">Pendidikan</div>
                                                        <div>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pendidikan" name="pendidikan" value="SD">
                                                                <span class="form-check-label">SD</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pendidikan" name="pendidikan" value="SMP">
                                                                <span class="form-check-label">SMP</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pendidikan" name="pendidikan" value="SMA">
                                                                <span class="form-check-label">SMA</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pendidikan" name="pendidikan" value="Perguruan Tinggi">
                                                                <span class="form-check-label">Perguruan Tinggi</span>
                                                            </label>
                                                        </div>
                                                        <small id="cek_pendidikan" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">Pekerjaan</div>
                                                        <div>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pekerjaan" name="pekerjaan" value="PNS">
                                                                <span class="form-check-label">PNS</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pekerjaan" name="pekerjaan" value="Wirausaha">
                                                                <span class="form-check-label">Wirausaha</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pekerjaan" name="pekerjaan" value="Swasta">
                                                                <span class="form-check-label">Swasta</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pekerjaan" name="pekerjaan" value="Polri">
                                                                <span class="form-check-label">Polri</span>
                                                            </label>
                                                            <label class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="pekerjaan" name="pekerjaan" value="TNI">
                                                                <span class="form-check-label">TNI</span>
                                                            </label>
                                                        </div>
                                                        <small id="cek_pekerjaan" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--B.PENDAPAT RESPONDEN TENTANG PELAYANAN-->
                                        <li class="step-item" id="Stepa">
                                            <b>B. Pendapat Responden Tentang Pelayanan</b>
                                            <div class="step col-md-6 col-lg-12" id="step-2">									
                                                <div class="card-body">
                                                    <p class="text-muted">(*) Pilihan Jawaban : 1. Sangat Tidak Puas, 2. Tidak Puas, 3. Puas, 4. Sangat Puas.</p>
                                                    <p><b>Persyaratan Pelayanan</b></p>
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Keberadaan informasi mengenai persyaratan pelayanan Pelayanan (Booking Ruangan, Kunjungan, Building Tour) di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="persoal1" id="persoal1-1" value="1" autocomplete="off">
                                                            <label for="persoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="persoal1" id="persoal1-2" value="2" autocomplete="off">
                                                            <label for="persoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="persoal1" id="persoal1-3" value="3" autocomplete="off">
                                                            <label for="persoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="persoal1" id="persoal1-4" value="4" autocomplete="off">
                                                            <label for="persoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_persoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kemudahan mendapatkan informasi mengenai persyaratan pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="persoal2" id="persoal2-1" value="1" autocomplete="off">
                                                            <label for="persoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="persoal2" id="persoal2-2" value="2" autocomplete="off">
                                                            <label for="persoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="persoal2" id="persoal2-3" value="3" autocomplete="off">
                                                            <label for="persoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="persoal2" id="persoal2-4" value="4" autocomplete="off">
                                                            <label for="persoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_persoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Kejelasan informasi mengenai persyaratan pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="persoal3" id="persoal3-1" value="1" autocomplete="off">
                                                            <label for="persoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="persoal3" id="persoal3-2" value="2" autocomplete="off">
                                                            <label for="persoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="persoal3" id="persoal3-3" value="3" autocomplete="off">
                                                            <label for="persoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="persoal3" id="persoal3-4" value="4" autocomplete="off">
                                                            <label for="persoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_persoal3" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">4. Kemudahan memenuhi persyaratan pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="persoal4" id="persoal4-1" value="1" autocomplete="off">
                                                            <label for="persoal4-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="persoal4" id="persoal4-2" value="2" autocomplete="off">
                                                            <label for="persoal4-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="persoal4" id="persoal4-3" value="3" autocomplete="off">
                                                            <label for="persoal4-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="persoal4" id="persoal4-4" value="4" autocomplete="off">
                                                            <label for="persoal4-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_persoal4" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Sistem, Mekanisme, dan Prosedur</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Keberadaan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="sissoal1" id="sissoal1-1" value="1" autocomplete="off">
                                                            <label for="sissoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="sissoal1" id="sissoal1-2" value="2" autocomplete="off">
                                                            <label for="sissoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="sissoal1" id="sissoal1-3" value="3" autocomplete="off">
                                                            <label for="sissoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="sissoal1" id="sissoal1-4" value="4" autocomplete="off">
                                                            <label for="sissoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_sissoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kemudahan mendapatkan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="sissoal2" id="sissoal2-1" value="1" autocomplete="off">
                                                            <label for="sissoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="sissoal2" id="sissoal2-2" value="2" autocomplete="off">
                                                            <label for="sissoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="sissoal2" id="sissoal2-3" value="3" autocomplete="off">
                                                            <label for="sissoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="sissoal2" id="sissoal2-4" value="4" autocomplete="off">
                                                            <label for="sissoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_sissoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Kejelasan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="sissoal3" id="sissoal3-1" value="1" autocomplete="off">
                                                            <label for="sissoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="sissoal3" id="sissoal3-2" value="2" autocomplete="off">
                                                            <label for="sissoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="sissoal3" id="sissoal3-3" value="3" autocomplete="off">
                                                            <label for="sissoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="sissoal3" id="sissoal3-4" value="4" autocomplete="off">
                                                            <label for="sissoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_sissoal3" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">4. Kemudahan menjalankan sistem, mekanisme dan prosedur pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="sissoal4" id="sissoal4-1" value="1" autocomplete="off">
                                                            <label for="sissoal4-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="sissoal4" id="sissoal4-2" value="2" autocomplete="off">
                                                            <label for="sissoal4-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="sissoal4" id="sissoal4-3" value="3" autocomplete="off">
                                                            <label for="sissoal4-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="sissoal4" id="sissoal4-4" value="4" autocomplete="off">
                                                            <label for="sissoal4-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_sissoal4" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Waktu Pelayanan</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Ketepatan waktu berlangsungnya pelayanan di MCC (jam buka/ tutup layanan)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="waksoal1" id="waksoal1-1" value="1" autocomplete="off">
                                                            <label for="waksoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="waksoal1" id="waksoal1-2" value="2" autocomplete="off">
                                                            <label for="waksoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="waksoal1" id="waksoal1-3" value="3" autocomplete="off">
                                                            <label for="waksoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="waksoal1" id="waksoal1-4" value="4" autocomplete="off">
                                                            <label for="waksoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_waksoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kejelasan informasi mengenai waktu penyelesaian layanan di MCC (target penyelesaian layanan)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="waksoal2" id="waksoal2-1" value="1" autocomplete="off">
                                                            <label for="waksoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="waksoal2" id="waksoal2-2" value="2" autocomplete="off">
                                                            <label for="waksoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="waksoal2" id="waksoal2-3" value="3" autocomplete="off">
                                                            <label for="waksoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="waksoal2" id="waksoal2-4" value="4" autocomplete="off">
                                                            <label for="waksoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_waksoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Ketepatan/ kesesuaian waktu penyelesaian layanan sesuai dengan yang dijanjikan (atau sesuai dengan SOP/ prosedur yang ditetapkan)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="waksoal3" id="waksoal3-1" value="1" autocomplete="off">
                                                            <label for="waksoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="waksoal3" id="waksoal3-2" value="2" autocomplete="off">
                                                            <label for="waksoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="waksoal3" id="waksoal3-3" value="3" autocomplete="off">
                                                            <label for="waksoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="waksoal3" id="waksoal3-4" value="4" autocomplete="off">
                                                            <label for="waksoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_waksoal3" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Produk / Spesifikasi Jenis Pelayanan</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Ketepatan hasil pelayanan di MCC sesuai dengan ketentuan yang berlaku</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="prodsoal1" id="prodsoal1-1" value="1" autocomplete="off">
                                                            <label for="prodsoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="prodsoal1" id="prodsoal1-2" value="2" autocomplete="off">
                                                            <label for="prodsoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="prodsoal1" id="prodsoal1-3" value="3" autocomplete="off">
                                                            <label for="prodsoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="prodsoal1" id="prodsoal1-4" value="4" autocomplete="off">
                                                            <label for="prodsoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_prodsoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kualitas hasil layanan di MCC yang baik (tidak ada kesalahan, misalnya : ruangan yang disediakan sesuai, kelengkapan fasilitas, dll)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="prodsoal2" id="prodsoal2-1" value="1" autocomplete="off">
                                                            <label for="prodsoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="prodsoal2" id="prodsoal2-2" value="2" autocomplete="off">
                                                            <label for="prodsoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="prodsoal2" id="prodsoal2-3" value="3" autocomplete="off">
                                                            <label for="prodsoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="prodsoal2" id="prodsoal2-4" value="4" autocomplete="off">
                                                            <label for="prodsoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_prodsoal2" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Kompetensi Pelaksana (ditanyakan jika pelayanan berlangsung tatap muka, bukan online)</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Kompetensi (keterampilan dan pengalaman) petugas dalam melaksanakan tugasnya</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="komsoal1" id="komsoal1-1" value="1" autocomplete="off">
                                                            <label for="komsoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="komsoal1" id="komsoal1-2" value="2" autocomplete="off">
                                                            <label for="komsoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="komsoal1" id="komsoal1-3" value="3" autocomplete="off">
                                                            <label for="komsoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="komsoal1" id="komsoal1-4" value="4" autocomplete="off">
                                                            <label for="komsoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_komsoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Pengetahuan dan pemahaman petugas terhadap tugas dan tanggung jawabnya</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="komsoal2" id="komsoal2-1" value="1" autocomplete="off">
                                                            <label for="komsoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="komsoal2" id="komsoal2-2" value="2" autocomplete="off">
                                                            <label for="komsoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="komsoal2" id="komsoal2-3" value="3" autocomplete="off">
                                                            <label for="komsoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="komsoal2" id="komsoal2-4" value="4" autocomplete="off">
                                                            <label for="komsoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_komsoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Kemampuan petugas dalam memberikan solusi atas kesulitan masyarakat/ pengunjung</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="komsoal3" id="komsoal3-1" value="1" autocomplete="off">
                                                            <label for="komsoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="komsoal3" id="komsoal3-2" value="2" autocomplete="off">
                                                            <label for="komsoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="komsoal3" id="komsoal3-3" value="3" autocomplete="off">
                                                            <label for="komsoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="komsoal3" id="komsoal3-4" value="4" autocomplete="off">
                                                            <label for="komsoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_komsoal3" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Penanganan Pengaduan, Saran dan Masukan</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Kelayakan dan kenyamanan ruang pelayanan di MCC (seperti : kebersihan, kelayakan kursi ruang tunggu, pendingin ruangan, dll)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="pensoal1" id="pensoal1-1" value="1" autocomplete="off">
                                                            <label for="pensoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="pensoal1" id="pensoal1-2" value="2" autocomplete="off">
                                                            <label for="pensoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="pensoal1" id="pensoal1-3" value="3" autocomplete="off">
                                                            <label for="pensoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="pensoal1" id="pensoal1-4" value="4" autocomplete="off">
                                                            <label for="pensoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_pensoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kelengkapan (jenis dan jumlah) sarana prasarana penunjang pelayanan di MCC (seperti : computer, printer, dll)</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="pensoal2" id="pensoal2-1" value="1" autocomplete="off">
                                                            <label for="pensoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="pensoal2" id="pensoal2-2" value="2" autocomplete="off">
                                                            <label for="pensoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="pensoal2" id="pensoal2-3" value="3" autocomplete="off">
                                                            <label for="pensoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="pensoal2" id="pensoal2-4" value="4" autocomplete="off">
                                                            <label for="pensoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_pensoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Pelaksanaan pemanfaatan sistem IT/Teknologi Informasi untuk proses pelayanan di MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="pensoal3" id="pensoal3-1" value="1" autocomplete="off">
                                                            <label for="pensoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="pensoal3" id="pensoal3-2" value="2" autocomplete="off">
                                                            <label for="pensoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="pensoal3" id="pensoal3-3" value="3" autocomplete="off">
                                                            <label for="pensoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="pensoal3" id="pensoal3-4" value="4" autocomplete="off">
                                                            <label for="pensoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_pensoal3" class="text-danger"></small>
                                                    </div>
                                                    <hr>
                                                    <p><b>Penanganan Pengaduan, Saran dan Masukan</b></p>               
                                                    <div class="mb-3">
                                                        <div class="form-label">1. Kemudahan mengakses (kecepatan dan ketepatan akses) website MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="penasoal1" id="penasoal1-1" value="1" autocomplete="off">
                                                            <label for="penasoal1-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="penasoal1" id="penasoal1-2" value="2" autocomplete="off">
                                                            <label for="penasoal1-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="penasoal1" id="penasoal1-3" value="3" autocomplete="off">
                                                            <label for="penasoal1-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="penasoal1" id="penasoal1-4" value="4" autocomplete="off">
                                                            <label for="penasoal1-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_penasoal1" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">2. Kemudahan memahami dan memasukkan data pada system pelayanan pada website MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="penasoal2" id="penasoal2-1" value="1" autocomplete="off">
                                                            <label for="penasoal2-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="penasoal2" id="penasoal2-2" value="2" autocomplete="off">
                                                            <label for="penasoal2-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="penasoal2" id="penasoal2-3" value="3" autocomplete="off">
                                                            <label for="penasoal2-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="penasoal2" id="penasoal2-4" value="4" autocomplete="off">
                                                            <label for="penasoal2-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_penasoal2" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">3. Petugas pelayanan responsif pada saat melakukan pelayanan secara online</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="penasoal3" id="penasoal3-1" value="1" autocomplete="off">
                                                            <label for="penasoal3-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="penasoal3" id="penasoal3-2" value="2" autocomplete="off">
                                                            <label for="penasoal3-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="penasoal3" id="penasoal3-3" value="3" autocomplete="off">
                                                            <label for="penasoal3-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="penasoal3" id="penasoal3-4" value="4" autocomplete="off">
                                                            <label for="penasoal3-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_penasoal3" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-label">4. Kelengkapan informasi yang disediakan pada website MCC</div>
                                                        <div>  
                                                            <input type="radio" class="btn-check" name="penasoal4" id="penasoal4-1" value="1" autocomplete="off">
                                                            <label for="penasoal4-1" type="button" class="btn">1</label>
                                                            <input type="radio" class="btn-check" name="penasoal4" id="penasoal4-2" value="2" autocomplete="off">
                                                            <label for="penasoal4-2" type="button" class="btn">2</label>
                                                            <input type="radio" class="btn-check" name="penasoal4" id="penasoal4-3" value="3" autocomplete="off">
                                                            <label for="penasoal4-3" type="button" class="btn">3</label>
                                                            <input type="radio" class="btn-check" name="penasoal4" id="penasoal4-4" value="4" autocomplete="off">
                                                            <label for="penasoal4-4" type="button" class="btn">4</label>
                                                        </div>
                                                        <small id="cek_penasoal4" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--C. USULAN KEGIATAN-->
                                        <li class="step-item" id="Stepa">
                                            <b>C. Kegiatan Yang Diusulkan Untuk Diadakan di MCC</b>
                                            <div class="step col-md-6 col-lg-12" id="step-3">									
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <div class="form-label">Kegiatan Kolaborasi Melibatkan</div>
                                                        <div>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Sosial">
                                                            <span class="form-check-label">Sosial</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Pendidikan">
                                                            <span class="form-check-label">Pendidikan</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Ekonomi">
                                                            <span class="form-check-label">Ekonomi</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Seni pertunjukan"> 
                                                            <span class="form-check-label">Seni Pertunjukan</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="OPD"> 
                                                            <span class="form-check-label">Organisasi Perangkat Daerah (ODP)</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Sekolah/perguruan tinggi"> 
                                                            <span class="form-check-label">Sekolah / Perguruan Tinggi</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="kegiatan" value="Komunitas/organisasi kemasyarakatan"> 
                                                            <span class="form-check-label">Komunitas / Organisasi Kemasyarakatan</span>
                                                        </label>
                                                        </div>
                                                        <small id="cek_kegiatan" class="text-danger"></small>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Sebutkan Kegiatannya</label>
                                                        <textarea class="form-control" name="isikegiatan" rows="6" placeholder="Sebutkan kegiatan yang diinginkan"></textarea>
                                                        <small id="cek_isikegiatan" class="text-danger"></small>
                                                    </div>
                                                    <p><b>Keluhan dan Saran</b></p>
                                                    <div class="mb-3">
                                                        <label class="form-label">Keluhan</label>
                                                        <textarea class="form-control" name="keluhan" rows="6" placeholder="Keluhan"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Saran</label>
                                                        <textarea class="form-control" name="saran" rows="6" placeholder="Saran"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--D. USER EVENT-->
                                        <li class="step-item" id="Stepa">
                                            <b>D. Diisi Untuk User Yang Telah Mengadakan Event di MCC</b>
                                            <div class="step col-md-6 col-lg-12" id="step-4">									
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Institusi / Perusahaan / Komunitas</label>
                                                        <input type="text" class="form-control" name="namainstitusi" value="<?= set_value('namainstitusi'); ?>" placeholder="Nama Institusi / Perusahaan / Komunitas">
                                                    </div>
                                                    <div class="row row-card">
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">No Telepon PIC</label>
                                                            <input type="text" class="form-control" name="picnotelp" value="<?= set_value('picnotelp'); ?>" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" placeholder="No Telepon PIC">
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Jumlah Peserta / Pelaku EKRAF</label>
                                                            <input type="text" class="form-control" name="jumlahpeserta" value="<?= set_value('jumlahpeserta'); ?>" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" placeholder="Jumlah Peserta">
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Jumlah Pengunjung Saat Mengadakan Event</label>
                                                            <input type="text" class="form-control" name="jumlahpengunjung" value="<?= set_value('jumlahpengunjung'); ?>" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" placeholder="Jumlah Pengunjung">
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Jumlah Transaksi Saat Mengadakan Event Bila Ada</label>
                                                            <div class="input-group mb-2">
                                                            <span class="input-group-text">Rp.</span>
                                                            <input type="text" class="form-control" name="jumlahtransaksi" value="<?= set_value('jumlahtransaksi'); ?>" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" placeholder="Jumlah Transaksi">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-lg-6">
                                                            <label class="form-label">Centang jika anda bukanlah robot.</label>
                                                            <div name="captcha" class="g-recaptcha" data-sitekey="rahasia"></div>
                                                            <?php echo $this->session->flashdata('captcha'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
								</div>

								<div class="card-footer align-items-right">
                                    <a href="#" class="btn btn-primary" id="prevBtn" onclick="prevBtn()">Kembali</a>
                                    <a href="#" class="btn btn-primary" id="nextBtn" onclick="nextBtn()">Selanjutnya</a>
                                    <button type="submit" class="btn mcc-btn" id="finishBtn" onclick="finish()">Kirim</button>
								</div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <br><br>
            <footer class="mcc-footer">
                <div class="container">
                    <div class="row text-center align-items-center">
                    <div class="py-2 page-pretitle" style="color:#ffffff;">
                        &copy; Copyright 2024 Malang Creative Center By IT-Team
                    </div>
                    </div>
                </div>
            </footer>
			
		</div>
		<!-- Libs JS -->
		<!-- Tabler Core -->
		<script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
		<script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>

		<script type="text/javascript">
			const allSteps = document.querySelectorAll('.step')
			const totalSteps = allSteps.length
			const prevButton = document.querySelector('#prevBtn')
			const nextButton = document.querySelector('#nextBtn')
			const finishButton = document.querySelector('#finishBtn')
			const stepStatus = document.querySelector('.step-item')

			// Hide everything except for #step-1
			document
			.querySelectorAll(".step:not(#step-1)")
			.forEach(step => (step.style.display = "none"))

			// Hide the prev button
			prevButton.style.display = 'none'

			// Hide the finish button
			finishButton.style.display = 'none'

			let currentStep = 1

			function nextBtn() {
                validasiForm()
			// currentStep++;
			// refreshDisplay()
			}

			function prevBtn() {
			    currentStep--;
			    refreshDisplay()
			}

			function refreshDisplay() {
			// hide every step
			allSteps.forEach(step => (step.style.display = "none"))

			// show only the currentStep
			document.querySelector(`#step-${currentStep}`).style.display = 'block'

			// hide or show the prevButton
			if (currentStep === 1) {
				prevButton.style.display = 'none'
			} else {
				prevButton.style.display = 'inline-block'
			}

			// hide or show nextButton & finish button
			if (currentStep === totalSteps) {
				nextButton.style.display = 'none'
				finishButton.style.display = 'inline-block'
			} else {
				nextButton.style.display = 'inline-block'
				finishButton.style.display = 'none'
			}
			}

			function finish() {
			    console.log('you are finished')
			}
		</script>
        <script type="text/javascript">
            function validasiForm() {
                let namadepan = document.forms["formKuesioner"]["namadepan"].value;
                let namabelakang = document.forms["formKuesioner"]["namabelakang"].value;
                let nohp = document.forms["formKuesioner"]["nohp"].value;
                let email = document.forms["formKuesioner"]["email"].value;
                let usia = document.forms["formKuesioner"]["usia"].value;
                let frekkunjungan = document.forms["formKuesioner"]["frekkunjungan"].value;
                let jeniskelamin = document.forms["formKuesioner"]["jeniskelamin"].value;
                let pendidikan = document.forms["formKuesioner"]["pendidikan"].value;
                let pekerjaan = document.forms["formKuesioner"]["pekerjaan"].value;

                let persoal1 = document.forms["formKuesioner"]["persoal1"].value;
                let persoal2 = document.forms["formKuesioner"]["persoal2"].value;
                let persoal3 = document.forms["formKuesioner"]["persoal3"].value;
                let persoal4 = document.forms["formKuesioner"]["persoal4"].value;
                let sissoal1 = document.forms["formKuesioner"]["sissoal1"].value;
                let sissoal2 = document.forms["formKuesioner"]["sissoal2"].value;
                let sissoal3 = document.forms["formKuesioner"]["sissoal3"].value;
                let sissoal4 = document.forms["formKuesioner"]["sissoal4"].value;
                let waksoal1 = document.forms["formKuesioner"]["waksoal1"].value;
                let waksoal2 = document.forms["formKuesioner"]["waksoal2"].value;
                let waksoal3 = document.forms["formKuesioner"]["waksoal3"].value;
                let prodsoal1 = document.forms["formKuesioner"]["prodsoal1"].value;
                let prodsoal2 = document.forms["formKuesioner"]["prodsoal2"].value;
                let komsoal1 = document.forms["formKuesioner"]["komsoal1"].value;
                let komsoal2 = document.forms["formKuesioner"]["komsoal2"].value;
                let komsoal3 = document.forms["formKuesioner"]["komsoal3"].value;
                let pensoal1 = document.forms["formKuesioner"]["pensoal1"].value;
                let pensoal2 = document.forms["formKuesioner"]["pensoal2"].value;
                let pensoal3 = document.forms["formKuesioner"]["pensoal3"].value;
                let penasoal1 = document.forms["formKuesioner"]["penasoal1"].value;
                let penasoal2 = document.forms["formKuesioner"]["penasoal2"].value;
                let penasoal3 = document.forms["formKuesioner"]["penasoal3"].value;
                let penasoal4 = document.forms["formKuesioner"]["penasoal4"].value;

                let kegiatan = document.forms["formKuesioner"]["kegiatan"].value;
                let isikegiatan = document.forms["formKuesioner"]["isikegiatan"].value;
                let keluhan = document.forms["formKuesioner"]["keluhan"].value;
                let saran = document.forms["formKuesioner"]["saran"].value;

                //const dataForm1 = [namadepan, namabelakang, nohp, email, usia, frekkunjungan, jeniskelamin, pendidikan, pekerjaan];
                
                if(currentStep == 1){console.log(currentStep);
                    if (namadepan == "") {
                        document.getElementById("cek_namadepan").innerHTML = "Nama depan tidak boleh kosong.";
                        document.getElementById("namadepan").focus();
                        return false;
                    } else if (namabelakang == "") {
                        document.getElementById("cek_namabelakang").innerHTML = "Nama belakang tidak boleh kosong.";
                        document.getElementById("namabelakang").focus();
                        return false;
                    } else if (nohp == "") {
                        document.getElementById("cek_nohp").innerHTML = "No Telepon / HP tidak boleh kosong.";
                        document.getElementById("nohp").focus();
                        return false;
                    } else if (email == "") {
                        document.getElementById("cek_email").innerHTML = "Email tidak boleh kosong.";
                        document.getElementById("email").focus();
                        return false;
                    } else if (usia == "") {
                        document.getElementById("cek_usia").innerHTML = "Usia tidak boleh kosong.";
                        document.getElementById("usia").focus();
                        return false;
                    } else if (frekkunjungan == "") {
                        document.getElementById("cek_frekkunjungan").innerHTML = "Frekuensi Kunjungan tidak boleh kosong.";
                        document.getElementById("frekkunjungan").focus();
                        return false;
                    } else if (jeniskelamin == "") {
                        document.getElementById("cek_jeniskelamin").innerHTML = "Jenis Kelamin tidak boleh kosong.";
                        document.getElementById("jeniskelamin").focus();
                        return false;
                    } else if (pendidikan == "") {
                        document.getElementById("cek_pendidikan").innerHTML = "Pendidikan tidak boleh kosong.";
                        document.getElementById("pendidikan").focus();
                        return false;
                    } else if (pekerjaan == "") {
                        document.getElementById("cek_pekerjaan").innerHTML = "Pekerjaan tidak boleh kosong.";
                        document.getElementById("pekerjaan").focus();
                        return false;}
                    else{
                        currentStep++;
                        refreshDisplay()
                    }
                }
                else if(currentStep == 2){console.log(currentStep);
                    //currentStep++; refreshDisplay();
                    if (persoal1 == "") {document.getElementById("cek_persoal1").innerHTML = "Jawaban nomor 1 Persyaratan Pelayanan tidak boleh kosong."; document.getElementById("persoal1").focus(); return false;}
                    else if(persoal2 == ""){document.getElementById("cek_persoal2").innerHTML = "Jawaban nomor 2 Persyaratan Pelayanan tidak boleh kosong."; document.getElementById("persoal2").focus(); return false;}
                    else if(persoal3 == ""){document.getElementById("cek_persoal3").innerHTML = "Jawaban nomor 3 Persyaratan Pelayanan tidak boleh kosong."; document.getElementById("persoal3").focus(); return false;}
                    else if(persoal4 == ""){document.getElementById("cek_persoal4").innerHTML = "Jawaban nomor 4 Persyaratan Pelayanan tidak boleh kosong."; document.getElementById("persoal4").focus(); return false;}
                    else if(sissoal1 == ""){document.getElementById("cek_sissoal1").innerHTML = "Jawaban nomor 1 Sistem, Mekanisme, dan Prosedur tidak boleh kosong."; document.getElementById("sissoal1").focus(); return false;}
                    else if(sissoal2 == ""){document.getElementById("cek_sissoal2").innerHTML = "Jawaban nomor 2 Sistem, Mekanisme, dan Prosedur tidak boleh kosong."; document.getElementById("sissoal2").focus(); return false;}
                    else if(sissoal3 == ""){document.getElementById("cek_sissoal3").innerHTML = "Jawaban nomor 3 Sistem, Mekanisme, dan Prosedur tidak boleh kosong."; document.getElementById("sissoal3").focus(); return false;}
                    else if(sissoal4 == ""){document.getElementById("cek_sissoal4").innerHTML = "Jawaban nomor 4 Sistem, Mekanisme, dan Prosedur tidak boleh kosong."; document.getElementById("sissoal4").focus(); return false;}
                    else if(waksoal1 == ""){document.getElementById("cek_waksoal1").innerHTML = "Jawaban nomor 1 Waktu Pelayanan tidak boleh kosong."; document.getElementById("waksoal1").focus(); return false;}
                    else if(waksoal2 == ""){document.getElementById("cek_waksoal2").innerHTML = "Jawaban nomor 2 Waktu Pelayanan tidak boleh kosong."; document.getElementById("waksoal2").focus(); return false;}
                    else if(waksoal3 == ""){document.getElementById("cek_waksoal3").innerHTML = "Jawaban nomor 3 Waktu Pelayanan tidak boleh kosong."; document.getElementById("waksoal3").focus(); return false;}
                    else if(prodsoal1 == ""){document.getElementById("cek_prodsoal1").innerHTML = "Jawaban nomor 1 Produk / Spesifikasi Jenis Pelayanan tidak boleh kosong."; document.getElementById("prodsoal1").focus(); return false;}
                    else if(prodsoal2 == ""){document.getElementById("cek_prodsoal2").innerHTML = "Jawaban nomor 2 Produk / Spesifikasi Jenis Pelayanan tidak boleh kosong."; document.getElementById("prodsoal2").focus(); return false;}
                    else if(komsoal1 == ""){document.getElementById("cek_komsoal1").innerHTML = "Jawaban nomor 1 Kompetensi Pelaksana tidak boleh kosong."; document.getElementById("komsoal1").focus(); return false;}
                    else if(komsoal2 == ""){document.getElementById("cek_komsoal2").innerHTML = "Jawaban nomor 2 Kompetensi Pelaksana tidak boleh kosong."; document.getElementById("komsoal2").focus(); return false;}
                    else if(komsoal3 == ""){document.getElementById("cek_komsoal3").innerHTML = "Jawaban nomor 3 Kompetensi Pelaksana tidak boleh kosong."; document.getElementById("komsoal3").focus(); return false;}
                    else if(pensoal1 == ""){document.getElementById("cek_pensoal1").innerHTML = "Jawaban nomor 1 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("pensoal1").focus(); return false;}
                    else if(pensoal2 == ""){document.getElementById("cek_pensoal2").innerHTML = "Jawaban nomor 2 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("pensoal2").focus(); return false;}
                    else if(pensoal3 == ""){document.getElementById("cek_pensoal3").innerHTML = "Jawaban nomor 3 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("pensoal3").focus(); return false;}
                    else if(penasoal1 == ""){document.getElementById("cek_penasoal1").innerHTML = "Jawaban nomor 1 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("penasoal1").focus(); return false;}
                    else if(penasoal2 == ""){document.getElementById("cek_penasoal2").innerHTML = "Jawaban nomor 2 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("penasoal2").focus(); return false;}
                    else if(penasoal3 == ""){document.getElementById("cek_penasoal3").innerHTML = "Jawaban nomor 3 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("penasoal3").focus(); return false;}
                    else if(penasoal4 == ""){document.getElementById("cek_penasoal4").innerHTML = "Jawaban nomor 4 Penanganan Pengaduan, Saran dan Masukan tidak boleh kosong."; document.getElementById("penasoal4").focus(); return false;}
                    else{
                        currentStep++;
                        refreshDisplay()
                    }
                }
                else if(currentStep == 3){console.log(currentStep);
                    if (kegiatan == "") {document.getElementById("cek_kegiatan").innerHTML = "Kegiatan Yang Diusulkan Untuk Diadakan di MCC tidak boleh kosong."; document.getElementById("kegiatan").focus(); return false;}
                    else if(isikegiatan == ""){document.getElementById("cek_isikegiatan").innerHTML = "Sebutkan Kegiatan Yang Diusulkan Untuk Diadakan di MCC tidak boleh kosong."; document.getElementById("isikegiatan").focus(); return false;}
                    else{
                        currentStep++;
                        refreshDisplay()
                    }
                }else{
                    alert("last");
                }
                
            }
        </script>

	</body>
</html>
