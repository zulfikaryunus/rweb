<?php 
/*Pengontrol adalah jantung dari aplikasi Anda, karena mereka menentukan bagaimana permintaan HTTP harus ditangani. */
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal');
 
		$data = array(
			'nama' => $nama,
			'nik' => $nik,
			'alamat' => $alamat,
			'tanggal' => $tanggal
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$nik = $this->input->post('nik');
	$alamat = $this->input->post('alamat');
	$tanggal = $this->input->post('tanggal');
 
	$data = array(
		'nama' => $nama,
		'nik' => $nik,
		'alamat' => $alamat,
		'tanggal' => $tanggal
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}
 
}