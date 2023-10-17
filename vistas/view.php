<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class View{
    private $smarty;

    function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);
        

        
    }
    function showDiscos($discos, $generos){
        $this->smarty->assign('titulo', 'Añadí tu disco');
        $this->smarty->assign('discos', $discos);
        $this->smarty->assign('generos', $generos); //lo paso porque despues uso el mismo template para agregar disco
        $this->smarty->display('templates/discoList.tpl');
    }

    function showGeneros ($generos,$error){
        $this->smarty->assign('titulo', 'Añadí genero');
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/generoList.tpl');

    }
    function showDisco ($disco){
        $this->smarty->assign('disco', $disco);
        $this->smarty->display('templates/verDisco.tpl');
    }
    function showEstilos($discoEstilo, $generos){
        $this->smarty->assign('titulo', 'Añadí tu disco');
        $this->smarty->assign('discos', $discoEstilo);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/discoList.tpl');
       
    }

    function showFormLogin($error=null){
        $this->smarty->assign('titulo', 'login');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
       
    }

    function showFormEditar($genero){
    $this->smarty->assign('titulo', 'Editar genero');
    $this->smarty->assign('genero', $genero);
    $this->smarty->display('./templates/editarGenero.tpl');
    }

    function showFormEditarDisco($disco, $generos){
        $this->smarty->assign('titulo', 'Editar disco');
        $this->smarty->assign('disco', $disco);
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/editarDiscos.tpl');
    }
}