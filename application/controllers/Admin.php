<?php 	

		/**
		* 
		*/
		class Admin extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_admin','admin');
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
				$this->load->view('admin/menu');
				$this->load->view('admin/index');
				$this->load->view('footer');
			}
/**
=====================================================================================================================================
DATA GOLONGAN
===================================================================================================================================== 
*/
			public function lihat_golongan()
			{
				$data['data'] = $this->admin->lihat_golongan();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Golongan/V_lihat_golongan');
				$this->load->view('footer');
			}

			public function tambah_golongan()
			{
				$this->load->view('head');
				$this->load->view('admin/menu');
				$this->load->view('admin/Golongan/V_tambah_golongan');
				$this->load->view('footer');
			}



			public function proses_tambah_golongan()
			{
				$data = array(
					'id_golongan' => '' ,
					'golongan' => $_POST['golongan'] 
				);

				$this->admin->proses_tambah_golongan($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_golongan')."';</script>";
			}

				public function edit_golongan($id_golongan)
			{

				$data['dt'] = $this->admin->lihat_golongan($id_golongan);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Golongan/V_edit_golongan');
				$this->load->view('footer');
			}

			public function proses_edit_golongan()
			{
				$data = array(
					'golongan' => $_POST['golongan'] 
				);
				$id_golongan = $_POST['id_golongan'];
				$this->admin->proses_edit_golongan($data,$id_golongan);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_golongan')."';</script>";
			}
			public function hapus_golongan($id){
				$this->admin->proses_hapus_golongan($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_golongan')."';</script>";
			}
/**
=====================================================================================================================================
DATA UNIT
===================================================================================================================================== 
*/
			public function lihat_unit()
			{
				$data['data'] = $this->admin->lihat_unit();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Unit/V_lihat_unit');
				$this->load->view('footer');
			}

		public function tambah_unit()
			{
				$data['golongan'] = $this->admin->lihat_golongan();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Unit/V_tambah_unit');
				$this->load->view('footer');
			}

			public function proses_tambah_unit()
			{
				$data = array(
					'id_unit' => '' ,
					'nama_unit' => $_POST['unit'], 
					'id_golongan' => $_POST['id_golongan'] 
				);

				$this->admin->proses_tambah_unit($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_unit')."';</script>";
			}


		public function edit_unit($id_unit)
			{
				$data['golongan'] = $this->admin->lihat_golongan();
				$data['unit'] = $this->admin->lihat_unit($id_unit);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Unit/V_edit_unit');
				$this->load->view('footer');
			}

		public function proses_edit_unit()
			{
				$data = array(
					'nama_unit' => $_POST['nama_unit'], 
					'id_golongan' => $_POST['id_golongan']
				);
				$id_unit = $_POST['id_unit'];
				$this->admin->proses_edit_unit($data,$id_unit);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_unit')."';</script>";
			}
			
/**
=====================================================================================================================================
DATA akun
===================================================================================================================================== 
*/

		public function lihat_akun()
			{
				$data['data'] = $this->admin->lihat_akun();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Akun/V_lihat_akun');
				$this->load->view('footer');
			}
			public function tambah_akun()
			{
				
				$data['unit'] = $this->admin->lihat_unit();
				$this->load->view('head', $data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Akun/V_tambah_akun');
				$this->load->view('footer');
			}

			public function proses_tambah_akun()
			{
				$data = array(
					'id_akun' => '' ,
					'username' => $_POST['username'], 
					'password' => md5($_POST['password']),
					'id_unit' => $_POST['id_unit'],
					'level' => $_POST['level']

				);

			
				$this->admin->proses_tambah_akun($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_akun')."';</script>";

			}

			
				public function edit_akun($id_akun)
			{
				$data['dt'] = $this->admin->lihat_akun($id_akun);
				$data['unit'] = $this->admin->lihat_unit();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Akun/V_edit_akun');
				$this->load->view('footer');
			}

			public function proses_edit_akun()
			{
				$data = array(
					'username' => $_POST['username'], 
					'password' => $_POST['password'],
					'id_unit' => $_POST['id_unit'],
					'level' => $_POST['level']


				);
				$id_akun = $_POST['id_akun'];
				$this->admin->proses_edit_akun($data,$id_akun);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_akun')."';</script>";
			}

			public function hapus_akun($id){
				$this->admin->proses_hapus_akun($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_akun')."';</script>";
			}
/**

		
/**
=====================================================================================================================================
DATA agenda
===================================================================================================================================== 
*/
		public function lihat_agenda()
			{
				$data['data'] = $this->admin->lihat_agenda();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_lihat_agenda');
				$this->load->view('footer');
			}

			public function tambah_agenda()
			{
				$data['unit'] = $this->admin->lihat_unit();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_tambah_agenda');
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
					'jam_mulai' => $_POST['jam_selesai'],
					'status' => $_POST['status'],
					'tanggal_pengajuan' => date('Y-m-d',strtotime($_POST['tanggal_pengajuan'])),
					'tanggal_publish' => date('Y-m-d',strtotime($_POST['tanggal_publish']))

				);

				$this->admin->proses_tambah_agenda($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_agenda')."';</script>";
			}

				public function edit_agenda($id_agenda)
			{

				$data['dt'] = $this->admin->lihat_agenda($id_agenda);
				$data['unit'] = $this->admin->lihat_unit();
				$data['display'] = $this->admin->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_edit_agenda');
				$this->load->view('footer');
			}

			public function proses_edit_agenda()
			{
				$data = array(
					'id_unit' => $_POST['id_unit'], 
					'id_display' => $_POST['id_display'], 
					'nama_agenda' => $_POST['agenda'],
					'tanggal_agenda' => date('Y-m-d',strtotime($_POST['tanggal_agenda'])),
					'tanggal_selesai' => date('Y-m-d',strtotime($_POST['tanggal_selesai'])),
					'jam_mulai' => $_POST['jam_selesai'],
					'status' => $_POST['status'],
					'tanggal_pengajuan' => date('Y-m-d',strtotime($_POST['tanggal_pengajuan'])),
					'tanggal_publish' => date('Y-m-d',strtotime($_POST['tanggal_publish']))


				);
				$id_agenda = $_POST['id_agenda'];
				$this->admin->proses_edit_agenda($data,$id_agenda);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_agenda')."';</script>";
			}


public function lihat_display()
			{
				$data['data'] = $this->admin->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Display/V_lihat_display');
				$this->load->view('footer');
			}
			public function tambah_display()
			{
				$data['unit'] = $this->admin->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Display/V_tambah_display');
				$this->load->view('footer');
			}

				public function edit_display($id)
			{
				$where = array('id_display' => $id);
				$data['display'] = $this->admin->lihat_display_edit($where,'display')->result();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Display/V_edit_display',$data);
				$this->load->view('footer');
			}

				public function proses_tambah_display()
			{
				$data = array(
					'id_display' => '' ,
					'display' => $_POST['display'], 
					
				);

				$this->admin->proses_tambah_display($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_display')."';</script>";
			}

				public function proses_edit_display()
			{

				$this->admin->proses_edit_display();
				echo "<script language='javascript'>alert('Data Berhasil Diubah'); document.location='". base_url('admin/lihat_display')."';</script>";
			
			}

			public function hapus_display($id){
				$this->admin->delete($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_display')."';</script>";
			}

		}

	
		
 ?>
