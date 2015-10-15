<?php

class Login extends Controller {

    public function index() {
        if (!checkLogin()) { //reviso si esta autenticado
            require APP . 'view/_templates/admin/header.php';
            if (isset($_POST["user"]) && isset($_POST["password"])) { // recibo parametros para login
                $isUser = $this->system->isUser($_POST["user"], $_POST["password"]);
                if ($isUser) { // es usuario?
                    header('location: ' . $_POST["url"]);
                } else {
                    require APP . 'view/_templates/login.php'; // usuario incorrecto
                }
            } else {
                require APP . 'view/_templates/login.php'; // faltan parametros
            }
            require APP . 'view/_templates/admin/footer.php';
        } else {
            header('location: ' . URL); // ingreso a login estando logueado
        }
    }

}
