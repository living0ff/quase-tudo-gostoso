<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\entitie\Receita;
use app\site\model\ReceitaModel;

class ReceitaController extends Controller
{

    private $receitaModel;

    public function __construct()
    {
        $this->receitaModel = new ReceitaModel();
    }
    public function nova()
    {
        $this->view('receita/nova', []);
    }
    public function ver()
    {
        $this->view('receita/ver', []);
    }

    public function busca()
    {
        $termo = strtolower(get('termo'));
        $termo = substr($termo, 0, 30);

        if (strlen($termo) <= 2 || strlen($termo) > 30) {
            $this->showMessage('Termo inválido', 'O termo que você procura é curto ou grande demais');
            return;
        }

        $receitas = $this->receitaModel->readByterm($termo);

        $this->view('receita/busca', [
            'receitas'       => arrayTree($receitas),
            'totalResultado' => count($receitas)
        ]);
    }

    public function editar()
    {

        $id = get('id');


        $this->view('receita/editar', [
            'receita' => $this->receitaModel->readById($id)
        ]);
    }

    public function insert()
    {
        $receita = new Receita(
            null,
            post('txtTitulo'),
            post('txtConteudo', FILTER_SANITIZE_SPECIAL_CHARS),
            null,
            post('txtTags'),
            getCurrentDate()
        );

        $result = $this->receitaModel->insert($receita);

        if ($result <= 0) {
            $this->showMessage('Erro', 'Houve um erro ao tentar cadastrar, tente novamente mais tarde.');
            return;
        }

        redirect(BASE . '?url=editar&id=' . $result);
    }

    public function update()
    {
        $receita = $this->getInput();

        if ($this->receitaModel->update($receita) <= 0) {
            $this->showMessage('Erro', 'Houve um erro ao tentar cadastrar, tente novamente mais tarde.');
            return;
        }

        redirect(BASE . '?url=editar&id=' . get('id'));
    }

    private function getInput()
    {
        return new Receita(
            get('id'),
            post('txtTitulo'),
            post('txtConteudo', FILTER_SANITIZE_SPECIAL_CHARS),
            null,
            post('txtTags'),
            getCurrentDate()
        );
    }
}
