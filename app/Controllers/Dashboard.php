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

        $model = new Categoria();

        $data = [
            'categoria' => $model->search()
        ];

        helper('form');
        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/cadastro', $data);
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
        $calcadoModel = new Calcado();
        $categoria = new Categoria();

        $listaCategorias = [
            'categoria' => $categoria->search()
        ];
        
        $rules = [
            'descricao' => 'required|min_length[10]|max_length[100]',
            'preco' => 'required',
            'qtde' => 'required'
        ];
        
        if ($this->validate($rules)) {

            $calcadoModel->save([
                'id' => $this->request->getVar('id'),
                'descricao' => $this->request->getVar('descricao'),
                'preco' => $this->request->getVar('preco'),
                'qtde' => $this->request->getVar('qtde')
            ]);

            $data['sucess'] = "Sucesso";
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro', $data, $listaCategorias);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/cadastro', $listaCategorias);
            echo view('templates/footer');
        }
    }

    public function updateCalcado($id = null) {
        $model = new Calcado();

        $data['calcado'] = $model->search($id);

        $categoria = new Categoria();

        $listaCategorias = [
            'categoria' => $categoria->search()
        ];
        
        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/cadastro', $data, $listaCategorias);
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

    public function deleteCalcado($id = null) {

        $model = new Calcado();
        $model->delete($id);
        $this->searchCalcado();
        echo view('templates/dashboard/ModalAlertDeletado');
    }

    # metodos para categoria se encontram aqui

    public function searchCategoria() {
        $model = new Categoria();

        $data = [
            'categoria' => $model->search()
        ];

        //views para exibir categorias entram aqui;
        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/searchCategoria', $data);
        echo view('templates/footer');
    }

    public function cadastroCategoria() {

        helper('form');
        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/CreateCategoria');
        echo view('templates/footer');
    }

    public function updateCategoria($id = null) {
        $model = new Categoria();

        $data['categoria'] = $model->search($id);

        echo view('templates/header');
        echo view('templates/dashboard/Sidemenu');
        echo view('dashboard/CreateCategoria', $data);
        echo view('templates/footer');
    }

    public function saveCategoria() {
        helper('form');
        $model = new Categoria();
        $rules = [
            'descricao' => 'required|min_length[2]|max_length[100]',
        ];
        if ($this->validate($rules)) {

            $model->save([
                'id' => $this->request->getVar('id'),
                'descricao' => $this->request->getVar('descricao')
            ]);
            $data['sucess'] = "Salvo com sucesso.";
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/CreateCategoria', $data);
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('templates/dashboard/Sidemenu');
            echo view('dashboard/CreateCategoria');
            echo view('templates/footer');
        }
    }

    public function deleteCategoria($id = null) {

        $model = new Categoria();
        $model->delete($id);
        $this->searchCategoria();
        echo view('templates/dashboard/ModalAlertDeletado');
    }

}
