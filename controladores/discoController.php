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
        $this->view = new View($this->authHelper->getUsuario());
    }

    function showHome(){
        $generos = $this->generoModel->getAllGeneros();
        $discos = $this->model->getAllDiscos();
        $this->view->showDiscos($discos, $generos);
    }
    function showDisco($id){
        $disco = $this->model->getDisco($id);
        $this->view->showDisco($disco);
    }
    function añadirDiscos(){
        $this->authHelper->checkLoggedIn();
        if ((isset($_POST['nombre']))&&(isset($_POST['artista']))&&(isset($_POST['sello']))&&(isset($_POST['añoLanzamiento']))&&(isset($_POST['genero']))) {
            
            $nombre=$_POST['nombre'];
            $artista=$_POST['artista'];
            $sello=$_POST['sello'];
            $añoLanzamiento=$_POST['añoLanzamiento'];
            $genero=$_POST['genero'];
            $id=$this->model->insertarDisco($nombre,$artista,$sello,$añoLanzamiento,$genero);
            header("Location: " . BASE_URL);
        }
        
    }
    public function eliminarDiscos($id){
        $this->authHelper->checkLoggedIn();
        $this->model->eliminarDisco($id);
        header("Location: " . BASE_URL );
        
    
    }

    public function editarDiscos($id){
        $this->authHelper->checkLoggedIn();
        if ((isset($_POST['nombre']))&&(isset($_POST['artista']))&&(isset($_POST['sello']))&&(isset($_POST['añoLanzamiento']))&&(isset($_POST['id_genero']))) {
            $nombre=$_POST['nombre'];
            $artista=$_POST['artista'];
            $sello=$_POST['sello'];
            $añoLanzamiento=$_POST['añoLanzamiento'];
            $genero=$_POST['id_genero'];
            $id_disco=$id;
            $id=$this->model->editarDiscos($nombre,$artista,$sello,$añoLanzamiento,$genero,$id_disco);
            header("Location: " . BASE_URL );
        }
    }

    public function editarDiscoForm($id){
        $this->authHelper->checkLoggedIn();
        $generos = $this->generoModel->getAllGeneros();
        $disco = $this->model->getDisco($id);
        $this->view->showFormEditarDisco($disco, $generos);
    }

}