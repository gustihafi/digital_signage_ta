<?php
class M_login extends CI_Model
{
    public function login($post){
        $username = $post['username'];
        $pass = md5($post['password']);
        return $this->db->query("SELECT * FROM akun WHERE username='$username' AND password='$pass'");
    }
}
