<?php 	

		/**
		* 
		*/
		class Akun extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_Akun','akun');
				$this->load->helper('my_helper');
				if($this->session->userdata('status') != 'login'){
					$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-ban"></i> Failed!</h4>
						Harus Login!
					  </div>');
					redirect('');
					}
			}

			public function index()
			{
				$data['record'] = $this->akun->get_by_id();
				$this->load->view('head',$data);
				$this->load->view('akun/menu');
				$this->load->view('akun/index');
				$this->load->view('footer');
			}

		
/**
=====================================================================================================================================
DATA akun
===================================================================================================================================== 
*/
		
			
				public function edit_akun($id_akun)
			{

				$data['dt'] = $this->akun->lihat_akun($id_akun);
				$data['unit'] = $this->akun->lihat_unit();
				$this->load->view('head',$data);
				$this->load->view('akun/menu');
				$this->load->view('akun/V_edit_akun');
				$this->load->view('footer');
			}

			public function proses_edit_akun()
			{
				if ($this->input->post('pwd_lama') == '1') {
					$data = array(
					'username' => $_POST['username'], 
					'id_unit' => $_POST['id_unit'],
					'level' => $_POST['level']
				);

				} else {
					$data = array(
					'username' => $_POST['username'], 
					'password' => md5($_POST['pwd_baru']), 
					'id_unit' => $_POST['id_unit'],
					'level' => $_POST['level']
				);
				}
				
				$id_akun = $_POST['id_akun'];
				$this->akun->proses_edit_akun($data,$id_akun);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('akun')."';</script>";
			}

			

}

	
		
 ?>
