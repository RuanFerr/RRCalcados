<?php

namespace App\Controllers;

use App\Models\Cliente;

class Home extends BaseController {

    //controller para acessar as telas do marketplace

    public function index() {
        echo view("marketplace/header");
        echo view("loja/Index");
        echo view("marketplace/footer");
    }

    public function catalogo() {
        echo view('marketplace/header');
        echo view("loja/catalogo");
        echo view("marketplace/footer");
    }

    public function login() {

        echo view("marketplace/header");
        echo view("loja/Login");
        echo view("marketplace/footer");
    }

    public function enderecoEnvio() {
        echo view("marketplace/header");
        echo view("loja/endereco-envio");
        echo view("marketplace/footer");
    }

    public function sacola() {
        echo view("marketplace/header");
        echo view("loja/sacola");
        echo view("marketplace/footer");
    }

    public function contato() {
        echo view("marketplace/header");
        echo view("loja/sacola");
        echo view("marketplace/footer");
    }

    public function search() {
        helper('form');

        $db = db_connect();

        $builder = $db->table('calcado c');

        $termo = "%" . $this->request->getVar('') . "%";

        $query = $builder->where(['nome' => $termo]);

        echo view('marketplace/header');
        echo view('loja/listar-buscar-calcado-adm', $query);
        echo view('marketplace/footer');
    }

    //--------------------------------------------------------------------
    # Metodos de operação abaixo

    public function logar() {

        helper('form');

        $email = $this->request->getVar('email');

        $senha = md5($this->request->getVar('senha'));

        $cliente = new Cliente();
        $data = $cliente->login($email, $senha);
        if (!is_array($data)) {
            $this->login();
            echo view('templates/dashboard/modalAlertLoginIncorreto');
        } else {

            session()->set($data);
            if (session()->get('tipo') == 'adm') {
                return redirect()->to(site_url('dashboard/gerenciarProdutos'));
            } else {
                return redirect()->to(site_url('home'));
            }
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to(site_url('home'));
    }

}
