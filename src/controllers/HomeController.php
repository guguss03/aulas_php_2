<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

 private $loggedUser;

 public function __construct(){

 $this->loggedUser = LoginHandler::checkLogin();

 //VERIFIQUE O LOGIN, CASO ESSE LOGIN SEJA FALSO, REDIRECIONE PARA LOGIN
if($this->loggedUser === false) {
$this->redirect('/login');
}
}

 public function index() {
$this->render('home', ['nome' => 'Viviane']);
}

}