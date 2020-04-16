<?php 
/**
* 
*/
class M_mahasiswa extends CI_Model
{

	public function lihat_agenda($id_agenda='')
	{
		if ($id_agenda =='') {
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish, display.display, unit.id_unit,unit.nama_unit, display.id_display from unit join agenda on unit.id_unit=agenda.id_unit join display on display.id_display=agenda.id_display")->result_array();

		}else{
			
			return $this->db->query("SELECT agenda.id_agenda,agenda.nama_agenda,agenda.tanggal_agenda,agenda.tanggal_selesai,agenda.jam_mulai,agenda.jam_mulai,agenda.jam_selesai,agenda.status,agenda.tanggal_pengajuan,agenda.tanggal_publish, display.display, unit.id_unit,unit.nama_unit, display.id_display from unit join agenda on unit.id_unit=agenda.id_unit join display on display.id_display=agenda.id_display where agenda.id_agenda='$id_agenda'")->row_array();
		}

	}

	public function proses_tambah_agenda($data)
	{
		$this->db->insert('agenda',$data);
	}

	public function proses_edit_agenda($data,$id_agenda)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('agenda',$data);
	}
	
}
?>