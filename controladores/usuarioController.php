<?php
require_once './modelos/usuarioModel.php';
require_once './vistas/view.php';
require_once './helpers/AuthHelper.php';

class usuarioController{
    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->authHelper= new AuthHelper();
        $this->model= new usuarioModel();
        $this->view= new View($this->authHelper->getUsuario());
    }


    public function showFormLogin() {
        $this->view->showFormLogin();
    }


    public function validarUsuario() {
        $email = $_POST['email'];
        $contrasenia = $_POST['contraseña'];

        $usuario = $this->model->getEmailUsuario ($email);

        if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {


            session_start();
            $_SESSION['USER_ID'] = $usuario->id_usuario;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }



}