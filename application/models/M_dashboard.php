<?php 

class M_dashboard extends CI_Model {

    public function detailResponden($kode)
	{
		$query = $this->db->get_where('kuisioner', array('id_kuis' => $kode))->row(); 
		return $query;
		//print_r($query);
	}

	public function detailPengaduan($kode)
	{
		$query = $this->db->get_where('form_pengaduan', array('id' => $kode))->row(); 
		if($query->opsipernah == '1'){
			$query->opsipernah = "Ya, Pernah";
		}else{
			$query->opsipernah = "Belum Pernah";
		}
		return $query;
		//print_r($query);
	}
}

?>