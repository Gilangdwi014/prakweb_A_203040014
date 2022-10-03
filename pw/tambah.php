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
        <label>
          Judul Buku :
          <input type="text" name="judul_buku" autofocus required>
        </label>
      </li>

      <li>
        <label>
          Penulis Buku :
          <input type="text" name="penulis_buku" required>
        </label>
      </li>

      <li>
        <label>
          Tahun Terbit :
          <input type="text" name="tahun_terbit" required>
        </label>
      </li>

      <li>
        <label>
          Gambar Buku :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>

      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

  <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Penulis Buku</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gambar Buku</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>

