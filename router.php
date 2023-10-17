<?php

require_once './controladores/discoController.php';
require_once './controladores/generoController.php';
require_once './controladores/usuarioController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']). '/');
$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $discoController = new discoController();
        $discoController->showHome();
        break;

    case 'generos':
         $generoController = new generoController();
         $generoController-> showGeneros();
        break;
    
    case 'info-disco':
        $discoController = new discoController();
        $discoController-> showDisco($params[1]);
        break;

    case 'discos-estilo':
        $generoController = new generoController();
        $generoController-> showEstilos($params[1]);
        break;

    case 'login';
        $usuarioController = new usuarioController();
        $usuarioController-> showFormLogin();
        break;

    case 'log';
        $usuarioController = new usuarioController();
        $usuarioController-> validarUsuario();
        break;
    
    case 'logout';
        $usuarioController = new usuarioController();
        $usuarioController-> logout();
        break;
    case 'añadir-discos';
        $discoController = new discoController();
        $discoController-> añadirDiscos();
        break;
    case 'añadir-generos';
        $generoController = new generoController();
        $generoController-> añadirGeneros();
        break;
    case 'eliminar-generos';
        $generoController = new generoController();
        $generoController-> eliminarGeneros($params[1]);
        break;
    case 'eliminar-discos';
        $discoController = new discoController();
        $discoController-> eliminarDiscos($params[1]);
        break;
    case 'editar-generos';
        $generoController = new generoController();
        $generoController-> editarGeneros($params[1]);
        break;
    case 'editar-genero-form':
        $generoController = new generoController();
        $generoController-> editarGenerosForm($params[1]);
        break;

    case 'editar-discos';
        $discoController = new discoController();
        $discoController-> editarDiscos($params[1]);
        break;
    
    case 'editar-disco-form':
        $discoController = new discoController();
        $discoController-> editarDiscoForm($params[1]);
        break;
        

}


