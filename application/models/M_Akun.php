<?php 
/**
* 
*/
class M_Akun extends CI_Model
{
	



	/**
=====================================================================================================================================
DATA Agenda
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

public function get_by_id()
    {
        $this->db->from('akun');
        $this->db->where('id_akun', $this->session->userdata('id_akun'));
        $query = $this->db->get();
        return $query->row();
    }

public function proses_edit_akun($data,$id_akun)
	{
		$this->db->where('id_akun',$id_akun);
		$this->db->update('akun',$data);
	}

	public function lihat_unit($id_unit='')
	{
		if ($id_unit =='') {
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan")->result_array();

		}else{
			
			return $this->db->query("SELECT unit.id_unit,unit.nama_unit, golongan.golongan,golongan.id_golongan from golongan join unit on golongan.id_golongan=unit.id_golongan where unit.id_unit='$id_unit'")->row_array();
		}
	}

	
}
?>