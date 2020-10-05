<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model {

    protected $table = "categoria";
    protected $primaryKey = "id";
    protected $allowedFields = ['descricao'];
    #Campos:
    #descricao 
    #possivelmente haverão mais. PERGUNTE
    #
    #ocultar ao inves de deletar;
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
    public function search($id = null) {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }

}
