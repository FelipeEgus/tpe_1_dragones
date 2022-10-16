<?php

class userModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=db_dragones; charset=utf8', 'root', '');
}

public function getUserMail($mail) {
    $query = $this->db->prepare("SELECT * FROM usuarios WHERE mail = ?");
    $query->execute([$mail]);
    return $query->fetch(PDO::FETCH_OBJ);
}

    function addUsuario($mail, $password) {
        $query = $this->db->prepare('INSERT INTO usuarios ( mail, password) VALUES (?, ?)');
        $query->execute([$mail,$password]);
    }

}
