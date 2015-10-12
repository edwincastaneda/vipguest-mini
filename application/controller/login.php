<?php

class Login extends Controller {

    public function index() {
        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $isLoged=$this->system->isUser($_POST["user"], $_POST["password"]);
            if($isLoged){
                header('location: ' . URL);
            }else{
                require APP . 'view/_templates/login-failed.php';
            }
        }else{
                require APP . 'view/_templates/login.php';
        }
    }

}