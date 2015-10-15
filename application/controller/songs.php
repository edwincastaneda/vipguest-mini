<?php

class Songs extends Controller {

    public function index() {
        require APP . 'view/_templates/admin/header.php';
        if (checkLogin()) {
            $songs = $this->model->getAllSongs($_COOKIE["user_id"]);
            $amount_of_songs = $this->model->getAmountOfSongs();
            require APP . 'view/_templates/admin/nav.php';
            require APP . 'view/_templates/admin/sidebar.php';
            require APP . 'view/songs/index.php';
        } else {
            require APP . 'view/_templates/admin/header.php';
            require APP . 'view/_templates/login.php';
        }
        require APP . 'view/_templates/admin/footer.php';
    }

    public function addSong() {
        if (isset($_POST["submit_add_song"])) {
            $this->model->addSong($_POST["artist"], $_POST["track"], $_POST["link"], $_COOKIE["user_id"]);
        }
        header('location: ' . URL . 'songs');
    }

    public function deleteSong($song_id) {
        if (isset($song_id)) {
            $this->model->deleteSong($song_id);
        }
        header('location: ' . URL . 'songs');
    }

    public function editSong($song_id) {
        
        if (isset($song_id)) {
            $song = $this->model->getSong($song_id);
            require APP . 'view/_templates/admin/header.php';
            require APP . 'view/_templates/admin/nav.php';
            require APP . 'view/_templates/admin/sidebar.php';
            require APP . 'view/songs/edit.php';
            require APP . 'view/_templates/admin/footer.php';
            
        } else {
            header('location: ' . URL . 'songs');
        }
    }

    public function updateSong() {
        if (isset($_POST["submit_update_song"])) {
            $this->model->updateSong($_POST["artist"], $_POST["track"], $_POST["link"], $_POST['song_id']);
        }
        header('location: ' . URL . 'songs');
    }

    public function ajaxGetStats() {
        $amount_of_songs = $this->model->getAmountOfSongs();
        echo $amount_of_songs;
    }

}
