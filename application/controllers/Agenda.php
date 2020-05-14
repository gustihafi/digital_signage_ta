<?php 	

		/**
		* 
		*/
		class Agenda extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_agenda','agenda');
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
				$data['data'] = $this->agenda->lihat_agenda();
				$this->load->view('head',$data);
				$this->load->view('agenda/menu');
				$this->load->view('agenda/index');
				$this->load->view('footer');
			}

		
/**
=====================================================================================================================================
DATA agenda
===================================================================================================================================== 
*/
		
			public function tambah_agenda()
			{
				$data['unit'] = $this->agenda->lihat_unit();
				$data['display'] = $this->agenda->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('agenda/menu');
				$this->load->view('agenda/V_tambah_agenda');
				$this->load->view('footer');
			}

			public function proses_tambah_agenda()
			{
				$data = array(
					'id_agenda' => '' ,
					'id_unit' => $_POST['id_unit'], 
					'nama_agenda' => $_POST['agenda'],
					'tanggal_agenda' => date('Y-m-d',strtotime($_POST['tanggal_agenda'])),
					'tanggal_selesai' => date('Y-m-d',strtotime($_POST['tanggal_selesai'])),
					'jam_mulai' => $_POST['jam_mulai'],
					'jam_selesai' => $_POST['jam_selesai'],
					'status' => 'proses',
					'tanggal_pengajuan' => date('Y-m-d'),
					'narasumber' => $this->session->userdata('username')

				);

				$this->agenda->proses_tambah_agenda($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('agenda')."';</script>";
			}

			

}

	
		
 ?>
