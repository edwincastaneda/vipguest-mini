<?php

class Logout extends Controller {

    public function index() {
        unset($_COOKIE['login']);
        setcookie('login', NULL, -1);
        header('Location: '.URL);
    }

}
