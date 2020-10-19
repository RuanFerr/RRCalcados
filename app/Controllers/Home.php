<?php

namespace App\Controllers;

class Home extends BaseController {

    //controller para acessar as telas do marketplace

    public function index() {
        echo view("marketplace/header");
        echo view("loja/Index");
        echo view("marketplace/footer");
    }

    public function catalogo() {

        echo view("loja/catalogo");
    }

    public function login() {
        
        echo view("marketplace/header");
        echo view("loja/Login");
        echo view("marketplace/footer");
        
    }

    //--------------------------------------------------------------------
}
