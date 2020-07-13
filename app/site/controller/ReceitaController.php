<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\entitie\Receita;

class ReceitaController extends Controller {
    public function __construct() 
    {
          
    }
    public function nova() {
        $this->view('receita/nova', []);
    }
    public function ver() {
        $this->view('receita/ver', []);
    }
    public function editar() {
        $this->view('receita/editar', []);
    }

    public function insert() {
        $receita = new Receita(
            null,
            post('txtTitulo'),
            post('txtConteudo', FILTER_SANITIZE_SPECIAL_CHARS),
            null,
            post('txtTags'),
            getCurrentDate()
        );

        dd($receita);
    }
}
