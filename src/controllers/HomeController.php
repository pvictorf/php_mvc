<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Victor']);
    }

    public function sobre($req) {
        $json = [ 'nome' => $req['nome'] ];
        
        $this->response_json($json);
    }


}
