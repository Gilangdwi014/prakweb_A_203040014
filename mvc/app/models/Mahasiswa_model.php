<?php
class Mahasiswa_model
{
  // database handler
  private $dbh;
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=mvc';
    
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
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
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}