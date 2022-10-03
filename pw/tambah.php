<?php

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
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
  <title>Tambah Data Buku</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>

  <form method="POST" action="" enctype="multipart/form-data">
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
      
        <label>
          Gambar Buku :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="200" style="display: block;" class="img-preview">
      
        <br></br>

      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
