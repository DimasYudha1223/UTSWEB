<?php

session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORUM KATING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Forum Kating</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="./about.php" class="nav-link active" aria-current="page" href="#">Tentang</a>
          </li>
        </ul>
        <p class="mb-0 me-3"><?= $_SESSION['email'] ?></p>
        <a href="./logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </nav>
  <div class="container" style="height: 100vh;">
    <div class="card mt-4">
      <div class="card-header">
        <h4 class="card-title">Tambah Informasi</h4>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input name="date" type="date" class="form-control" id="date" aria-describedby="date">
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Angkatan</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Semua</option>
              <option value="1">2019</option>
              <option value="2">2021</option>
              <option value="3">2022</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Lampiran</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <button type="submit" class="btn btn-primary w-100">Simpan</button>
        </form>

      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>