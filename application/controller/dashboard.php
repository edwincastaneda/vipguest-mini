<?php
class Dashboard extends Controller {

    public function index() {
        require APP . 'view/_templates/admin/header.php';
        if (checkLogin()) {
            require APP . 'view/_templates/admin/nav.php';
            require APP . 'view/_templates/admin/sidebar.php';
            require APP . 'view/dashboard/index.php';
        } else {
            require APP . 'view/_templates/login.php';
        }
        require APP . 'view/_templates/admin/footer.php';
    }

}
