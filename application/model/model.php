<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */
    public function getAllSongs($user_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE user_id=:user_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link, $user_id)
    {
        $sql = "INSERT INTO song (artist, track, link, user_id) VALUES (:artist, :track, :link, :user_id)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':user_id' => $user_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
    
        public function getAllCards($user_id)
    {
        $sql = "SELECT * FROM cards WHERE user_id=:user_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function addCard($description, $init_date, $finish_date, $user_id)
    {
        $sql = "INSERT INTO cards (description, init_date, finish_date, user_id) VALUES (:description, :init_date, :finish_date, :user_id)";
        $query = $this->db->prepare($sql);
        $parameters = array(':description' => $description, ':init_date' => $init_date, ':finish_date' => $finish_date, ':user_id' => $user_id);
        $query->execute($parameters);
    }
    
    public function deleteCard($card_id)
    {
        $sql = "DELETE FROM cards WHERE id = :card_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':card_id' => $card_id);
        $query->execute($parameters);
    }

    public function getCard($card_id)
    {
        $sql = "SELECT id, description, init_date, finish_date FROM cards WHERE id = :card_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':card_id' => $card_id);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function updateCard($description, $init_date, $finish_date, $card_id)
    {
        $sql = "UPDATE cards SET description = :description, init_date = :init_date, finish_date = :finish_date WHERE id = :card_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':description' => $description, ':init_date' => $init_date, ':finish_date' => $finish_date, ':card_id' => $card_id);
        $query->execute($parameters);
        
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    }

    public function getAmountOfCards()
    {
        $sql = "SELECT COUNT(id) AS amount_of_cards FROM cards";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->amount_of_cards;
    }
}
