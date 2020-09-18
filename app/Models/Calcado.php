<?php

namespace App\Models;

use CodeIgniter\Model;

class Calcado extends Model {

    protected $table = "calcado";
    protected $primaryKey = "id";

    #Campos:
    #descricao
    #preco
    #qtde
    #id_categoria

    public function search($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => id])->first();
    }

    public function remove($id = null){}
    
    
    
}
