<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calcado;
use App\Models\Categoria;

class Dashboard extends Controller {

    public function index() {

        echo view('marketplace/header');
        echo view('loja/index');
        echo view('marketplace/footer');
    }

    # metodos para calçado se encontram aqui
    # 
    # public function cadastroCalcado() {
    #     $model = new Categoria();
    #     $data = [
    #         'categoria' => $model->search()
    #     ];
    #     helper('form');
    #     echo view('templates/header');
    #     echo view('templates/dashboard/Sidemenu');
    #     echo view('dashboard/cadastro', $data);
    #     echo view('templates/footer');
    # }

    public function cadastroCalcado() {
        $model = new Categoria();

        $data = [
            'categoria' => $model->search()
        ];
        helper('form');
        echo view("marketplace/header");
        echo view("loja/cadastrar-produtos", $data);
        echo view("marketplace/footer");
    }

    #para outra tela

    public function enviosAdm() {

        
        
        echo view('marketplace/header');
        echo view('loja/envios-adm');
        echo view('marketplace/footer');
    }

    public function buscarProdutos() {
        helper('form');

        $db = db_connect();

        $builder = $db->table('calcado c');

        $termo = "%" . $this->request->getVar('') . "%";

        $query = $builder->where(['nome' => $termo]);

        echo view('marketplace/header');
        echo view('loja/listar-buscar-calcado-adm');
        echo view('marketplace/footer');
    }

    public function gerenciarProdutos() {
        echo view('marketplace/header');
        echo view('loja/gerenciar-produtos');
        echo view('marketplace/footer');
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
            'qtde' => 'required',
            'id_categoria' => 'required',
            'nome' => 'required|min_length[8]|max_length[50]',
            'status' => 'required|max_length[15]',
            'breve_descricao' => 'required|min_length[10]|max_length[60]',
            'largura' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'profundidade' => 'required',
            'qualidade' => 'required|max_length[10]',
            'tempo_duracao' => 'required|max_length[15]',
            'tipo_embalagem' => 'required',
            'contem' => 'required|max_length[100]'
        ];

        if ($this->validate($rules)) {

        $calcadoModel->save([
            'id' => $this->request->getVar('id'),
            'descricao' => $this->request->getVar('descricao'),
            'breve_descricao' => $this->request->getVar('breve_descricao'),
            'preco' => $this->request->getVar('preco'),
            'qtde' => $this->request->getVar('qtde'),
            'id_categoria' => $this->request->getVar('id_categoria'),
            'altura' => $this->request->getVar('altura'),
            'largura' => $this->request->getVar('largura'),
            'peso' => $this->request->getVar('peso'),
            'profundidade' => $this->request->getVar('profundidade'),
            'qualidade' => $this->request->getVar('qualidade'),
            'tempo_duracao' => $this->request->getVar('tempo_duracao'),
            'tipo_embalagem' => $this->request->getVar('tipo_embalagem'),
            'contem' => $this->request->getVar('contem'),
            'imagem_calcado' => $this->request->getFile('imagem_calcado')
        ]);

        echo view('marketplace/header');
        echo view('loja/cadastrar-produtos', $listaCategorias);
        echo view('marketplace/footer');
        echo view('templates/dashboard/ModalAlertCadastroConcluido');
        echo $this->request->getFile('imagem_calcado');
        } else {
            $this->cadastroCalcado();
            echo view('templates/dashboard/ModalAlertCadastroerro');
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
