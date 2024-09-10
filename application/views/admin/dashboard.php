        <div class="page-wrapper">	
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                        <!-- Page pre-title -->
                            <div class="page-pretitle">DASHBOARD</div>
                            <h4 class="page-title">SURVEI KEPUASAN MASYARAKAT KOTA MALANG</h4>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">    
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                    <span><img src="<?= base_url('assets/') ?>dist2/img/favicon.png" alt="Tabler" class="avatar"></span>
                                    <div class="d-none d-xl-block ps-2">
                                    <div>Administrator</div>
                                    <div class="mt-1 small text-muted"><?php echo $detail_admin->nama ?></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a href="<?php echo base_url('Login/logout'); ?>" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
						<div class="col-sm-6 col-lg-6">
							<div class="card mcc-bg-card">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="h5"><b>TOTAL RESPONDEN</b></div><br>
									</div>
									<div class="mcc-card-number"><?php echo $total_responden; ?></div>
									<div class="d-flex align-items-center">
										<a href="https://mcc.or.id/feedback/" target="_blank" style="color:#ffffff;">https://mcc.or.id/feedback/</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="card mcc-bg-card">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div class="h5"><b>TOTAL PENGADUAN</b></div><br>
									</div>
									<div class="mcc-card-number"><?php echo $total_pengaduan; ?></div>
									<div class="d-flex align-items-center">
										<a href="https://mcc.or.id/pengaduan/" target="_blank" style="color:#ffffff;">https://mcc.or.id/pengaduan/</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<!-- TABEL GRAFIK -->
					<div class="card" id="card-chart">
						<div class="row row-deck row-cards">
								<div class="col-lg-3">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Usia</h3>
										<div id="chart-usia"></div>
									</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Pendidikan</h3>
										<div id="chart-pendidikan"></div>
									</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Pekerjaan</h3>
										<div id="chart-pekerjaan"></div>
									</div>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Jenis Kelamin</h3>
										<div id="chart-jeniskelamin"></div>
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Persyaratan Pelayanan</h3>
										<div id="chart-persyaratanpelayanan"></div>
										<div>
										<br> 
											1. Keberadaan informasi mengenai persyaratan pelayanan Pelayanan (Booking Ruangan, Kunjungan, Building Tour) di MCC.</br>
											2. Kemudahan mendapatkan informasi mengenai persyaratan pelayanan di MCC.</br>
											3. Kejelasan informasi mengenai persyaratan pelayanan di MCC.</br>
											4. Kemudahan memenuhi persyaratan pelayanan di MCC.</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Sistem, Mekanisme, dan Prosedur</h3>
										<div id="chart-sistem-mekanisme-prosedur"></div>
										<div>
										<br> 
											1. Keberadaan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC.</br>
											2. Kemudahan mendapatkan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC.</br>
											3. Kejelasan informasi mengenai sistem, mekanisme dan prosedur pelayanan di MCC.</br>
											4. Kemudahan menjalankan sistem, mekanisme dan prosedur pelayanan di MCC.</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Waktu Pelayanan</h3>
										<div id="chart-waktupelayanan"></div>
										<div>
										<br> 
											1. Ketepatan waktu berlangsungnya pelayanan di MCC (jam buka/ tutup layanan).</br>
											2. Kejelasan informasi mengenai waktu penyelesaian layanan di MCC (target penyelesaian layanan).</br>
											3. Ketepatan/ kesesuaian waktu penyelesaian layanan sesuai dengan yang dijanjikan (atau sesuai dengan SOP/ prosedur yang ditetapkan).</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Produk / Spesifikasi Jenis Pelayanan</h3>
										<div id="chart-produkjenispelayanan"></div>
										<div>
										<br> 
											1. Ketepatan hasil pelayanan di MCC sesuai dengan ketentuan yang berlaku.</br>
											2. Kualitas hasil layanan di MCC yang baik (tidak ada kesalahan, misalnya : ruangan yang disediakan sesuai, kelengkapan fasilitas, dll).</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Kompetensi Pelaksana (ditanyakan jika pelayanan berlangsung tatap muka, bukan online)</h3>
										<div id="chart-kompetensipelaksana"></div>
										<div>
										<br> 
											1. Kompetensi (keterampilan dan pengalaman) petugas dalam melaksanakan tugasnya.</br>
											2. Pengetahuan dan pemahaman petugas terhadap tugas dan tanggung jawabnya.</br>
											3. Kemampuan petugas dalam memberikan solusi atas kesulitan masyarakat/ pengunjung.</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Penanganan Pengaduan, Saran dan Masukan</h3>
										<div id="chart-penangananmasukan1"></div>
										<div>
										<br> 
											1. Kelayakan dan kenyamanan ruang pelayanan di MCC (seperti : kebersihan, kelayakan kursi ruang tunggu, pendingin ruangan, dll).</br>
											2. Kelengkapan (jenis dan jumlah) sarana prasarana penunjang pelayanan di MCC (seperti : computer, printer, dll).</br>
											3. Pelaksanaan pemanfaatan sistem IT/Teknologi Informasi untuk proses pelayanan di MCC.</br>
										</p>
										</div>
									</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
									<div class="card-body">
										<h3 class="card-title">Penanganan Pengaduan, Saran dan Masukan</h3>
										<div id="chart-penangananmasukan2"></div>
										<div>
										<br> 
											1. Kemudahan mengakses (kecepatan dan ketepatan akses) website MCC.</br>
											2. Kemudahan memahami dan memasukkan data pada system pelayanan pada website MCC.</br>
											3. Petugas pelayanan responsif pada saat melakukan pelayanan secara online.</br>
											4. Kelengkapan informasi yang disediakan pada website MCC.</br>
										</p>
										</div>
									</div>
									</div>
								</div>
						</div>
					</div>
					<br>
					<!-- TABEL KUESIONER -->
					<div class="col-lg-12">
						<div class="card" id="tabelKuesioner">
							<div class="card-header mcc-bg-table">
								<div class="page-pretitle" style="color:white;">TABEL DATA KUESIONER</div>
								<div class="col-auto ms-auto d-print-none"><a href="<?php echo base_url(); ?>dashboard/export_excel" class="btn mcc-btn align-items-right"><img src="<?= base_url('assets/') ?>dist2/img/icon-excel.png" width="20px">&nbsp; Download ke Excel</a></div>
							</div>
							<div class="card-body table-responsive">
								<table id="dataKuesioner" class="table display row-border compact table-hover">
									<thead>
										<tr>
											<th style="text-align:center;">No</th>
											<th>Nama Depan</th>
											<th>Nama Belakang</th>
											<th style="text-align:center;">No HP</th>
											<th>Email</th>
											<th>Jenis Kelamin</th>
											<th>Lihat</th>
										</tr>
									</thead>
									<tbody>
										<?php $nokuesioner = 0; ?>
										<?php foreach ($get_kuesioner as $getkues) : $nokuesioner ++; ?>
										<tr>
											<td style="text-align:center;"><?php echo $nokuesioner; ?></td> 
											<td><?php echo $getkues->namadepan; ?></td>
											<td><?php echo $getkues->namablakang; ?></td>
											<td  style="text-align:center;"><?php echo $getkues->nohp; ?></td>
											<td><?php echo $getkues->email; ?></td>
											<td><?php echo $getkues->jeniskelamin; ?></td>
											<td style="text-align:center;"><a href="#" class="btn mcc-btn btn-icon" onClick="button_detailKuesioner('<?php echo $getkues->id_kuis;?>')"><img src="<?= base_url('assets/') ?>dist2/img/icon-eye.png" width="20px"></a></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- TABEL PENGADUAN -->
					<div class="col-lg-12">
						<div class="card" id="tabelPengaduan">
							<div class="card-header mcc-bg-table"><div class="page-pretitle" style="color:white;">TABEL PENGADUAN USER</div></div>
								<div class="card-body table-responsive">
									<table id="dataPengaduan" class="table display row-border compact table-hover">
										<thead>
											<tr>
												<th style="text-align:center;">No</th>
												<th>Nama</th>
												<th style="text-align:center;">No HP</th>
												<th>Opsi</th>
												<th>Instansi</th>
												<th>Waktu Input</th>
												<th>Lihat</th>
											</tr>
										</thead>
										<tbody>
											<?php $nopengaduan = 0; ?>
											<?php foreach ($get_pengaduan as $getpeng) : $nopengaduan ++; 
												if($getpeng->opsipernah == '1'){
													$getpeng->opsipernah = "Ya";
												}else{
													$getpeng->opsipernah = "Belum";
												}
											?>
											<tr>
												<td style="text-align:center;"><?php echo $nopengaduan; ?></td> 
												<td><?php echo $getpeng->nama; ?></td>
												<td><?php echo $getpeng->phone; ?></td>
												<td style="text-align:center;"><?php echo $getpeng->opsipernah; ?></td>
												<td><?php echo $getpeng->instansi; ?></td>
												<td><?php echo $getpeng->date; ?></td>
												<td style="text-align:center;"><a href="#" class="btn mcc-btn btn-icon" onClick="button_detailPengaduan('<?php echo $getpeng->id;?>')"><img src="<?= base_url('assets/') ?>dist2/img/icon-eye.png" width="20px"></a></td>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
                	</div>
					<hr>
                <footer class="footer footer-transparent d-print-none">
                    <div class="container">
                        <div class="row text-center align-items-center page-pretitle" style="color:#001A72;">
                            <div class="py-2">&copy; 2024 BY <b>IT-MCC</b>| DASHBOARD SURVEI KEPUASAN MASYARAKAT KOTA MALANG</div>
                        </div>
                    </div>
                </footer>
            </div>
                    
        </div>
    </div>
    <!-- MODAL DETAIL KUESIONER -->
    <div class="modal modal-blur fade" id="modal-kuesioner" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header mcc-bg-card">
                <div class="modal-title h5">DETAIL RESPONDEN</div>
            </div>
			<div class="modal-body row">
                <ul class="steps steps-vertical">
                    <li class="step-item">
                        <div class="h4 m-0">Nama Responden</div>
                        <span class="text-muted" id="kues_namadepan"></span>&nbsp;<span class="text-muted" id="kues_namabelakang"></span>
                    </li>
                    <li class="step-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="h4 m-0">No HP</div>
                                <div class="text-muted" id="kues_nohp"></div>
                            </div>
                            <div class="col-6">
                                <div class="h4 m-0">Email</div>
                                <div class="text-muted" id="kues_email"></div>
                            </div>
                        </div>
                    </li>
					<li class="step-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="h4 m-0">Jenis Kelamin</div>
                                <div class="text-muted" id="kues_jeniskelamin"></div>
                            </div>
                            <div class="col-6">
                                <div class="h4 m-0">Usia</div>
                                <div class="text-muted" id="kues_usia">&nbsp; Tahun</div>
                            </div>
                        </div>
                    </li>
					<li class="step-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="h4 m-0">Pendidikan</div>
                                <div class="text-muted" id="kues_pendidikan"></div>
                            </div>
                            <div class="col-6">
                                <div class="h4 m-0">Pekerjaan</div>
                                <div class="text-muted" id="kues_pekerjaan"></div>
                            </div>
                        </div>
                    </li>
                    <li class="step-item">
                        <div class="h4 m-0">Frekuensi Kunjungan</div>
                        <div class="text-muted" id="kues_frekkunjungan"></div>
                    </li>
                    <li class="step-item">
                        <div class="h4 m-0">Usulan Kegiatan Kolaborasi Melibatkan</div>
                        <div class="text-muted"><span id="kues_kegiatan"></span>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Detail Kegiatan Yang Diusulkan</div>
                        <div class="text-muted"><span id="kues_isikegiatan"></span>
                    </li>
                    <li class="step-item">
                        <div class="h4 m-0">Keluhan</div>
                        <div class="text-muted" id="kues_keluhan"></div>
                    </li>
                    <li class="step-item">
                        <div class="h4 m-0">Saran</div>
                        <div class="text-muted" id="kues_saran"></div>
                    </li>
				</ul>
				<br><hr>
				<ul class="steps steps-vertical">
					<div class="h3 m-0">Diisi Untuk User Yang Telah Mengadakan Event di MCC</div>
					<li class="step-item">
                        <div class="h4 m-0">Nama Institusi / Perusahaan / Komunitas</div>
                        <div class="text-muted" id="kues_namainstitusi"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">No Telepon PIC</div>
                        <div class="text-muted" id="kues_picnotelp"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Jumlah Peserta / Pelaku EKRAF</div>
                        <div class="text-muted" id="kues_jumlahpeserta"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Jumlah Pengunjung Saat Mengadakan Event</div>
                        <div class="text-muted" id="kues_jumlahpengunjung"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Jumlah Transaksi Saat Mengadakan Event Bila Ada</div>
                        <div class="text-muted" id="kues_jumlahtransaksi"></div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
				<div class="text-muted" id="kues_waktuinput"></div>
                <button type="button" class="btn mcc-btn" data-bs-dismiss="modal"><img src="<?= base_url('assets/') ?>dist2/img/icon-close.png" width="20px"></button>
            </div>
            </div>
        </div>
    </div>
	<!-- MODAL DETAIL PENGADUAN -->
	<div class="modal modal-blur fade" id="modal-pengaduan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header mcc-bg-card">
                <div class="modal-title h5">DETAIL PENGADUAN</div>
            </div>
			<div class="modal-body row">
                <ul class="steps steps-vertical">
                    <li class="step-item">
                        <div class="h4 m-0">Nama Lengkap</div>
                        <div class="text-muted" id="peng_nama"></div>
                    </li>
					<li class="step-item">
						<div class="h4 m-0">No HP</div>
						<div class="text-muted" id="peng_phone"></div>
                    </li>
					<li class="step-item">
						<div class="h4 m-0">Pernah menggunakan fasilitas MCC sebelumnya?</div>
						<div class="text-muted" id="peng_opsipernah"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Instansi / Komunitas / Perorangan</div>
                        <div class="text-muted" id="peng_instansi"></div>
                    </li>
					<li class="step-item">
                        <div class="h4 m-0">Pengaduan</div>
                        <div class="text-muted" id="peng_pengaduan"></div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
				<div class="text-muted" id="peng_date"></div>
                <button type="button" class="btn mcc-btn" data-bs-dismiss="modal"><img src="<?= base_url('assets/') ?>dist2/img/icon-close.png" width="20px"></button>
            </div>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="<?= base_url('assets/') ?>dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url('assets/') ?>dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?= base_url('assets/') ?>dist/js/demo.min.js?1684106062" defer></script>

	<script type="text/javascript">
		document.getElementById("card-chart").style.display = "block";
		document.getElementById("tabelKuesioner").style.display = "none";
		document.getElementById("tabelPengaduan").style.display = "none";

		function sectionChart() {
			document.getElementById("card-chart").style.display = "block";
			document.getElementById("tabelKuesioner").style.display = "none";
			document.getElementById("tabelPengaduan").style.display = "none";
		}
		function sectionResponden() {
			document.getElementById("card-chart").style.display = "none";
			document.getElementById("tabelKuesioner").style.display = "block";
			document.getElementById("tabelPengaduan").style.display = "none";
		}
		function sectionPengaduan() {
			document.getElementById("card-chart").style.display = "none";
			document.getElementById("tabelKuesioner").style.display = "none";
			document.getElementById("tabelPengaduan").style.display = "block";
		}
	</script>

	<!-- BUTTON DETAIL KUESIONER -->
    <script type="text/javascript"> 
        function button_detailKuesioner(kode){
            $.ajax({
                url: '<?php echo base_url()."Dashboard/detail_responden/" ?>'+encodeURIComponent(kode),
                success: function(response) {
                    const responseJSON = JSON.parse(response);
                    //console.log(responseJSON); 
                    $('#kues_namadepan').html(responseJSON.namadepan)
                    $('#kues_namabelakang').html(responseJSON.namablakang)
                    $('#kues_nohp').html(responseJSON.nohp)
                    $('#kues_email').html(responseJSON.email)
                    $('#kues_jeniskelamin').html(responseJSON.jeniskelamin)
                    $('#kues_usia').html(responseJSON.usia)
                    $('#kues_pendidikan').html(responseJSON.pendidikan)
                    $('#kues_pekerjaan').html(responseJSON.pekerjaan)
                    $('#kues_frekkunjungan').html(responseJSON.frekkunjungan)
                    $('#kues_kegiatan').html(responseJSON.kegiatan)
                    $('#kues_isikegiatan').html(responseJSON.isikegiatan)
                    $('#kues_kegiatanpendidikan').html(responseJSON.kegiatanpendidikan)
                    $('#kues_kegiatanseni').html(responseJSON.kegiatanseni)
                    $('#kues_keluhan').html(responseJSON.keluhan)
					$('#kues_saran').html(responseJSON.saran)
					$('#kues_namainstitusi').html(responseJSON.namainstitusi)
					$('#kues_picnotelp').html(responseJSON.picnotelp)
					$('#kues_jumlahpeserta').html(responseJSON.jumlahpeserta)
					$('#kues_jumlahpengunjung').html(responseJSON.jumlahpengunjung)
					$('#kues_jumlahtransaksi').html(responseJSON.jumlahtransaksi)
					$('#kues_waktuinput').html(responseJSON.waktu_input)
                    $('#modal-kuesioner').modal('show');
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
	<!-- BUTTON DETAIL PENGADUAN -->
	<script type="text/javascript"> 
        function button_detailPengaduan(kode){
            $.ajax({
                url: '<?php echo base_url()."Dashboard/detail_pengaduan/" ?>'+encodeURIComponent(kode),
                success: function(response) {
                    const responseJSON = JSON.parse(response);
                    //console.log(responseJSON);
                    $('#peng_nama').html(responseJSON.nama)
                    $('#peng_phone').html(responseJSON.phone)
                    $('#peng_opsipernah').html(responseJSON.opsipernah)
                    $('#peng_instansi').html(responseJSON.instansi)
                    $('#peng_pengaduan').html(responseJSON.pengaduan)
                    $('#peng_date').html(responseJSON.date)
                    $('#modal-pengaduan').modal('show');
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>  
      
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-jeniskelamin'), {
      		chart: {
      			type: "donut",
      			fontFamily: 'inherit',
      			height: 350,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [70, 55],
      		labels: ["Laki-laki", "Perempuan"],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		colors: [tabler.getColor("primary", 0.8), tabler.getColor("gray-300")],
      		legend: {
      			show: true,
      			position: 'bottom',
      			offsetY: 12,
      			markers: {
      				width: 10,
      				height: 10,
      				radius: 100,
      			},
      			itemMargin: {
      				horizontal: 8,
      				vertical: 8
      			},
      		},
      		tooltip: {
      			fillSeriesColor: false
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-usia'), {
      		chart: {
      			type: "donut",
      			fontFamily: 'inherit',
      			height: 350,
      			sparkline: {
      				enabled: true
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [20, 55, 60, 70, 72, 95],
      		labels: ['0-17', '18-25', '26-35', '36-45', '46-55', '56-60+'],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			strokeDashArray: 4,
      		},
      		colors: [tabler.getColor("danger", 0.8), tabler.getColor("#A01D86"),tabler.getColor("success",0.8), tabler.getColor("primary",0.8), tabler.getColor("warning", 0.8), tabler.getColor("info",0.8),],
      		legend: {
      			show: true,
      			position: 'bottom',
      			offsetY: 12,
      			markers: {
      				width: 10,
      				height: 10,
      				radius: 100,
      			},
      			itemMargin: {
      				horizontal: 8,
      				vertical: 8
      			},
      		},
      		tooltip: {
      			fillSeriesColor: false
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-pendidikan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Tasks completion",
      			data: [155, 65, 465, 265]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'text',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'SD', 'SMP', 'SMA', 'Perguruan Tinggi'
      		],
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-pekerjaan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Tasks completion",
      			data: [155, 65, 465, 265,900]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			type: 'text',
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		labels: [
      			'PNS', 'Wirausaha', 'Swasta', 'Polri','TNI'
      		],
      		colors: [tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-persyaratanpelayanan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50, 40]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90, 40]
      		},{
      			name: "Puas",
      			data: [30, 25, 60, 40]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90, 100]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-sistem-mekanisme-prosedur'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50, 40]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90, 40]
      		},{
      			name: "Puas",
      			data: [30, 25, 60, 40]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90, 100]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
	<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-waktupelayanan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90]
      		},{
      			name: "Puas",
      			data: [30, 25, 60]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
	<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-produkjenispelayanan'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30]
      		},{
      			name: "Puas",
      			data: [60, 40]
      		},{
      			name: "Sangat Puas",
      			data: [90, 100]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
	<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-kompetensipelaksana'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90]
      		},{
      			name: "Puas",
      			data: [30, 25, 60]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
	<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-penangananmasukan1'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90]
      		},{
      			name: "Puas",
      			data: [30, 25, 60]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
	<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-penangananmasukan2'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 350,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '70%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Sangat Tidak Puas",
      			data: [30, 20, 50, 40]
      		},{
      			name: "Tidak Puas",
      			data: [20, 30, 90, 40]
      		},{
      			name: "Puas",
      			data: [30, 25, 60, 40]
      		},{
      			name: "Sangat Puas",
      			data: [20, 13, 90, 100]
      		}],
      		tooltip: {
      			theme: 'dark'
      		},
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0,
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories: ["1","2","3","4"],
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: [tabler.getColor("green"), tabler.getColor("pink"), tabler.getColor("green"), tabler.getColor("primary")],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>
  </body>