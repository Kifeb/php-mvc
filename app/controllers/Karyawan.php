<?php

class Karyawan extends Controller{
    public function index(){
        $data["judul"] = "Daftar Karyawan";
        $data["karyawan"] = $this->model("Karyawan_model")->getKaryawan();

        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data["judul"] = "Detail Karyawan";
        $data["karyawan"] = $this->model("Karyawan_model")->getKaryawanById($id);

        $this->view('templates/header', $data);
        $this->view('karyawan/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'karyawan');
            exit;
        } else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'karyawan');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Karyawan_model')->hapusDataKaryawan($id) > 0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: '. BASEURL .'karyawan');
            exit;
        } else{
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: '. BASEURL .'karyawan');
            exit;
        }
    }

    public function getUbah(){
        echo json_encode($this->model('Karyawan_model')->getKaryawanById($_POST['id']));
    }

    public function ubah(){
        if($this->model('Karyawan_model')->ubahDataKaryawan($_POST) > 0){
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: '. BASEURL .'karyawan');
            exit;
        } else{
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: '. BASEURL .'karyawan');
            exit;
        }
    }

    public function cari()
    {
        $data["judul"] = "Daftar Karyawan";
        $data["karyawan"] = $this->model("Karyawan_model")->cariKaryawan();

        $this->view('templates/header', $data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }
}