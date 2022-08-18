<div class="container my-3">
<div class="card mx-auto" style="width: 18rem;">
  <img src="<?= BASEURL ?>img/<?= $data["karyawan"]["foto"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data["karyawan"]["name"]  ?></h5>
    <p class="card-text">Saya adalah Seorang <?= $data["karyawan"]["jabatan"] ?> di Kantor</p>
    <p class="card-text fw-italic"><?= $data["karyawan"]["email"] ?></p>
    <a href="#" class="btn btn-primary">Lihat Saya!</a>
  </div>
</div>
</div>