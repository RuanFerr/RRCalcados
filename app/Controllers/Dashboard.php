<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Dashboard extends Controller {

    public function index() {

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('templates/footer');
    }
    public function cadastroCalcado() {

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('templates/dashboard/cadastro');
        echo view('templates/footer');
    }
    

}
