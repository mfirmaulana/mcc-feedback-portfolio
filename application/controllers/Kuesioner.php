<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

	public function index()
	{
		$this->load->view('kuesioner');
	}

	public function submit()
	{	 
        $response = $this->input->post('g-recaptcha-response');
        if($response){
            $secret = "rahasia";
            $remoteip = $_SERVER['REMOTE_ADDR']; 
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
            $dataResponse = file_get_contents($url);
            $row = json_decode($dataResponse, true); 

            if ($row['success'] == "true"){

                date_default_timezone_set('Asia/Jakarta');
                $date = date("Y-m-d H:i:s");

                $data = [            
                    'namadepan' => $this->input->post('namadepan'),
                    'namablakang' => $this->input->post('namabelakang'),
                    'nohp' => $this->input->post('nohp'),
                    'email' => $this->input->post('email'),
                    'jeniskelamin' => $this->input->post('jeniskelamin'),
                    'usia' => $this->input->post('usia'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'frekkunjungan' => $this->input->post('frekkunjungan'),
                    'persoal1' => $this->input->post('persoal1'),
                    'persoal2' => $this->input->post('persoal2'),
                    'persoal3' => $this->input->post('persoal3'),
                    'persoal4' => $this->input->post('persoal4'),
                    'sissoal1' => $this->input->post('sissoal1'),
                    'sissoal2' => $this->input->post('sissoal2'),
                    'sissoal3' => $this->input->post('sissoal3'),
                    'sissoal4' => $this->input->post('sissoal4'),
                    'waksoal1' => $this->input->post('waksoal1'),
                    'waksoal2' => $this->input->post('waksoal2'),
                    'waksoal3' => $this->input->post('waksoal3'),
                    'prodsoal1' => $this->input->post('prodsoal1'),
                    'prodsoal2' => $this->input->post('prodsoal2'),
                    'komsoal1' => $this->input->post('komsoal1'),
                    'komsoal2' => $this->input->post('komsoal2'),
                    'komsoal3' => $this->input->post('komsoal3'),
                    'pensoal1' => $this->input->post('pensoal1'),
                    'pensoal2' => $this->input->post('pensoal2'),
                    'pensoal3' => $this->input->post('pensoal3'),
                    'penasoal1' => $this->input->post('penasoal1'),
                    'penasoal2' => $this->input->post('penasoal2'),
                    'penasoal3' => $this->input->post('penasoal3'),
                    'penasoal4' => $this->input->post('penasoal4'),
                    'kegiatan' => $this->input->post('kegiatan'),
                    'isikegiatan' => $this->input->post('isikegiatan'),
                    'keluhan' => $this->input->post('keluhan'),
                    'saran' => $this->input->post('saran'),
                    'namainstitusi' => $this->input->post('namainstitusi'),
                    'picnotelp' => $this->input->post('picnotelp'),
                    'jumlahpeserta' => $this->input->post('jumlahpeserta'),
                    'jumlahpengunjung' => $this->input->post('jumlahpengunjung'),
                    'jumlahtransaksi' => $this->input->post('jumlahtransaksi'),
                    'waktu_input' => $date,
                ];

                //echo json_encode($data);
                if($data){
                    $this->M_submit->submitForm($data);
                    $this->session->set_flashdata('response',
                    "<div class='col-md-6 col-lg-12'>
                        <div class='card bg-success text-primary-fg'>
                            <div class='card-body'>
                                <h2 class='card-title'>Sukses !</h2>
                                <p>Terima Kasih Responden. Data Anda berhasil terkirim.</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    ");
                    redirect('Kuesioner');
                }else{
                    $this->session->set_flashdata('response',
                    "<div class='col-md-6 col-lg-12'>
                        <div class='card bg-danger text-primary-fg'>
                            <div class='card-body'>
                                <h2 class='card-title'>Error !</h2>
                                <p>Data Anda gagal terkirim. Silahkan cek koneksi internet Anda dan coba lagi.</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    ");
                    redirect('Kuesioner');
                }
            }
        }else{
            $this->session->set_flashdata('captcha',
                "<div class='col-md-6 col-lg-12'>
                    <small class='text-danger pl-3'>Verifikasi Anda bukan robot gagal, Silahkan centang Recaptcha sebelum klik tombol Kirim!</small><hr>
                ");
            $this->load->view('kuesioner');
        }
        

	}
}
