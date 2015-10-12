<?php

class System {

    /**
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function isUser($loginOrEmail, $password) {
        $is = false;

        $sql = "SELECT id, login FROM user WHERE (login = :loginOrEmail AND password=:password) OR (email = :loginOrEmail AND password=:password) LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':loginOrEmail' => $loginOrEmail, ':password' => $password);
        $query->execute($parameters);
        $user = $query->fetch();

        if ($query->rowCount() > 0) {
            $is = true;
            setcookie("user_id", $user->id);
            setcookie("login", $user->login);
        }
        
        return $is;
    }

}
