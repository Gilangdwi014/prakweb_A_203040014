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
  <title>Ubah Data buku</title>
</head>

<body>
  <h3>Form Ubah Data buku</h3>

  <form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" id = "id" value="<?= $buku['id']; ?>">
    <ul>
      <li>
        <label>
          Judul Buku :
          <input type="text" name="judul_buku" autofocus required value="<?= $buku['judul_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Penulis Buku :
          <input type="text" name="penulis_buku" required value="<?= $buku['penulis_buku']; ?>">
        </label>
      </li>

      <li>
        <label>
          Tahun Terbit :
          <input type="text" name="tahun_terbit" required value="<?= $buku['tahun_terbit']; ?>">
        </label>
      </li>

      <li>
        <input type="hidden" name="gambar-lama" value="<?= $buku['gambar']; ?>">
        <label for="gambar">Gambar Buku : </label>
          <input type="file" id = "id" name="gambar" class="gambar" onchange="previewImage()">
        <img src="img/<?= $buku['gambar']; ?>" width="120" style="display: block;" class="img-preview">
      </li>

      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>