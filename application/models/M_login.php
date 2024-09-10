<?php

class M_login extends CI_Model {

    public function cekLogin($data)
	{
        $getUser = $this->db->get_where('kuesioner_admin', array('username' => $data['username']))->row_array();
        if($getUser){
            if(password_verify($data['password'] , $getUser['password'])){
                $sessionData = array(
                    'username' => $data['username'],
                    'login' => TRUE,
                );
                $this->session->set_userdata($sessionData);
                redirect('Dashboard');
            }else{
                $this->session->set_flashdata('response',
                "<div class='col-md-6 col-lg-12'>
                    <div class='card bg-danger text-primary-fg'>
                        <div class='card-body'>
                            <h2 class='card-title'>Error !</h2>
                            <p>Password Salah.</p>
                        </div>
                    </div><br>
                </div>
                ");
                redirect('Login');
            }
        }else{
            $this->session->set_flashdata('response',
                "<div class='col-md-6 col-lg-12'>
                    <div class='card bg-danger text-primary-fg'>
                        <div class='card-body'>
                            <h2 class='card-title'>Error !</h2>
                            <p>Username tidak ada.</p>
                        </div>
                    </div><br>
                </div>
                ");
            redirect('Login');
        }
        
        // if(password_verify($data['password'], $getUser->password)){
		// 	if($cekLogin > 0){
        //         $sessionData = array(
        //             'username' => $$data['username'],
        //             'login' => TRUE,
        //         );
        //         $this->session->set_userdata($sessionData);
        //         redirect('Dashboard');
        //     }else{
        //         $this->session->set_flashdata('response',
        //         "<div class='col-md-6 col-lg-12'>
        //             <div class='card bg-danger text-primary-fg'>
        //                 <div class='card-body'>
        //                     <h2 class='card-title'>Error !</h2>
        //                     <p>Password Salah.</p>
        //                 </div>
        //             </div><br>
        //         </div>
        //         ");
        //     redirect('Login');    
        //     }
        // }else{
        //     $this->session->set_flashdata('response',
        //         "<div class='col-md-6 col-lg-12'>
        //             <div class='card bg-danger text-primary-fg'>
        //                 <div class='card-body'>
        //                     <h2 class='card-title'>Error !</h2>
        //                     <p>Akun Anda tidak ada. Silahkan konfirmasi ke Tim IT MCC.</p>
        //                 </div>
        //             </div><br>
        //         </div>
        //         ");
        //     redirect('Login');    
        // }
	}

    public function detailAdmin($username)
	{
		$query = $this->db->get_where('kuesioner_admin', array('username' => $username))->row();
		return $query;
	}

}

?>