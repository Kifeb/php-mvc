<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL ?>css/bootstrap.css" rel="stylesheet">
    <style>
    ul li:hover{
        background-color: lightblue;
        transition: .2s;
        font-weight: bold;
        color: ;
    }
</style>
    <title>Halaman <?= $data["judul"]; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>">KIFEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASEURL ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL ?>karyawan">Karyawan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>