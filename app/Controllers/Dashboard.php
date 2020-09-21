<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calcado;
use App\Models\Categoria;

class Dashboard extends Controller {

    public function index() {

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('templates/footer');
        
    }

    # metodos para calçado se encontram aqui
    
    public function cadastroCalcado() {

        helper('form');
        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/cadastro');
        echo view('templates/footer');
        
    }

    public function searchCalcado() {
        $model = new Calcado();

        $data = [
            'calcado' => $model->search()
        ];

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/searchCalcado', $data);
        echo view('templates/footer');
    }

    public function saveCalcado() {
        helper('form');
        $model = new Calcado();
        $rules = [
            'descricao' => 'required|min_length[10]|max_length[100]',
            'preco' => 'required',
            'qtde' => 'required'
        ];
        if ($this->validate($rules)) {

            $model->save([
                'id' => $this->request->getVar('id'),
                'descricao' => $this->request->getVar('descricao'),
                'preco' => $this->request->getVar('preco'),
                'qtde' => $this->request->getVar('qtde')
            ]);
            $data['sucess'] = "Sucesso";
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro', $data);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro');
            echo view('templates/footer');
        }
    }

    public function updateCalcado($id = null) {
        $model = new Calcado();

        $data['calcado'] = $model->search($id);

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/cadastro', $data);
        echo view('templates/footer');
    }

    public function saveUpdateCalcado() {
        helper('form');
        $model = new Calcado();

        $rules = [
            'descricao' => 'required|min_length[10]|max_length[100]',
            'preco' => 'required',
            'qtde' => 'required'
        ];
        if ($this->validate($rules)) {
            $id = $this->request->getVar('id');
            $item = [
                'id' => $this->request->getVar('id'),
                'descricao' => $this->request->getVar('descricao'),
                'preco' => $this->request->getVar('preco'),
                'qtde' => $this->request->getVar('qtde')
            ];
            $model->update($id, $item);
            $data['sucess'] = "Sucesso";
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro', $data);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro');
            echo view('templates/footer');
        }
    }

    public function deleteCalcado($id = null){
        
        $model = new Calcado();
        $model->delete($id);
        $this->searchCalcado();
        echo view('templates/dashboard/ModalAlertDeletado');
    }
    
    # metodos para categoria se encontram aqui
    public function searchCategoria() {
        $model = new Categoria();

        $data = [
            'calcado' => $model->search()
        ];

        //views para exibir categorias entram aqui;
        echo view($data);
    }

}
