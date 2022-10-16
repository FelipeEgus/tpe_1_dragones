<?php
require_once 'app/view/userView.php';
require_once 'app/model/userModel.php';

class userController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new userModel();
        $this->view = new userView();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function validateUser() {

        $mail = $_REQUEST['mail'];
        $password = $_REQUEST['password'];

        $user = $this->model->getUserMail($mail);

        if ($user && password_verify($password, $user->password)) {

           
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_MAIL'] = $user->mail;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);

        } else {
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }

    function addMail(){
        $mail = $_REQUEST['mail'];
        $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

        $this->model->addUsuario($mail, $password);

        header("Location: " . BASE_URL);
    }

    function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
