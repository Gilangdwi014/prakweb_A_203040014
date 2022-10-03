<?php

require 'functions.php';
$buku = query("SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Novel 2022</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  
  <style>
    body{
	background-color:grey;
}
  </style>
  
  <body>
  <nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#"> Daftar Novel 2022</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#"></a>
      </div>
    </div>
  </div>
</nav>
  <br>
  <a class = "btn btn-primary" href="tambah.php">Tambah Buku</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Gambar Buku</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if (empty($buku)) : ?>
        
        <?php endif; ?>
        <?php $i = 1;
        foreach ($buku as $b) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $b["judul_buku"]; ?></td>
            <td><?= $b["penulis_buku"]; ?></td>
            <td><?= $b["tahun_terbit"]; ?></td>
            <td><img src="img/<?= $b['gambar']; ?>" width="150"></td>
            
            <td><a class = "btn btn-warning"href="ubah.php?id=<?= $b['id']; ?>"><i class="bi bi-pen"></i></a> <a class="btn btn-danger" href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm('apakah anda yakin?')"><i class="bi bi-trash"></i></a></button></td>

            </td>
          </tr>
        <?php endforeach; ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>