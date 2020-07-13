<?php

namespace app\site\controller;

use app\core\Controller;


class ReceitaController extends Controller {
    public function __construct() 
    {
          
    }
    public function nova() {
        $this->view('home/main', []);
    }
    public function ver() {
        $this->view('home/main', []);
    }
    public function editar() {
        $this->view('home/main', []);
    }
}
