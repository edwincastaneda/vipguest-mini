<?php

class Users extends Controller {

    public $auth;

    public function index() {

        $this->auth = new Auth();
        $loged = $this->auth->checkLogin();

        require APP . 'view/_templates/header.php';
        if ($loged) {
            require APP . 'view/_templates/nav.php';
            require APP . 'view/_templates/login.php';
        } else {
            $users = $this->users->getAllUsers();
            require APP . 'view/_templates/nav1.php';
            require APP . 'view/users/index.php';
        }

        require APP . 'view/_templates/footer.php';
    }

    public function add() {
        if (isset($_POST["submit_add_user"])) {
            $this->users->addUser($_POST["login"], $_POST["email"], $_POST["password"], $_POST["profile"], $_POST["first_name"], $_POST["last_name"]);
        }
        header('location: ' . URL . 'users/index');
    }

    public function edit($user_id) {
        if (isset($user_id)) {
            $user = $this->users->getUser($user_id);
            require APP . 'view/_templates/header_private.php';
            require APP . 'view/users/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'users/index');
        }
    }

    public function update() {
        if (isset($_POST["submit_update_user"])) {
            $this->users->updateUser($_POST["login"], $_POST["email"], $_POST["profile"], $_POST['first_name'], $_POST['last_name'], $_POST['user_id']);
        }
        header('location: ' . URL . 'users/index');
    }

    public function delete($user_id) {
        if (isset($user_id)) {
            $this->users->deleteUser($user_id);
        }
        header('location: ' . URL . 'users/index');
    }

}
