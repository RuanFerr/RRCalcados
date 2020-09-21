<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model {

    protected $table = "categoria";
    protected $primaryKey = "id";
    protected $allowedFields = ['descricao'];
    #Campos:
    #descricao
    public function Search($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => id])->first();
    }

}
