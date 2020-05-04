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
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function hapus($id)
	{
		if($this->model('Mahasiswa_model')->hapusData($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}


?>