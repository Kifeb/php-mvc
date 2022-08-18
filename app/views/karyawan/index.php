<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Daftar Karyawan</h1>

            <div>
                <?php Flasher::flash(); ?>
            </div>

            <!-- Modal Button -->
            <div class="row">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formModal" id="tombolTambah">Tambah Data Karyawan</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?= BASEURL ?>karyawan/cari" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Nama" name="keyword" id="keyword" >
                            <button class="btn btn-primary" type="submit" id="tombolCari" name="tombolCari">Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Data Karyawan -->
            <?php foreach($data["karyawan"] as $kar) : ?>
                <ul class="list-group">
                    <li class="list-group-item mb-2">
                        <?= $kar["name"] ?> 
                        <a href="<?= BASEURL ?>karyawan/hapus/<?= $kar["id"]?>" class="btn btn-sm btn-danger float-end" onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a>
                        <a href="<?= BASEURL ?>karyawan/ubah/<?= $kar["id"]?>" class="btn btn-sm btn-warning float-end mx-2 tampilModal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $kar["id"]; ?>">Ubah</a>
                        <a href="<?= BASEURL ?>karyawan/detail/<?= $kar["id"]?>" class="btn btn-sm btn-primary float-end">Detail</a>
                    </li> 
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>karyawan/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name">
        </div>
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" placeholder="Masukkan Nrp" name="nrp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" placeholder="Masukkan foto" name="foto">
        </div>

        <div class="mb-5">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" id="jabatan" name="jabatan">
                <option value="Junior">Junior</option>
                <option value="Owner">Owner</option>
                <option value="Pelatih">Pelatih</option>
                <option value="Bendahara">Bendahara</option>
                <option value="Advertiser">Advertiser</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>