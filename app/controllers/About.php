<?php  

class About extends Controller
{
	public function index($nama = "Danu", $hobi = "Coding", $umur = 21)
	{
		$data['nama'] = $nama;
		$data['hobi'] = $hobi;
		$data['umur'] = $umur;

		$data['judul'] = 'About';

		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footer');

	}
	
	public function page()
	{
		$data['judul'] = 'Pages';

		$this->view('about/page', $data);
		
	}
}

?>