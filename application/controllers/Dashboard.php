<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION['username'])){
			$username = $_SESSION['username'];
			$detail = $this->M_login->detailAdmin($username);
			$data['detail_admin'] = $detail;

			//Hitung Total Responden
			$totResponden = $this->total_responden();
			$data['total_responden'] = $totResponden;

			//Hitung Total Pengaduan
			$totPengaduan = $this->total_pengaduan();
			$data['total_pengaduan'] = $totPengaduan;

			//Menampilkan Data Kuesioner
			$getKuesioner = $this->tampil_kuesioner();
			$data['get_kuesioner'] = $getKuesioner;

			//Menampilkan Data Pengaduan
			$getPengaduan = $this->tampil_pengaduan();
			$data['get_pengaduan'] = $getPengaduan;

			$this->load->view('admin/header');
			$this->load->view('admin/dashboard', $data);
		}else{
			$this->load->view('Login');
		}
	}

	// ----> FEEDBACK FUNCTION <----
    public function total_responden()
	{
		$total_kuesioner = $this->db->get('kuisioner')->num_rows();
        //echo json_encode($total_kuesioner);
		return $total_kuesioner;
	}

    public function tampil_kuesioner()
	{
		$get_kuesioner = $this->db->order_by('id_kuis', 'DESC')->get('kuisioner')->result();
        //echo json_encode($get_kuesioner);
		return $get_kuesioner;
	}

	public function detail_responden($kode)
	{ 
		echo json_encode($this->M_dashboard->detailResponden(urldecode($kode)));
	}

	public function export_excel(){
		//Create Connection of Database
		$con = mysqli_connect('localhost','','','');
	
		// Fetch data from Users table
		$result = mysqli_query($con, "SELECT * FROM kuisioner");
		
		//Create header of excel
		$content = '<table><tr><th>No</th>
		<th>Nama Depan</th>
		<th>Nama Belakang</th>
		<th>No HP</th>
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th>Usia</th>
		<th>Pendidikan</th>
		<th>Pekerjaan</th>
		<th>Frekuensi Kunjungan</th>
		<th>Persoal 1</th>
		<th>Persoal 2</th>
		<th>Persoal 3</th>
		<th>Persoal 4</th>
		<th>Sissoal 1</th>
		<th>Sissoal 2</th>
		<th>Sissoal 3</th>
		<th>Sissoal 4</th>
		<th>Waksoal 1</th>
		<th>Waksoal 2</th>
		<th>Waksoal 3</th>
		<th>Prodsoal 1</th>
		<th>Prodsoal 2</th>
		<th>Komsoal 1</th>
		<th>Komsoal 2</th>
		<th>Komsoal 3</th>
		<th>Pensoal 1</th>
		<th>Pensoal 2</th>
		<th>Pensoal 3</th>
		<th>Penasoal 1</th>
		<th>Penasoal 2</th>
		<th>Penasoal 3</th>
		<th>Penasoal 4</th>
		<th>Kegiatan</th>
		<th>Isi Kegiatan</th>
		<th>Kegiatan Pendidikan</th>
		<th>Kegiatan Seni</th>
		<th>Keluhan</th>
		<th>Saran</th>
		<th>Nama Institusi</th>
		<th>PIC No Telp</th>
		<th>Jumlah Peserta</th>
		<th>Jumlah Pengunjung</th>
		<th>Jumlah Transaksi</th>
		<th>Waktu Input</th>
		</tr>'; 
		
		//fetch all data with the help of mysqli_fetch_array 
		$nokuesioner = 1;
		while($row = mysqli_fetch_array($result))  
		{  	
				$content .='<tr>';
				$content .='<td>'.$nokuesioner++.'</td>';
				$content .='<td>'.$row['namadepan'].'</td>';
				$content .='<td>'.$row['namablakang'].'</td>';
				$content .='<td>'.$row['nohp'].'</td>';
				$content .='<td>'.$row['email'].'</td>';
				$content .='<td>'.$row['jeniskelamin'].'</td>';
				$content .='<td>'.$row['usia'].'</td>';
				$content .='<td>'.$row['pendidikan'].'</td>';
				$content .='<td>'.$row['pekerjaan'].'</td>';
				$content .='<td>'.$row['frekkunjungan'].'</td>';

				$content .='<td>'.$row['persoal1'].'</td>';
				$content .='<td>'.$row['persoal2'].'</td>';
				$content .='<td>'.$row['persoal3'].'</td>';
				$content .='<td>'.$row['persoal4'].'</td>';

				$content .='<td>'.$row['sissoal1'].'</td>';
				$content .='<td>'.$row['sissoal2'].'</td>';
				$content .='<td>'.$row['sissoal3'].'</td>';
				$content .='<td>'.$row['sissoal4'].'</td>';

				$content .='<td>'.$row['waksoal1'].'</td>';
				$content .='<td>'.$row['waksoal2'].'</td>';
				$content .='<td>'.$row['waksoal3'].'</td>';

				$content .='<td>'.$row['prodsoal1'].'</td>';
				$content .='<td>'.$row['prodsoal2'].'</td>';

				$content .='<td>'.$row['komsoal1'].'</td>';
				$content .='<td>'.$row['komsoal2'].'</td>';
				$content .='<td>'.$row['komsoal3'].'</td>';

				$content .='<td>'.$row['pensoal1'].'</td>';
				$content .='<td>'.$row['pensoal2'].'</td>';
				$content .='<td>'.$row['pensoal3'].'</td>';

				$content .='<td>'.$row['penasoal1'].'</td>';
				$content .='<td>'.$row['penasoal2'].'</td>';
				$content .='<td>'.$row['penasoal3'].'</td>';
				$content .='<td>'.$row['penasoal4'].'</td>';

				$content .='<td>'.$row['kegiatan'].'</td>';
				$content .='<td>'.$row['isikegiatan'].'</td>';
				$content .='<td>'.$row['kegiatanpendidikan'].'</td>';
				$content .='<td>'.$row['kegiatanseni'].'</td>';
				$content .='<td>'.$row['keluhan'].'</td>';
				$content .='<td>'.$row['saran'].'</td>';

				$content .='<td>'.$row['namainstitusi'].'</td>';
				$content .='<td>'.$row['picnotelp'].'</td>';
				$content .='<td>'.$row['jumlahpeserta'].'</td>';
				$content .='<td>'.$row['jumlahpengunjung'].'</td>';
				$content .='<td>'.$row['jumlahtransaksi'].'</td>';
				$content .='<td>'.$row['waktu_input'].'</td>';

				$content .='</tr>';   
		} 
		$content.='</table>'; 
		
		//This code is use to create excel format
		$tgldownload = date('Y-m-d');
		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=SURVEI KEPUASAN MASYARAKAT KOTA MALANG_".$tgldownload.".xls");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");

		echo $content;
		exit();
	}

   // ----> PENGADUAN FUNCTION <----

   	public function total_pengaduan()
	{
		$total_pengaduan = $this->db->get('form_pengaduan')->num_rows();
        //echo json_encode($total_pengaduan);
		return $total_pengaduan;
	}

    public function tampil_pengaduan()
	{
		$get_pengaduan = $this->db->order_by('id', 'DESC')->get('form_pengaduan')->result();
        //echo json_encode($get_pengaduan);
		return $get_pengaduan;
	}

	public function detail_pengaduan($kode)
	{ 
		echo json_encode($this->M_dashboard->detailPengaduan(urldecode($kode)));
	}

}


