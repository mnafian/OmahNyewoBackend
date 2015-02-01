<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_home_control extends CI_Controller{

	 function __construct(){  
        parent::__construct();  
        $this->load->model('m_omahnyewo'); //me-load kelas m_omahnyewo pada model  
    }  

	public function index()
	{
		$data['kontrakan']=$this->m_omahnyewo->get_kontrakan();
		$data['kost']=$this->m_omahnyewo->get_kost();
		
		$this->load->view('v_header_asset');
		$this->load->view('v_indexomahnyewo',$data);
		$this->load->view('v_footer');
	}

	function edit_tulisan($id){
		$data['success']=0;
		if($_POST){
			$data_post=array(
				'judul'=>$_POST['omh_nama'],
				'isi'=>$_POST['omh_desc'],
				'aktif'=>$_POST['omh_key'],);
			$this->m_omahnyewo->update_tulisan($id,$data_post);
			$data['success']=1;
		}
		$data['satutulisan']=$this->m_omahnyewo->get_1_tulisan($id);
		$this->load->view('edit_v_indexomahnyewo',$data);
	}

	
    function hapus_tulisan($id){  
            $this->m_omahnyewo->delete_tulisan($id);  
            redirect(base_url()); //untuk kembali ke halaman home  
        }

    function pasang_iklan(){
    	if($_POST){
			$data_post=array(
				'judul'=>$_POST['judul'],
				'isi'=>$_POST['isi'],
				'aktif'=>$_POST['aktif'],);
			$this->m_omahnyewo->simpan_tulisan($data_post);
			$data['success']=1;
			redirect(base_url());
		}
		$this->load->view('v_header_asset');
    	$this->load->view('v_pasangiklan');
		$this->load->view('v_footer');

    }  
}
?>