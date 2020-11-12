<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calcado;
use App\Models\Categoria;

class Dashboard extends Controller {

    public function index() {

        echo view('marketplace/header');
        echo view('templates/marketplace/sections/menuPrincipalSuperior');
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
        if ($this->admLogged()) {
            $model = new Categoria();

            $data = [
                'categoria' => $model->search()
            ];
            helper('form');
            echo view("marketplace/header");
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view("loja/cadastrar-produtos", $data);
            echo view("marketplace/footer");
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    #para outra tela

    public function enviosAdm() {

        if ($this->admLogged()) {

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('templates/marketplace/sections/menuGerenciarEnvios');
            echo view('loja/envios-adm');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function pedidosParaEnvio() {

        if ($this->admLogged()) {

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('templates/marketplace/sections/menuGerenciarEnvios');
            echo view('loja/verificar-pedidos-para-envios');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }
    
    public function pedidosEnviados() {

        if ($this->admLogged()) {

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('templates/marketplace/sections/menuGerenciarEnvios');
            echo view('loja/pedidos-enviados');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }
    
     public function pedidosEntregues() {

        if ($this->admLogged()) {

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('templates/marketplace/sections/menuGerenciarEnvios');
            echo view('loja/envios-entregues');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }
    
    public function buscarProdutos() {
        if ($this->admLogged()) {
            helper('form');

            $db = db_connect();

            $builder = $db->table('calcado c');

            $termo = "%" . $this->request->getVar('') . "%";

            $query = $builder->where(['nome' => $termo]);

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('loja/listar-buscar-calcado-adm');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function selecionarDestaquesADM() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('loja/selecao-destques');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function listarDestaquesADM() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('loja/listar-destaques');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function destaquesADM() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('loja/destques-semana');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function criarPromocao() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('loja/criar-promocao');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function verificarVendas() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('loja/verificar-vendas');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function gerenciarProdutos() {
        if ($this->admLogged()) {
            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('loja/gerenciar-produtos');
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function listarCalcadosCadastrados() {
        if ($this->admLogged()) {
            $model = new Calcado();

            $data = [
                'calcados' => $model->search()
            ];

            echo view('marketplace/header');
            echo view('templates/marketplace/sections/menuPrincipalSuperior');
            echo view('templates/marketplace/sections/menuLateralAdm');
            echo view('templates/marketplace/sections/menuGerenciarCalcados');
            echo view('loja/listar-produtos-cadastrados', $data);
            echo view('marketplace/footer');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function saveCalcado() {
        helper('form, url');
        if ($this->admLogged()) {
            #pegando a referencia da imagem
            $img = $this->request->getFile('img');
            $newName = $img->getRandomName();

            #fazendo o envio da imagem       
            $img->move('public/img/product/', $newName);

            $calcadoModel = new Calcado();
            $categoria = new Categoria();
            $listaCategorias = [
                'categoria' => $categoria->search()
            ];

            //regras de inserção no banco
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

            //validação das regras
            if ($this->validate($rules)) {

                $calcadoModel->save([
                    'id' => $this->request->getVar('id'),
                    'nome' => $this->request->getVar('nome'),
                    'descricao' => $this->request->getVar('descricao'),
                    'breve_descricao' => $this->request->getVar('breve_descricao'),
                    'preco' => $this->request->getVar('preco'),
                    'status' => $this->request->getVar('status'),
                    'tamanho' => $this->request->getVar('tamanho'),
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
                    'url_img' => 'public/img/product/' . $newName
                ]);

                $model = new Categoria();

                $data = [
                    'categoria' => $model->search()
                ];
                echo view("marketplace/header");
                echo view('templates/marketplace/sections/menuPrincipalSuperior');
                echo view('templates/marketplace/sections/menuLateralAdm');
                echo view("loja/cadastrar-produtos", $data);
                echo view("marketplace/footer");
                echo view('templates/dashboard/ModalAlertCadastroConcluido');
            } else {
                $this->cadastroCalcado();
                echo view('templates/dashboard/ModalAlertCadastroerro');
            }
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function updateCalcado($id = null) {
        if ($this->admLogged()) {
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
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function saveUpdateCalcado() {
        helper('form');
        if ($this->admLogged()) {
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
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function deleteCalcado($id = null) {
        if ($this->admLogged()) {
            $model = new Calcado();
            $model->delete($id);
            $this->listarCalcadosCadastrados();
            echo view('templates/dashboard/ModalAlertDeletado');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    # metodos para categoria se encontram aqui
    # DEPRECIADO
    # public function searchCategoria() {
    #   if ($this->admLogged()) {
    #        $model = new Categoria();
    #        $data = [
    #            'categoria' => $model->search()
    #       ];
    //views para exibir categorias entram aqui;
    #        echo view('templates/header');
    #        echo view('templates/dashboard/Sidemenu');
    #        echo view('dashboard/searchCategoria', $data);
    #        echo view('templates/footer');
    #    } else {
    #        return redirect()->to(site_url('home'));
    #    }
    #}
    # DEPRECIADO
    # public function cadastroCategoria() {
    #    if ($this->admLogged()) {
    #        helper('form');
    #        echo view('templates/header');
    #        echo view('templates/dashboard/Sidemenu');
    #        echo view('dashboard/CreateCategoria');
    #        echo view('templates/footer');
    #    } else {
    #        return redirect()->to(site_url('home'));
    #    }
    #}
    # DEPRECIADO
    #public function updateCategoria($id = null) {
    #   if ($this->admLogged()) {
    #        $model = new Categoria();
    #        $data['categoria'] = $model->search($id);
    #        echo view('templates/header');
    #        echo view('templates/dashboard/Sidemenu');
    #        echo view('dashboard/CreateCategoria', $data);
    #        echo view('templates/footer');
    #    } else {
    #        return redirect()->to(site_url('home'));
    #    }
    #}

    public function saveCategoria() {
        helper('form');
        if ($this->admLogged()) {
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
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function deleteCategoria($id = null) {

        if ($this->admLogged()) {

            $model = new Categoria();
            $model->delete($id);
            $this->searchCategoria();
            echo view('templates/dashboard/ModalAlertDeletado');
        } else {
            return redirect()->to(site_url('home'));
        }
    }

    public function admLogged() {
        if (!(session()->get('tipo') == 'adm')) {
            redirect()->to(site_url('home'));
            return false;
        }
        return true;
    }

}
