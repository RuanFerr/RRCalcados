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
class ClienteController extends Controller {

    public function save($id = null) {
        
        helper('form');
        $clienteModel = new Cliente();
        
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
            'complemento' => 'min_length[5]|max_length[40]',
            'pais' => 'required|min_length[3]|max_length[20]',
            'estado' => 'required|min_length[4]|max_length[25]',
            'cidade' => 'required|min_length[4]|max_length[25]',
            'cep' => 'required|min_length[8]|max_length[9]',
        ];
        
        //se os campos estiverem de acordo com as regras, insere
        if ($this->validate($rules)) {

            $clienteModel->save([
                'id' => $this->request->getVar('id'),
                'sobrenome' => $this->request->getVar('sobrenome'),
                'cpf' => $this->request->getVar('cpf'),
                'data_nasc' => $this->request->getVar('data_nasc'),
                'telefone' => $this->request->getVar('telefone'),
                'email' => $this->request->getVar('email'),
                'senha' => $this->request->getVar('senha'),
                'endereco' => $this->request->getVar('endereco'),
                'complemento' => $this->request->getVar('complemento'),
                'pais' => $this->request->getVar('pais'),
                'estado' => $this->request->getVar('estado'),
                'cidade' => $this->request->getVar('cidade'),
                'cep' => $this->request->getVar('cep')
            ]);

            $data['sucess'] = "Sucesso";
            echo view('marketplace/header');
            echo view('loja/cadastro-cliente', $data);
            echo view('marketplace/footer');
        } else {
            echo view('marketplace/header');
            echo view('loja/index', $data);
            echo view('marketplace/footer');
        }
    }

    public function validarEmail($email){
        $clientes = new Cliente();
        $listaClientes = $clientes->search();
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

}
