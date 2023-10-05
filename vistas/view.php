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
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('templates/discoList.tpl');
    }
}