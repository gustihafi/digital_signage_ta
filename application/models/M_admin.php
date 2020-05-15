<?php 
/**
* 
*/
class M_admin extends CI_Model
{
	

/**
=====================================================================================================================================
DATA GOLONGAN
===================================================================================================================================== 
*/
	public function lihat_golongan($id_golongan='')
	{
		if ($id_golongan =='') {
			return $this->db->get('golongan')->result_array();
		}else{
			$this->db->where('id_golongan',$id_golongan);
			return $this->db->get('golongan')->row_array();
		}
	}
	public function proses_tambah_golongan($data)
	{
		$this->db->insert('golongan',$data);
	}
	public function proses_edit_golongan($data,$id_golongan)
	{
		$this->db->where('id_golongan',$id_golongan);
		$this->db->update('golongan',$data);
	}
	public function proses_hapus_golongan($id){
		$where = array(
			'id_golongan' => $id
			);
		$this->db->where($where);
		$this->db->delete('golongan');
	}

/**
=====================================================================================================================================
DATA UNIT
===================================================================================================================================== 
*/
	
	public function lihat_unit($id_unit='')
	{
		if ($id_unit =='') {
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan")->result_array();

		}else{
			
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan where unit.id_unit='$id_unit'")->row_array();
		}
	}
		public function proses_tambah_unit($data)
	{
		$this->db->insert('unit',$data);
	}

	public function proses_edit_unit($data,$id_unit)
	{
		$this->db->where('id_unit',$id_unit);
		$this->db->update('unit',$data);
	}

	/**
=====================================================================================================================================
DATA AKUN
===================================================================================================================================== 
*/
public function lihat_akun($id_akun='')
	{
		if ($id_akun =='') {
			return $this->db->query("SELECT akun.id_akun,akun.level,akun.username,akun.password, unit.id_unit,unit.nama_unit from unit join akun on unit.id_unit=akun.id_unit")->result_array();

		}else{
			
			return $this->db->query("SELECT akun.id_akun,akun.username,akun.level,akun.password, unit.id_unit,unit.nama_unit from unit join akun on unit.id_unit=akun.id_unit where akun.id_akun='$id_akun'")->row_array();
		}
	}
 	public function proses_tambah_akun($data)
	{
		$this->db->insert('akun',$data);
	}
	public function proses_edit_akun($data,$id_akun)
	{
		$this->db->where('id_akun',$id_akun);
		$this->db->update('akun',$data);
	}



	/**
=====================================================================================================================================
DATA Agenda
===================================================================================================================================== 
*/

public function lihat_agenda($id_agenda='')
	{
		if ($id_agenda =='') {
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish,  unit.id_unit,unit.nama_unit from unit join agenda on unit.id_unit=agenda.id_unit ")->result_array();

		}else{
			
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish, unit.id_unit,unit.nama_unit, agenda.persetujuan from unit join agenda on unit.id_unit=agenda.id_unit where agenda.id_agenda='$id_agenda'")->row_array();
		}

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
					'status' => 'Publish',
					'tanggal_pengajuan' => date('Y-m-d')

				);
		$this->db->insert('agenda',$data);
		$id_agenda = $this->db->insert_id();
		$jum=count($_POST['id_display']); 

		for ($i=0; $i < $jum ; $i++) { 
			$dt = array(
				'id_display_agenda' => '' ,
				'id_agenda'=>$id_agenda,
				'id_display' => $_POST['id_display'][$i]
			);

			$this->db->insert('display_agenda',$dt);
		}

	}

	public function proses_edit_agenda($data,$id_agenda)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('agenda',$data);
		$this->db->where('id_agenda',$id_agenda);
		$this->db->delete('display_agenda');
		$jum=count($_POST['id_display']); 

		for ($i=0; $i < $jum ; $i++) { 
			$dt = array(
				'id_display_agenda' => '' ,
				'id_agenda'=>$id_agenda,
				'id_display' => $_POST['id_display'][$i]
			);

			$this->db->insert('display_agenda',$dt);
		}
	}

	public function proses_hapus_agenda($id){
		$where = array(
			'id_agenda' => $id
			);
		$this->db->where($where);
		$this->db->delete('agenda');
	}

	public function proses_hapus_akun($id){
		$where = array(
			'id_akun' => $id
			);
		$this->db->where($where);
		$this->db->delete('akun');
	}



	/**
=====================================================================================================================================
DATA DISPLAY
===================================================================================================================================== 
*/

public function lihat_display_edit($where){
	return $this->db->get_where('display',$where);
}

