<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use CodeIgniter\Model;

class Cliente extends Model {

    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $allowedFields = ['nome', 'sobrenome', 'cpf', 'data_nasc', 'telefone', 'email', 'senha',
        'endereco', 'complemento', 'pais', 'estado', 'cidade', 'cep'];

    /**
     * nome
     * sobrenome
     * cpf
     * data_nasc
     * telefone
     * email
     * endereco
     * complemento (não obrigatorio)
     * pais (limitado a Brasil)
     * estado (limitado a ceara)
     * cidade
     * cep
     * */
    
    public function search($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
    public function searchEmail($email = null) {
        if ($email == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['email' => $email])->first();
    }
    
    public function login($email, $senha){
        
        return $this->asArray()->where(['email' => $email, 'senha' => $senha]);
        
    }
    
}
