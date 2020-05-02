<?php  

class Mahasiswa extends Controller {

	public function index()
	{
		$data['title'] = "Data Mahasiswa";
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllData();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
	}

	public function detail($id)
	{
		$data['title'] = "Detail Mahasiswa";
		$data['mhs'] = $this->model('Mahasiswa_model')->getData($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
	}

	public function tambah()
	{
		if($this->model('Mahasiswa_model')->tambahData($_POST) > 0) {
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}


?>