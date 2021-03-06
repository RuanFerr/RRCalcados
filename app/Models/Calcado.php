<?php

namespace App\Models;

use CodeIgniter\Model;

class Calcado extends Model {

    protected $table = "calcado";
    protected $primaryKey = "id";
    protected $allowedFields = ['nome', 'descricao', 'id_categoria', 'preco', 'qtde', 'status','tamanho', 'breve_descricao', 
        'largura', 'altura','profundidade', 'peso', 'qualidade', 'tempo_duracao', 'tipo_embalagem', 'contem', 'url_img'];
    
    #Campos:
    #nome
    #descricao
    #preco
    #qtde
    #id_categoria
    #
    #possivelmente haverão mais. PERGUNTE
    #
    #ocultar ao inves de deletar; marcar com tempo
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

    public function searchCategoria($id_categoria) {
        return $this->asArray()->where(['id_categoria' => $id_categoria])->find();
    }
    
    public function remove($id = null) {
        
    }

}
