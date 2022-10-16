<?php
ob_start();
include_once 'app/view/mitologiaView.php';
include_once 'app/model/mitologiaModel.php';
include_once 'app/helper/userHelper.php';


class mitologiaController{

    private $view;
    private $model;
    private $helper;


    function __construct(){
        
        $this->view = new mitologiaView();
        $this->model = new mitologiaModel();
        $this->helper = new userHelper();

    }

    function showHeader(){
        $this->helper->checkInicio();
        $mitologias = $this->model->getMitologia();
        $this->view->showLista($mitologias);
    }

    function showFooter(){
        $this->helper->checkInicio();
        $mitologias = $this->model->getMitologia();
        $this->view->showFooter($mitologias);
    }

    function mitologiaTabla(){
        $this->helper->checkInicio();
        $mitologias = $this->model->getMitologia();
        $this->view->mostrarTabla($mitologias);
    }

    function homeMitologia(){
        $this->helper->checkInicio();
        $mitologias = $this->model->getMitologia();
        $this->view->mostrarMitologias($mitologias);
    }

    function addMitologiaTabla(){
        $this->helper->checkLoggedIn();
        $mitologia = $_POST['mitologia'];

        $this->model->addMitologia($mitologia);
        header("Location: " . BASE_URL . 'tablaMitologia'); 
    }

    function deleteMitologiaTabla($id){
        $this->helper->checkLoggedIn();
        $this->model->deleteMitologia($id);
        header("Location: " . BASE_URL . 'tablaMitologia'); 
        ob_end_flush();
    }

    function showEditMitologia($id){
        $this->helper->checkLoggedIn();
        $mitologias = $this->model->getMitologiaId($id);
        $this->view->edit($mitologias);
    }

    function editMitologia($id){
        $this->helper->checkLoggedIn();
        $mitologia = $_POST['mitologias_edit'];

        $this->model->editMitologia($mitologia, $id);
        header("Location: " . BASE_URL . 'tablaMitologia'); 

    }
    
    function showEditMitologiaTabla(){
        $this->helper->checkInicio();
        $mitologias = $this->model->getMitologia();
        $this->view->editTabla($mitologias);
    }
}

