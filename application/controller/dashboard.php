<?php
class Dashboard extends Controller {

    public function index() {
        require APP . 'view/_templates/header.php';
        if (checkLogin()) {
            require APP . 'view/_templates/nav.php';
            require APP . 'view/_templates/sidebar.php';
            require APP . 'view/dashboard/index.php';
        } else {
            require APP . 'view/_templates/login.php';
        }
        require APP . 'view/_templates/footer.php';
    }

}
