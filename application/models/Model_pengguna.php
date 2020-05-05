<?php 
class Model_pengguna extends CI_Model {
    public function cek_masuk($username, $password) {
        $data = array(
            'username' => $username,
            'password' => sha1($password)
        );
        return $this->db->get_where('pengguna', $data);
    }
}
