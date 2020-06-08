


<?php 	

		/**
		* 
		*/
		class Admin extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->helper('my_helper');
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
				$data['display']           = $this->admin->get_display(); // memastikan value awal pada variabel record;
				$data['list']           = $this->admin->get_display_list();
				$data['relasi'] = $this->admin->lihat_persetujuan();
				$data['data'] = $this->admin->lihat_agenda();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_lihat_agenda');
				$this->load->view('footer');
			}

			public function tambah_agenda()
			{
				$data['unit'] = $this->admin->lihat_unit();
				$data['display'] = $this->admin->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_tambah_agenda');
				$this->load->view('footer');
			}

			public function proses_tambah_agenda()
			{
				
				$this->admin->proses_tambah_agenda();
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_agenda')."';</script>";
			}

				public function edit_agenda($id_agenda)
			{

				$data['dt'] = $this->admin->lihat_agenda($id_agenda);
				$data['unit'] = $this->admin->lihat_unit();
				//$data['display'] = $this->admin->lihat_display_agenda($id_agenda);
				$data['display']           = $this->admin->get_display(); // memastikan value awal pada variabel record;
				$data['list']           = $this->admin->get_display_list($id_agenda);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Agenda/V_edit_agenda');
				$this->load->view('footer');
			}

			public function proses_edit_agenda()
			{
				$data = array(
					'id_unit' => $_POST['id_unit'], 
				
					'nama_agenda' => $_POST['agenda'],
					'tanggal_agenda' => date('Y-m-d',strtotime($_POST['tanggal_agenda'])),
					'tanggal_selesai' => date('Y-m-d',strtotime($_POST['tanggal_selesai'])),
					'jam_mulai' => $_POST['jam_selesai']
					


				);
				$id_agenda = $_POST['id_agenda'];
				$this->admin->proses_edit_agenda($data,$id_agenda);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_agenda')."';</script>";
			}

			public function hapus_agenda($id){
				$this->admin->proses_hapus_agenda($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_agenda')."';</script>";
			}

/**
=====================================================================================================================================
DATA agenda
===================================================================================================================================== 
*/
		public function lihat_persetujuan()
			{
				$data['data'] = $this->admin->lihat_persetujuan();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Persetujuan/V_lihat_persetujuan');
				$this->load->view('footer');
			}			

				public function edit_persetujuan($id_agenda)
			{

				$data['dt'] = $this->admin->lihat_persetujuan($id_agenda);
				$data['unit'] = $this->admin->lihat_unit();
				$data['display'] = $this->admin->lihat_display();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Persetujuan/V_edit_persetujuan');
				$this->load->view('footer');
			}

			public function proses_edit_persetujuan()
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
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_persetujuan')."';</script>";
			}

			public function proses_approve_persetujuan($id=null)
			{
				$data = array(
					'status' => 'konfirmasi', 
				);
			
				$this->admin->proses_approve_persetujuan($data,$id);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_persetujuan')."';</script>";
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

		


		/**
=====================================================================================================================================
DATA INformasi
===================================================================================================================================== 
*/
			public function lihat_informasi()
			{
				$data['data'] = $this->admin->lihat_informasi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Informasi/V_lihat_informasi');
				$this->load->view('footer');
			}

			public function tambah_informasi()
			{
				$this->load->view('head');
				$this->load->view('admin/menu');
				$this->load->view('admin/Informasi/V_tambah_informasi');
				$this->load->view('footer');
			}



			public function proses_tambah_informasi()
			{
				$data = array(
					'id_informasi' => '' ,
					'informasi' => $_POST['informasi'] 
				);

				$this->admin->proses_tambah_informasi($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_informasi')."';</script>";
			}

				public function edit_informasi($id_informasi)
			{

				$data['dt'] = $this->admin->lihat_informasi($id_informasi);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Informasi/V_edit_informasi');
				$this->load->view('footer');
			}

			public function proses_edit_informasi()
			{
				$data = array(
					'informasi' => $_POST['informasi'] 
				);
				$id_informasi = $_POST['id_informasi'];
				$this->admin->proses_edit_informasi($data,$id_informasi);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_informasi')."';</script>";
			}
			public function hapus_informasi($id){
				$this->admin->proses_hapus_informasi($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_informasi')."';</script>";
			}

		/**
=====================================================================================================================================
DATA Prodi
===================================================================================================================================== 
*/
			public function lihat_prodi()
			{
				$data['data'] = $this->admin->lihat_prodi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Prodi/V_lihat_prodi');
				$this->load->view('footer');
			}

			public function tambah_prodi()
			{
				$this->load->view('head');
				$this->load->view('admin/menu');
				$this->load->view('admin/Prodi/V_tambah_prodi');
				$this->load->view('footer');
			}



			public function proses_tambah_prodi()
			{
				$data = array(
					'id_prodi' => '' ,
					'prodi' => $_POST['prodi'] 
				);

				$this->admin->proses_tambah_prodi($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_prodi')."';</script>";
			}

				public function edit_prodi($id_prodi)
			{

				$data['dt'] = $this->admin->lihat_prodi($id_prodi);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Prodi/V_edit_prodi');
				$this->load->view('footer');
			}

			public function proses_edit_prodi()
			{
				$data = array(
					'prodi' => $_POST['prodi'] 
				);
				$id_prodi = $_POST['id_prodi'];
				$this->admin->proses_edit_prodi($data,$id_prodi);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_prodi')."';</script>";
			}
			public function hapus_prodi($id){
				$this->admin->proses_hapus_prodi($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_prodi')."';</script>";
			}

		/**
=====================================================================================================================================
DATA Kelas
===================================================================================================================================== 
*/
			public function lihat_kelas()
			{
				$data['data'] = $this->admin->lihat_kelas();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Kelas/V_lihat_kelas');
				$this->load->view('footer');
			}

			public function tambah_kelas()
			{
				$data['prodi'] = $this->admin->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Kelas/V_tambah_kelas');
				$this->load->view('footer');
			}



			public function proses_tambah_kelas()
			{
				$data = array(
					'id_kelas' => '' ,
					'kelas' => $_POST['kelas'] ,
					'prodi' => $_POST['prodi'] ,
				);

				$this->admin->proses_tambah_kelas($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_kelas')."';</script>";
			}

				public function edit_kelas($id_kelas)
			{

				$data['dt'] = $this->admin->lihat_kelas($id_kelas);
				$data['prodi'] = $this->admin->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Kelas/V_edit_kelas');
				$this->load->view('footer');
			}

			public function proses_edit_kelas()
			{
				$data = array(
					'kelas' => $_POST['kelas'], 
					'prodi' => $_POST['prodi'], 
				);
				$id_kelas = $_POST['id_kelas'];
				$this->admin->proses_edit_kelas($data,$id_kelas);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_kelas')."';</script>";
			}
			public function hapus_kelas($id){
				$this->admin->proses_hapus_kelas($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_kelas')."';</script>";
			}

		/**
=====================================================================================================================================
DATA matakuliah
===================================================================================================================================== 
*/
			public function lihat_matakuliah()
			{
				$data['data'] = $this->admin->lihat_matakuliah();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/matakuliah/V_lihat_matakuliah');
				$this->load->view('footer');
			}

			public function tambah_matakuliah()
			{
				$data['prodi'] = $this->admin->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Matakuliah/V_tambah_matakuliah');
				$this->load->view('footer');
			}



			public function proses_tambah_matakuliah()
			{
				$data = array(
					'matakuliah' => $_POST['matakuliah'],
					'prodi' => $_POST['prodi'], 
				);

				$this->admin->proses_tambah_matakuliah($data);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_matakuliah')."';</script>";
			}

				public function edit_matakuliah($id_matakuliah)
			{

				$data['dt'] = $this->admin->lihat_matakuliah($id_matakuliah);
				$data['prodi'] = $this->admin->get_prodi();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Matakuliah/V_edit_matakuliah');
				$this->load->view('footer');
			}

			public function proses_edit_matakuliah()
			{
				$data = array(
					'matakuliah' => $_POST['matakuliah'],
					'prodi' => $_POST['prodi'],
				);
				$id_matakuliah = $_POST['id_matakuliah'];
				$this->admin->proses_edit_matakuliah($data,$id_matakuliah);
				echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_matakuliah')."';</script>";
			}
			public function hapus_matakuliah($id){
				$this->admin->proses_hapus_matakuliah($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_matakuliah')."';</script>";
			}

		/**
=====================================================================================================================================
DATA Media
===================================================================================================================================== 
*/
			public function lihat_media()
			{
				$data['data'] = $this->admin->lihat_media();
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Media/V_lihat_media');
				$this->load->view('footer');
			}

			public function tambah_media()
			{
				
				$this->load->view('head');
				$this->load->view('admin/menu');
				$this->load->view('admin/Media/V_tambah_media');
				$this->load->view('footer');
			}


public function proses_tambah_media()
{
	$config= array('upload_path' => './file/',
		'allowed_types'=> 'jpg|png|jpeg|pdf' 
					);
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload('file')){
		$cover= 'tidak ada data';
		var_dump($this->upload->display_errors());
	}
	else
	{
		$result= $this->upload->data();
		$cover =$result['file_name'];
	}

	 $data = array(
				'nama_media' =>$cover,
				'tanggal_upload' => $_POST['tanggal_upload'], 
				'status' => $_POST['status'], 
					
		        );
	

            $this->admin->proses_tambah_media($data);
           echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_media')."';</script>";
}


	// 		public function proses_tambah_media()
 //    {
 //    	$this->load->library('upload');
	// 	$config['upload_path'] = './upload/'; //path folder
 //        $config['allowed_types'] = 'pdf|jpg|png|bmp'; //type yang dapat diakses bisa anda sesuaikan
 //        //$config['max_size'] = '42048'; //maksimum besar file 2M
 //        //$config['max_width']  = '5000'; //lebar maksimum 5000 px
	// //	$config['max_height']  = '5000'; //tinggi maksimu 5000 px
	// 	//$config['overwrite']  = TRUE; //tinggi maksimu 5000 px
 //        $this->upload->initialize($config);
 //        if($_FILES['file']['name'])
	// 	{
	// 		if ($this->upload->do_upload('file')){
	// 			$dokumen = $this->upload->data();
	// 	        $data = array(
	// 			'nama_media' =>$dokumen['file_name'],
	// 			'tanggal_upload' => $_POST['tanggal_upload'], 
	// 			'status' => $_POST['status'], 
					
	// 	        );
	

 //            $this->admin->proses_tambah_media($data);
 //           echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_media')."';</script>";
 //        	} else {
 //        	echo "<script language='javascript'>alert('Foto terlalu besar'); document.location='". base_url('admin/lihat_media')."';</script>";
 //        	}
	// 		//helper_log("add", "Menambah Daftar Pengguna");
	// 		}else{
	// 		echo "<script language='javascript'>alert('Gagal upload'); document.location='". base_url('admin/lihat_media')."';</script>";
	// 	}
        
 //    }

				public function edit_media($id_media)
			{

				$data['dt'] = $this->admin->lihat_media($id_media);
				$this->load->view('head',$data);
				$this->load->view('admin/menu');
				$this->load->view('admin/Media/V_edit_media');
				$this->load->view('footer');
			}

			public function proses_edit_media($id)
{
	$config= array('upload_path' => './file/',
		'allowed_types'=> 'jpg|png|jpeg|pdf' 
					);
	$this->load->library('upload',$config);
	if(!$this->upload->do_upload('file')){
		$cover= 'tidak ada data';
		var_dump($this->upload->display_errors());
	}
	else
	{
		$result= $this->upload->data();
		$cover =$result['file_name'];
	}

	 $data = array(
				'nama_media' =>$cover,
				'tanggal_upload' => $_POST['tanggal_upload'], 
				'status' => $_POST['status'], 
					
		        );
	

     $this->admin->proses_edit_media($data, $id);
           echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_media')."';</script>";
}




  //   {

  //   	$this->load->library('upload');
		// $config['upload_path'] = './upload/'; //path folder
  //       $config['allowed_types'] = 'pdf|jpg|png|bmp|jpeg'; //type yang dapat diakses bisa anda sesuaikan
  //       $config['max_size'] = '2048'; //maksimum besar file 2M
  //       $config['max_width']  = '5000'; //lebar maksimum 5000 px
		// $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		// $config['overwrite']  = TRUE; //tinggi maksimu 5000 px
  //       $this->upload->initialize($config);
    	
  //        $data = array(
		// 		'tanggal_upload' => $_POST['tanggal_upload'], 
		// 		'status' => $_POST['status'], 
  //       );
  //        $this->admin->proses_edit_media($data, $id);

  //        if($this->input->post('remove_photo')) // if remove photo checked
  //       {
  //           if(file_exists('upload/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
  //               unlink('upload/'.$this->input->post('remove_photo'));
  //           $data['nama_media'] = '';
  //       }

  //       if(!empty($_FILES['file']['name']))
		// {
		// 	if ($this->upload->do_upload('file')){

		// 		$person = $this->admin->get_id_media($id);
  //           	if(file_exists('upload/'.$person->nama_media) && $person->nama_media)
  //               unlink('upload/'.$person->nama_media);

		// 		$dokumen = $this->upload->data();
		//         $data['nama_media'] = $dokumen['file_name'];
	
		        
  //          $this->admin->proses_edit_media($data, $id);
		// 	//helper_log("edit", "Merubah Daftar Pengguna");
  //          echo "<script language='javascript'>alert('Data Berhasil Disimpan'); document.location='". base_url('admin/lihat_media')."';</script>";
  //       	} else {
  //       	echo "<script language='javascript'>alert('Foto terlalu besar'); document.location='". base_url('admin/lihat_media')."';</script>";
  //       	}
		// 	//helper_log("add", "Menambah Daftar Pengguna");
		// 	}else{
		// 	echo "<script language='javascript'>alert('Gagal upload'); document.location='". base_url('admin/lihat_media')."';</script>";
		// } }

            
  

			
			public function hapus_media($id){
				$this->admin->proses_hapus_media($id);
				echo "<script language='javascript'>alert('Data Berhasil dihapus'); document.location='". base_url('admin/lihat_media')."';</script>";
			}



	
		}
 ?>
