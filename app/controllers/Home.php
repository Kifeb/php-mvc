<?php

class Home extends Controller{

    public function index(){
        $data["judul"] = "Homepage";
        // Mengambil datai dari method model $this-model dari Class Controller
        $data["nama"] = $this->model('Users_model')->getUser();
        
        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}