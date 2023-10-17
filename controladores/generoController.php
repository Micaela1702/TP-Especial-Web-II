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
        $this->view = new View($this->authHelper->getUsuario());
    }

    function showGeneros(){
        $generos = $this->model->getAllGeneros();
        $this->view->showGeneros($generos,$error=false);
    }
    function showEstilos($id){
        $discoEstilo = $this->model->getDiscos($id);
        $generos=$this->model->getAllGeneros();
        if (!empty ($discoEstilo)){
            $this->view->showEstilos($discoEstilo,$generos);
            
        }
        else { 
            
            $this->view->showGeneros($generos,"No hay discos de este genero");
        }
    }
    public function añadirGeneros(){
        $this->authHelper->checkLoggedIn();
        if ((isset($_POST['nombre']))&&(isset($_POST['descripcion']))) {
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $id=$this->model->insertarGenero($nombre,$descripcion);
            header("Location: " . BASE_URL . 'generos');
        }
    }

    public function eliminarGeneros($id){
        $this->authHelper->checkLoggedIn();
        try{
            $this->model->eliminarGenero($id);
            header("Location: " . BASE_URL . 'generos');
        }catch(Exception $e){
            $generos = $this->model->getAllGeneros();
            $this->view->showGeneros($generos, "No se puede eliminar el genero ya que este tiene discos asociados, elimine primero los discos.");
        }
    }
    public function editarGeneros($id){
        $this->authHelper->checkLoggedIn();
        
        if ((isset($_POST['nombre']))&&(isset($_POST['descripcion']))) {
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $id_genero=$id;
            $id=$this->model->editarGeneros($nombre,$descripcion,$id_genero);
            header("Location: " . BASE_URL . 'generos');
        }
    }

    public function editarGenerosForm($id){
        $this->authHelper->checkLoggedIn();
        $genero = $this->model->getGenero($id);
        $this->view->showFormEditar($genero);
    }
}
?>
