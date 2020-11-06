<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calcado;
use App\Models\Categoria;

/**
 * Description of Admin
 *
 * @author ruan2
 */
class Admin extends Controller {
    #codigo de telas aqui

    public function index() {

        echo view('marketplace/header');
        echo view("templates/marketplace/sections/menuPrincipalSuperior");
        echo view('loja/cadastrar-produtos');
        echo view('marketplace/footer');
    }

    public function cadastroCalcado() {

        $model = new Categoria();

        $data = [
            'categoria' => $model->search()
        ];

        helper('form');
        echo view('marketplace/header');
        echo view("templates/marketplace/sections/menuPrincipalSuperior");
        echo view('loja/cadastrar-produtos', $data);
        echo view('marketplace/footer');
    }

    public function searchCalcado() {
        $model = new Calcado();

        $data = [
            'calcado' => $model->search()
        ];

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/searchCalcado', $data);
        echo view('templates/footer');
    }

    public function ajuda() {
        echo view('marketplace/header');
        echo view("templates/marketplace/sections/menuPrincipalSuperior");
        echo view('loja/ajuda');
        echo view("marketplace/footer");
    }

}
