<?php

namespace app\site\controller;

use app\core\Controller;


class HomeController extends Controller {
    public function __construct()
    {
        
    }
    public function index() {
        $this->view('home/main', [ 
            'teste' => 'teste'
        ]);
    }
}
