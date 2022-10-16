<?php

require_once('libs/smarty/libs/Smarty.class.php');


class tablaView{

    function mostrar($dragones){
        $smarty= new Smarty;
        $smarty->assign('dragones', $dragones );
        $smarty->display('template/tabla.tpl');
    }

    function mostrarSolo($dragon){
        $smarty= new Smarty;
        $smarty->assign('titulo', 'dragon' );
        $smarty->assign('dragones', $dragon );
        $smarty->display('template/verDragon.tpl'); 
    }

    function renderError(){
        echo "<h2>Error! dato/s no especificada.</h2>";
    }

    function edit($dragones){
        $smarty= new Smarty;
        $smarty->assign('dragones', $dragones );
        $smarty->display('template/editTabla-1.tpl');
    }

}   

