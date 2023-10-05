<?php
require_once './modelos/discoModel.php';
require_once './vistas/view.php';
require_once './modelos/generoModel.php';
require_once './helpers/AuthHelper.php';


class discoController{

    private $model;
    private $view;
    private $generoModel;


    function __construct(){
        $this->model = new discoModel();
        $this->generoModel = new generoModel();
        $this->authHelper = new AuthHelper();
        $this->view = new View($this->authHelper->getUser());
    }

    function showHome(){
        $generos = $this->generoModel->getAllGeneros();
        $discos = $this->model->getAllDiscos();
        $this->view->showDiscos($discos, $generos);
    }
}