public function lihat_display($id_display='')
	{
		if ($id_display =='') {
			return $this->db->get('display')->result_array();
		}else{
			$this->db->where('id_display',$id_display);
			return $this->db->get('display')->row_array();
		}
	}

		public function proses_tambah_display($data)
	{
		$this->db->insert('display',$data);
	}

		public function proses_edit_display()
	{
		$id = $this->input->post('id_display');
		$nama = $this->input->post('display');

		$data = array(
			'id_display' => $id,
			'display' => $nama, 
					
		);
		$where = array(
			'id_display' => $id
			);
		$this->db->where($where);
		$this->db->update('display',$data);
	}
	

	public function delete($id){
		$where = array(
			'id_display' => $id
			);
		$this->db->where($where);
		$this->db->delete('display');
	}

		/**
=====================================================================================================================================
DATA Persetujuan
===================================================================================================================================== 
*/

public function lihat_persetujuan($id_agenda='')
	{
		if ($id_agenda =='') {
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish, unit.id_unit,unit.nama_unit,agenda.approve,agenda.persetujuan,display.display from unit join agenda on unit.id_unit=agenda.id_unit join display on display.id_display=agenda.id_display where agenda.persetujuan = '1'")->result_array();

		}else{
			
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish, unit.id_unit,unit.nama_unit, agenda.persetujuan from unit join agenda on unit.id_unit=agenda.id_unit where agenda.id_agenda='$id_agenda'")->row_array();
		}

	}

	

	public function proses_edit_persetujuan($data,$id_agenda)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('agenda',$data);
	}

	public function proses_approve_persetujuan($data,$id_agenda)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('agenda',$data);
	}


	/**
=====================================================================================================================================
DATA Informasi
===================================================================================================================================== 
*/
	public function lihat_informasi($id_informasi='')
	{
		if ($id_informasi =='') {
			return $this->db->get('informasi')->result_array();
		}else{
			$this->db->where('id_informasi',$id_informasi);
			return $this->db->get('informasi')->row_array();
		}
	}
	public function proses_tambah_informasi($data)
	{
		$this->db->insert('informasi',$data);
	}
	public function proses_edit_informasi($data,$id_informasi)
	{
		$this->db->where('id_informasi',$id_informasi);
		$this->db->update('informasi',$data);
	}
	public function proses_hapus_informasi($id){
		$where = array(
			'id_informasi' => $id
			);
		$this->db->where($where);
		$this->db->delete('informasi');
	}


	/**
=====================================================================================================================================
DATA Prodi
===================================================================================================================================== 
*/
	public function lihat_prodi($id_prodi='')
	{
		if ($id_prodi =='') {
			return $this->db->get('prodi')->result_array();
		}else{
			$this->db->where('id_prodi',$id_prodi);
			return $this->db->get('prodi')->row_array();
		}
	}
	public function proses_tambah_prodi($data)
	{
		$this->db->insert('prodi',$data);
	}
	public function proses_edit_prodi($data,$id_prodi)
	{
		$this->db->where('id_prodi',$id_prodi);
		$this->db->update('prodi',$data);
	}
	public function proses_hapus_prodi($id){
		$where = array(
			'id_prodi' => $id
			);
		$this->db->where($where);
		$this->db->delete('prodi');
	}


	/**
=====================================================================================================================================
DATA matakuliah
===================================================================================================================================== 
*/
	public function lihat_matakuliah($id_matakuliah='')
	{
		if ($id_matakuliah =='') {
			return $this->db->get('matakuliah')->result_array();
		}else{
			$this->db->where('id_matakuliah',$id_matakuliah);
			return $this->db->get('matakuliah')->row_array();
		}
	}
	public function proses_tambah_matakuliah($data)
	{
		$this->db->insert('matakuliah',$data);
	}
	public function proses_edit_matakuliah($data,$id_matakuliah)
	{
		$this->db->where('id_matakuliah',$id_matakuliah);
		$this->db->update('matakuliah',$data);
	}
	public function proses_hapus_matakuliah($id){
		$where = array(
			'id_matakuliah' => $id
			);
		$this->db->where($where);
		$this->db->delete('matakuliah');
	}


	/**
=====================================================================================================================================
DATA kelas
===================================================================================================================================== 
*/
	public function lihat_kelas($id_kelas='')
	{
		if ($id_kelas =='') {
			return $this->db->get('kelas')->result_array();
		}else{
			$this->db->where('id_kelas',$id_kelas);
			return $this->db->get('kelas')->row_array();
		}
	}
	public function proses_tambah_kelas($data)
	{
		$this->db->insert('kelas',$data);
	}
	public function proses_edit_kelas($data,$id_kelas)
	{
		$this->db->where('id_kelas',$id_kelas);
		$this->db->update('kelas',$data);
	}
	public function proses_hapus_kelas($id){
		$where = array(
			'id_kelas' => $id
			);
		$this->db->where($where);
		$this->db->delete('kelas');
	}
	

	public function get_prodi()
    {
        $query = $this->db->order_by('id_prodi', 'ASC')->get('prodi');
        if($query->num_rows() > 0){
            $dropdown[''] = 'Pilih Prodi';
            foreach ($query->result() as $row)
            {
                $dropdown[$row->id_prodi] = $row->prodi;
            }
        }else{
            $dropdown[''] = 'Belum Ada Data';
        }
        return $dropdown;
    }

	
}
?>