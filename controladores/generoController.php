<?php
require_once './modelos/generoModel.php';
require_once './vistas/view.php';
require_once './helpers/AuthHelper.php';

class generoController {

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new generoModel();
        $this->authHelper = new AuthHelper();
        $this->view = new View($this->authHelper->getUser());
    }

    function showGeneros(){
        $generos = $this->model->getAllGeneros();
        $this->view->getAllGeneros($generos);
    }
}
?>
