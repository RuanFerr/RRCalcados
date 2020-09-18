<?php

namespace App\Models;

use CodeIgniter\Model;

class Calcado extends Model {

    protected $table = "categoria";
    protected $primaryKey = "id";
    #Campos:
    #descricao
    public function Search($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => id])->first();
    }

}
