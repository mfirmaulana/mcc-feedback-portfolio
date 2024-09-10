<?php

class M_submit extends CI_Model {

    public function submitForm($data){
        $this->db->insert('kuisioner', $data);
    }

}

?>