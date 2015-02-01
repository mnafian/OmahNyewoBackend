<?php
class m_omahnyewo extends CI_Model{
	function get_kontrakan(){
	$this->db->select()->from('omahnyewo')->where('omh_key','kon')->order_by('omh_id','desc')->limit(20,0);
	$query=$this->db->get();
	return $query->result_array();
	}
	
	function get_kost(){
	$this->db->select()->from('omahnyewo')->where('omh_key','kost')->order_by('omh_id','desc')->limit(20,0);
	$query=$this->db->get();
	return $query->result_array();
	}

	function get_1_tulisan($idtulisan){
		$this->db->select()->from('artikel')->where(array('aktif'=>1, 'id_tulisan'=>$idtulisan))->order_by('waktu','desc');
		$query=$this->db->get();
		return $query->first_row('array');

	}

	function update_tulisan($idtulisan,$data){
		$this->db->where('id_tulisan',$idtulisan);
		$this->db->update('artikel',$data);
	}

	function delete_tulisan($id){
		$this->db->where('id_tulisan',$id);
		$this->db->delete('artikel');
	}

	function simpan_tulisan($data){
		$this->db->insert('artikel', $data);
	}
}
?>