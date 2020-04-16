<?php 	

		/**
		* 
		*/
		class Mahasiswa extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_admin','admin');
			}

			public function index()
			{
				$this->load->view('head');
				$this->load->view('mahasiswa/menu');
				$this->load->view('mahasiswa/index');
				$this->load->view('footer');
			}

			public function lihat_agenda()
			{
				$data['data'] = $this->admin->lihat_agenda();
				$this->load->view('head',$data);
				$this->load->view('mahasiswa/menu');
				$this->load->view('mahasiswa/Agenda/V_lihat_agenda');
				$this->load->view('footer');
			}

			public function tambah_agenda()
			{
				$data['unit'] = $this->admin->lihat_unit();
				$this->load->view('head',$data);
				$this->load->view('mahasiswa/menu');
				$this->load->view('mahasiswa/Agenda/V_tambah_agenda');
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

				$this->mahasiswa->proses_tambah_agenda($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('mahasiswa/lihat_agenda')."';</script>";
			}


				public function edit_agenda($id_agenda)
			{

				$data['dt'] = $this->mahasiswa->lihat_agenda($id_agenda);
				$data['unit'] = $this->mahasiswa->lihat_unit();
				$data['display'] = $this->mahasiswa->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('mahasiswa/menu');
				$this->load->view('mahasiswa/Agenda/V_edit_agenda');
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


		}

		?>