<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of Sacola
 *
 * @author ruan2
 */
use CodeIgniter\Model;

class Sacola extends Model {

    protected $table = "sacola";
    protected $primaryKey = "id_sacola";
    protected $allowedFields = ['id_cliente', 'id_calcado', 'qtde', 'tamanho_calcado', 'desconto'];

    public function search($id_cliente = null) {
        if ($id_cliente == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id_cliente' => $id_cliente])->find();
    }

    public function aumentarQuantidade($idSacola, $qtde) {
        $this->save([
            'id_sacola' => $idSacola,
            'id_cliente' => session()->get('id'),
            'qtde' => $qtde
        ]);
    }

}
