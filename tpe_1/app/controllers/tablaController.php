<?php
ob_start();
include_once 'app/view/tablaView.php';
include_once 'app/model/tablaModel.php';
include_once 'app/helper/userHelper.php';


class tablaController{

    private $view;
    private $model;
    private $helper;


    function __construct(){
        
        $this->view = new tablaView();
        $this->model = new tablaModel();
        $this->helper = new userHelper();

    }

    function showTabla(){
        $this->helper->checkInicio();
        $dragones = $this->model->getDragones();
        $this->view->mostrar($dragones);

    }

    function showMitologia($mitologia){
        $this->helper->checkInicio();
        $dragones = $this->model->getDragonesMitologia($mitologia);
        $this->view->mostrarSolo($dragones);
    }
    
    function showDragonId($id){
        $this->helper->checkInicio();
        $dragon = $this->model->getDragonesId($id);
        $this->view->mostrarSolo($dragon);
    }

    function addDragonTabla(){
        $this->helper->checkLoggedIn();
        $raza = $_POST['raza'];
        $mitologia = $_POST['mitologia'];
        $descripcion = $_POST['descripcion'];
        $repre = $_POST['repre'];
        $id_mito = $_POST['mitologia'];

        $this->model->addDragon($raza,$mitologia,$descripcion,$repre,$id_mito);
        header("Location: " . BASE_URL); 
    }

    function deleteDragonTabla($id){
        $this->helper->checkLoggedIn();
        $this->model->deleteDragon($id);
        header("Location: " . BASE_URL); 
        ob_end_flush();
    }

    function showEditDragonTabla($id){
        $this->helper->checkLoggedIn();
        $dragones = $this->model->getDragonesId($id);
        $this->view->edit($dragones);

    }

    function editDragon($id){
        $this->helper->checkLoggedIn();
        $raza = $_POST['raza_edit'];
        $mitologia = $_POST['mitologia_edit'];
        $descrip = $_POST['descrip_edit'];
        $repre = $_POST['repre_edit'];
        $id_mito = $_POST['mitologia_edit'];

        $this->model->editDragon($raza,$mitologia,$descrip,$repre,$id_mito,$id);
        header("Location: " . BASE_URL);

    }
    
}

