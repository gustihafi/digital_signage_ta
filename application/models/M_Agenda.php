<?php 
/**
* 
*/
class M_agenda extends CI_Model
{
	



	/**
=====================================================================================================================================
DATA Agenda
===================================================================================================================================== 
*/

public function lihat_agenda($id_agenda='')
	{
		if ($id_agenda =='') {
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish,  unit.id_unit,unit.nama_unit from unit join agenda on unit.id_unit=agenda.id_unit where agenda.narasumber = '".$this->session->userdata('username')."'")->result_array();

		}else{
			
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish,  unit.id_unit,unit.nama_unit from unit join agenda on unit.id_unit=agenda.id_unit where agenda.id_agenda='$id_agenda'")->row_array();
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
					'status' => 'proses',
					'tanggal_pengajuan' => date('Y-m-d'),
					'narasumber' => $this->session->username('username'),

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


	public function lihat_unit($id_unit='')
	{
		if ($id_unit =='') {
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan")->result_array();

		}else{
			
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan where unit.id_unit='$id_unit'")->row_array();
		}
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
	
}
?>