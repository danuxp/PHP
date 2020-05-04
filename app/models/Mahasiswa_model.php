<?php  

class Mahasiswa_model{

	private $table = 'mhs';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllData()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return  $this->db->resultSet();
	}

	public function getData($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_mhs=:id_mhs');
		$this->db->bind('id_mhs', $id);
		return $this->db->single();
	}

	public function tambahData($data) 
	{
		$query = "INSERT INTO mhs VALUES('', :nama_mhs, :j_kelamin, :jurusan, :alamat, :email)";

		$this->db->query($query);
		$this->db->bind('nama_mhs', $data['nama_mhs']);
		$this->db->bind('j_kelamin', $data['j_kelamin']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('email', $data['email']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusData($id)
	{
		$query = "DELETE FROM mhs WHERE id_mhs=:id_mhs";
		$this->db->query($query);
		$this->db->bind('id_mhs', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}
}


?>