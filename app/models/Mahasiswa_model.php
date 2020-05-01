<?php  

class Mahasiswa_model
{
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMhs()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();

	}

	public function getMhsById($id)
	{
		$this->db->query("SELECT * FROM" . $this->table . "WHERE id_mhs=:id_mhs");
		$this->db->binding('id_mhs', $id);
		return $this->db->single();
	}
}

?>