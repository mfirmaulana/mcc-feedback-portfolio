<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function authLogin()
	{
		$this->form_validation->set_rules('username','Username','required|trim',['required' => 'Username harus di isi ya!']);
		$this->form_validation->set_rules('password','Password','required|trim|matches[konfirmasi_password]',['required' => 'Password tidak boleh kosong!','matches'=>'Password tidak sama! Hayooo! ']);
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password','required|trim|matches[password]',['required' => 'Konfirmasi Password tidak boleh kosong, supaya kamu tidak terdeteksi spam robot ya!','matches'=>'Password harus sama ya! ']);

		if($this->form_validation->run() != FALSE){
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			];
			$cekLogin = $this->M_login->cekLogin($data);
		}else{
			$this->load->view('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}