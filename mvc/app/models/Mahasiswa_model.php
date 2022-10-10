<?php
class Mahasiswa_model
{

  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // private $mhs = [
  //   [
  //     "nama" => "Gilang",
  //     "nrp" => "203040014",
  //     "email" => "gilang@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ],
  //   [
  //     "nama" => "Dwi",
  //     "nrp" => "203040015",
  //     "email" => "dwi@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ],
  //   [
  //     "nama" => "adira",
  //     "nrp" => "203040016",
  //     "email" => "adira@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ]
  // ];


    public function getAllMahasiswa()
  {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
  }
    public function getMahasiswaById($id)
  {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
  }

  public function tambahDataMahasiswa($data)
  {
      $query = "INSERT INTO mahasiswa
                VALUES
                ('', :nama, :nrp, :email, :jurusan)";

      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nrp', $data['nrp']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);

      $this->db->execute();

      return $this->db->rowCount();
    
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }
}