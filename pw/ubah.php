<?php

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$buku = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Ubah Data buku</title>
</head>

<body>
  <h3>Form Ubah Data buku</h3>

  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" id = "id" value="<?= $buku['id']; ?>">
    <ul>
      <li>
      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="exampleInputText" name="judul_buku">
      </div>
      </li>

      <li>
      <div class="mb-3">
       <label for="exampleInputText" class="form-label">Penulis Buku</label>
       <input type="Text" class="form-control" id="exampleInputText" name="penulis_buku">
       </div>
      </li>

      <li>
      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Tahun Terbit</label>
        <input type="Text" class="form-control" id="exampleInputText" name="tahun_terbit">
      </div>
      </li>

      <li>
        <input type="hidden" name="gambar-lama" value="<?= $buku['gambar']; ?>">
        <label for="gambar">Gambar Buku : </label>
          <input type="file" id = "id" name="gambar" class="gambar" onchange="previewImage()">
        <img src="img/<?= $buku['gambar']; ?>" width="200" style="display: block;" class="img-preview">
      </li>

      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>