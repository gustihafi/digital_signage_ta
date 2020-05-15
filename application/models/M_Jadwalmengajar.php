<?php 
/**
* 
*/
class M_jadwalmengajar extends CI_Model
{
	



	/**
=====================================================================================================================================
DATA Agenda
===================================================================================================================================== 
*/

public function lihat_jadwalmengajar($id_jadwalmengajar='')
	{
		if ($id_jadwalmengajar =='') {
			return $this->db->get('jadwal_mengajar')->result_array();
		}else{
			$this->db->where('id_jadwal',$id_jadwalmengajar);
			return $this->db->get('jadwal_mengajar')->row_array();
		}
	}
	public function proses_tambah_jadwalmengajar($data)
	{
		$this->db->insert('jadwal_mengajar',$data);
	}
	public function proses_edit_jadwalmengajar($data,$id_jadwalmengajar)
	{
		$this->db->where('id_jadwal',$id_jadwalmengajar);
		$this->db->update('jadwal_mengajar',$data);
	}
	public function proses_hapus_jadwalmengajar($id){
		$where = array(
			'id_jadwal_mengajar' => $id
			);
		$this->db->where($where);
		$this->db->delete('jadwal_mengajar');
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


     public function get_kelas($kota = null)
    {
        $query = $this->db->order_by('id_kelas', 'ASC')->get_where('kelas', array('prodi'=>$kota));
        if($query->num_rows() > 0){
        $dropdown[''] = 'Pilih Kelas';
        foreach ($query->result() as $row)
        {
            $dropdown[$row->id_kelas] = $row->kelas;
        }
        }else{
            $dropdown[''] = 'Belum Ada Data'; 
        }
        return $dropdown;
    }

     public function get_matakuliah($kota = null)
    {
        $query = $this->db->order_by('id_matakuliah', 'ASC')->get_where('matakuliah', array('prodi'=>$kota));
        if($query->num_rows() > 0){
        $dropdown[''] = 'Pilih Mata Kuliah';
        foreach ($query->result() as $row)
        {
            $dropdown[$row->id_matakuliah] = $row->matakuliah;
        }
        }else{
            $dropdown[''] = 'Belum Ada Data'; 
        }
        return $dropdown;
    }

	public function get_by_id($id)
    {
        $this->db->from('jadwal_mengajar');
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        return $query->row();
    }

}
?>