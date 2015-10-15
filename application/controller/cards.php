<?php

class Cards extends Controller {

    public function index() {
        require APP . 'view/_templates/admin/header.php';
        if (checkLogin()) {
            $cards = $this->model->getAllCards($_COOKIE["user_id"]);
            $amount_of_cards = $this->model->getAmountOfCards();
            require APP . 'view/_templates/admin/nav.php';
            require APP . 'view/_templates/admin/sidebar.php';
            require APP . 'view/cards/index.php';
        } else {
            require APP . 'view/_templates/admin/header.php';
            require APP . 'view/_templates/login.php';
        }
        require APP . 'view/_templates/admin/footer.php';
    }

    public function add() {
        if (isset($_POST["submit_add_card"])) {
            $this->model->addCard($_POST["description"], $_POST["init_date"], $_POST["finish_date"], $_COOKIE["user_id"]);
        }
        header('location: ' . URL . 'cards');
    }

    public function delete($card_id) {
        if (isset($card_id)) {
            $this->model->deleteCard($card_id);
        }
        header('location: ' . URL . 'cards');
    }

    public function edit($card_id) {

        if (isset($card_id)) {
            $card = $this->model->getCard($card_id);
            require APP . 'view/_templates/admin/header.php';
            require APP . 'view/_templates/admin/nav.php';
            require APP . 'view/_templates/admin/sidebar.php';
            require APP . 'view/cards/edit.php';
            require APP . 'view/_templates/admin/footer.php';
        } else {
            header('location: ' . URL . 'cards');
        }
    }

    public function update() {
        if (isset($_POST["submit_update_card"])) {
            $this->model->updateCard($_POST["description"], $_POST["init_date"], $_POST["finish_date"], $_POST['card_id']);
        }
        header('location: ' . URL . 'cards');
    }

    public function id($card_id) {
        if (isset($card_id)) {
            $card = $this->model->getCard($card_id);
            require APP . 'view/_templates/themes/demo/header.php';
            require APP . 'view/cards/card.php';
            require APP . 'view/_templates/themes/demo/footer.php';
        } else {
            header('location: ' . URL);
        }
    }

    public function ajaxGetStats() {
        $amount_of_cards = $this->model->getAmountOfCards();
        echo $amount_of_cards;
    }

}
