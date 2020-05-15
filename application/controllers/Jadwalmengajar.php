<?php 	

		/**
		* 
		*/
		class Jadwalmengajar extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('M_Jadwalmengajar','jadwalmengajar');
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
				$data['data'] = $this->jadwalmengajar->lihat_jadwalmengajar();
				$this->load->view('head',$data);
				$this->load->view('jadwalmengajar/menu');
				$this->load->view('jadwalmengajar/index');
				$this->load->view('footer');
			}

		
/**
=====================================================================================================================================
DATA jadwalmengajar
===================================================================================================================================== 
*/
		
			public function tambah_jadwalmengajar()
			{
				$data['prodi'] = $this->jadwalmengajar->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('jadwalmengajar/menu');
				$this->load->view('jadwalmengajar/V_tambah_jadwal');
				$this->load->view('footer');
			}



			public function proses_tambah_jadwalmengajar()
			{
				$data = array(
					'prodi' => $_POST['prodi'], 
					'kelas' => $_POST['kelas'],
					'matakuliah' => $_POST['matakuliah'],
					'waktu_mulai' => $_POST['waktu_mulai'],
					'waktu_selesai' => $_POST['waktu_selesai'],
					'tanggal' => $_POST['tanggal'],

				);

				$this->jadwalmengajar->proses_tambah_jadwalmengajar($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('jadwalmengajar')."';</script>";
			}

				public function edit_jadwalmengajar($id_jadwalmengajar)
			{

				$data['dt'] = $this->jadwalmengajar->lihat_jadwalmengajar($id_jadwalmengajar);
				$data['prodi'] = $this->jadwalmengajar->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('jadwalmengajar/menu');
				$this->load->view('jadwalmengajar/V_edit_jadwal');
				$this->load->view('footer');
			}

			public function proses_edit_jadwalmengajar()
			{
				$data = array(
					'prodi' => $_POST['prodi'], 
					'kelas' => $_POST['kelas'],
					'matakuliah' => $_POST['matakuliah'],
					'waktu_mulai' => $_POST['waktu_mulai'],
					'waktu_selesai' => $_POST['waktu_selesai'],
					'tanggal' => $_POST['tanggal'],
				);
				$id_jadwalmengajar = $_POST['id_jadwal'];
				$this->jadwalmengajar->proses_edit_jadwalmengajar($data,$id_jadwalmengajar);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('jadwalmengajar')."';</script>";
			}
			public function hapus_jadwalmengajar($id){
				$this->jadwalmengajar->proses_hapus_jadwalmengajar($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('jadwalmengajar')."';</script>";
			}

			public function get_kelas(){
			$prodi = $this->input->post('prodi');
			$jenis = $this->jadwalmengajar->get_kelas($prodi);
			$id = $this->input->post('id');
			if($id){
				$record = $this->jadwalmengajar->get_by_id($id);
			}else{
				$record = FALSE;
			}
			
	        if(!empty($jenis)){
	            echo form_dropdown('kelas', $jenis, $record ? $record->kelas : '', "class='form-control select2' name='kelas' id='kelas'");
	        }else{
	            echo form_dropdown('kelas', array(''=>'Pilih Kelas'), '', "class='form-control select2' name='kelas' id='kelas'");
	        }
		}

		public function get_matakuliah(){
			$prodi = $this->input->post('prodi');
			$jenis = $this->jadwalmengajar->get_matakuliah($prodi);
			$id = $this->input->post('id');
			if($id){
				$record = $this->jadwalmengajar->get_by_id($id);
			}else{
				$record = FALSE;
			}
	        if(!empty($jenis)){
	            echo form_dropdown('matakuliah', $jenis, $record ? $record->matakuliah : '', "class='form-control select2' name='matakuliah' id='matakuliah'");
	        }else{
	            echo form_dropdown('matakuliah', array(''=>'Pilih Mata Kuliah'), '', "class='form-control select2' name='matakuliah' id='matakuliah'");
	        }
		}
			

}

	
		
 ?>
