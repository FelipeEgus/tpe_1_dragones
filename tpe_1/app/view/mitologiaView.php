<?php

require_once('libs/smarty/libs/Smarty.class.php');


class mitologiaView{

    function showLista($mitologias){
        $smarty= new Smarty;
        $smarty->assign('mitologias', $mitologias);
        $smarty->display('template/listaMitologia.tpl');
    }
    
    function showFooter($mitologias){
        $smarty= new Smarty;
        $smarty->assign('mitologias', $mitologias);
        $smarty->display('template/formAddDragon.tpl');
    }


    function mostrarMitologias($mitologias){
        $smarty= new Smarty;
        $smarty->assign('mitologias', $mitologias);
        $smarty->display('template/tablaMitologias.tpl');
    }

    function renderError(){
        echo "<h2>Error! dato/s no especificada.</h2>";
    }

    function editTabla($mitologias){
        $smarty= new Smarty;
        $smarty->assign('mitologias', $mitologias);
        $smarty->display('template/editTabla-2.tpl');
    }

    function edit($mitologias){
        $smarty= new Smarty;
        $smarty->assign('mitologias', $mitologias);
        $smarty->display('template/editMitologia.tpl');
    }


}   

