<?php
class Auth extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index(){
        $this->load->view('login');
    }

    public function login(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$query = $this->M_login->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'id_akun' => $row->id_akun,
					'username' => $row->username,
					'level' => $row->level,
					'status' => "login"
					);
				if($row->level == 'Admin'){
				$this->session->set_userdata($params);
				echo "<script>window.location='".base_url('admin')."';</script>";
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-check"></i> Success</h4>
	                Selamat Datang Di Digital Signage Agenda berhasil Sebagai '.$row->level.
                  '</div>');
		} else {
			$this->session->set_userdata($params);
				echo "<script>window.location='".base_url('dashboard')."';</script>";
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                <h4><i class="icon fa fa-check"></i> Success</h4>
	                Selamat Datang Di Digital Signage Agenda berhasil Sebagai '.$row->level.
                  '</div>');
		}
	}else{
			echo "<script>history.go(-1) </script>";
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Failed!</h4>
			Username atau Password Salah!
		  </div>');
		}
    }
}

    public function logout(){
		$this->session->sess_destroy();

		// $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible">
	    // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    // <h4><i class="icon fa fa-check"></i> Success</h4>
	    //  Logout Berhasil
		//  </div>');
		redirect('');
	}
}
