<?php
class MyController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('MyModel');
        $this->load->helper('url');
    }

    public function index() {
        $data['user'] = $this->MyModel->tampil_data()->result();
        $this->load->view('myview', $data);
    }
    // tambah data ke db
    public function tambah_data(){
        $this->load->view('myinput');
    }
    function tambah_aksi(){
        $nis=$this->input->post('nis');
		$nama = $this->input->post('nama');
        $kelas=$this->input->post('kelas');
        $tanggallahir=$this->input->post('tanggallahir');
        $alamat=$this->input->post('alamat'); 
        $jeniskelamin=$this->input->post('jeniskelamin');
        $agama=$this->input->post('agama');       
	
		$data = array(
			'nis' => $nis,
            'nama' => $nama,
			'kelas' => $kelas,
            'tanggallahir' => $tanggallahir,
            'alamat' => $alamat,
            'jeniskelamin' => $jeniskelamin,
            'agama' => $agama
			);
        // $data berisi array data dan sampingnya nama table
		$this->MyModel->input_data($data,'tabelsiswa');
		redirect('MyController/index');
	}
}