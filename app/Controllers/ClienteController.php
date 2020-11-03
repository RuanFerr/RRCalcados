<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of Cliente
 *
 * @author ruan2
 */
use CodeIgniter\Controller;
use \App\Models\Cliente;
use \App\Models\Sacola;

class ClienteController extends Controller {

    public function save($id = null) {

        helper('form');
        $clienteModel = new Cliente();
        $email = $this->request->getVar('email');
        //regras a serem cumpridas para inserir no banco
        $rules = [
            'nome' => 'required|min_length[2]|max_length[40]',
            'sobrenome' => 'required|min_length[2]|max_length[40]',
            'cpf' => 'required|min_length[11]|max_length[14]',
            'data_nasc' => 'required|min_length[8]|max_length[10]',
            'telefone' => 'required|min_length[8]|max_length[15]',
            'email' => 'required|min_length[8]|max_length[40]',
            'senha' => 'required|min_length[8]|max_length[16]',
            'endereco' => 'required|min_length[5]|max_length[40]',
            'complemento' => 'max_length[40]',
            'pais' => 'required|min_length[3]|max_length[20]',
            'estado' => 'required|min_length[4]|max_length[25]',
            'cidade' => 'required|min_length[4]|max_length[25]',
            'cep' => 'required|min_length[8]|max_length[9]',
        ];

        //se os campos estiverem de acordo com as regras, insere
        if ($this->validate($rules)) {

            $clienteModel->save([
                'id' => $this->request->getVar('id'),
                'nome' => $this->request->getVar('nome'),
                'sobrenome' => $this->request->getVar('sobrenome'),
                'cpf' => $this->request->getVar('cpf'),
                'data_nasc' => $this->request->getVar('data_nasc'),
                'telefone' => $this->request->getVar('telefone'),
                'email' => $this->request->getVar('email'),
                'senha' => md5($this->request->getVar('senha')),
                'endereco' => $this->request->getVar('endereco'),
                'complemento' => $this->request->getVar('complemento'),
                'pais' => $this->request->getVar('pais'),
                'estado' => $this->request->getVar('estado'),
                'cidade' => $this->request->getVar('cidade'),
                'cep' => $this->request->getVar('cep'),
                'tipo' => 'cli'
            ]);

            #tela de confirmação de email aqui; algoritmo ainda a ser desenvolvido
            $this->enviarEmailConfirmacao($email);
        } else {
            echo view('marketplace/header');
            echo view('loja/cadastro-cliente');
            echo view('marketplace/footer');
        }
    }

    public function validarEmail($email) {
        $clientes = new Cliente();
        $listaClientes = $clientes->searchEmail($email);
        return !is_array($listaClientes);
    }

    public function confirmacao($email) {
        
    }

    public function cancelarConta() {
        
    }

    public function recuperarSenha($email) {
        
    }

    //metodos de telas
    public function cadastro() {

        echo view("marketplace/header");
        echo view("loja/cadastro-cliente");
        echo view("marketplace/footer");
    }

    public function perfil() {
        
    }

    public function salvarNovaSenha() {
        
    }

    public function listarClientes() {
        
    }

    public function enviarEmailConfirmacao($email) {



        #depois de enviar
        $this->avisoConfirmacaoCadastro();
    }

    public function avisoConfirmacaoCadastro() {

        echo view("marketplace/header");
        echo view("loja/aviso-confirmacao-cadastro");
        echo view("marketplace/footer");
    }

    public function sacola() {

        if ($this->clienteLogged()) {
            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('loja/sacola');
            echo view('marketplace/footer');
        } else {
            redirect()->to(site_url('home/login'));
        }
    }

    public function addSacola($idCalcado = null) {
        if ($this->clienteLogged()) {
            $calcadoModel = new \App\Models\Calcado();
            $calcado = $calcadoModel->search($idCalcado);
            $sacola = new Sacola();

            $itens = $sacola->search(session()->get('id'));

            if (!$this->atualizarSacola($itens, $idCalcado)) {
                $sacola->save([
                    'id_cliente' => session()->get('id'),
                    'id_calcado' => $calcado['id'],
                    'qtde' => 1,
                    'tamanho_calcado' => $calcado['tamanho'],
                    'desconto' => 0
                ]);
            }
            $data = [
                'calcados' => $sacola->search(session()->get('id'))
            ];

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('loja/sacola', $data);
            echo view('marketplace/footer');

            return redirect()->to(site_url('ClienteController/sacola'));
        } else {
            return redirect()->to(site_url('home/login'));
        }
    }

    public function atualizarSacola($itens, $idCalcado) {
        $sacola = new Sacola();
        foreach ($itens as $itemSacola) {
            if ($itemSacola['id_calcado'] == $idCalcado) {
                $sacola->aumentarQuantidade($itemSacola['id_sacola'], ($itemSacola['qtde'] + 1));
                return true;
            }
        }
        return false;
    }

    //metodo para testar se o cliente está logado
    public function clienteLogged() {
        if (!(session()->get('tipo') == 'cli')) {
            redirect()->to(site_url('home/login'));
            return false;
        }
        return true;
    }

}
