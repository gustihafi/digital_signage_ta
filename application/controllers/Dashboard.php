<?php 	

		/**
		* 
		*/
		class Dashboard extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_dashboard','dashboard');
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
				$this->load->view('head');
				$this->load->view('dashboard/menu');
				$this->load->view('dashboard/index');
				$this->load->view('footer');
			}
/**
=====================================================================================================================================
DATA GOLONGAN
===================================================================================================================================== 
*/
			
	}
		
 ?>
