<?php

require_once './controladores/discoController.php';
require_once './controladores/generoController.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    $action = 'home';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
   $params = explode('/', $action);

   switch($params[0]){
    case 'home':
        $discoController = new discoController();
        $discoController-> showHome();
        break;
    case 'brands':
        $brandController = new BrandController();
        $brandController->showBrands();
        break;
    
   }
