<?php

class mitologiaModel {

    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_dragones; charset=utf8','root', '');
        return $db;
    }

    function getMitologia() {
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM mitologias');
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_OBJ);
    }   

    
    function getMitologiaId($id) {
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM mitologias WHERE id = ? ');
        $query->execute([$id]);
    
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 
        
    function addMitologia($mitologia){
       
        $db = $this->connect();

        $query = $db->prepare("INSERT INTO mitologias (mitologia) VALUES (?)");
        $query->execute([$mitologia]);

    }

    function deleteMitologia($id){

        $db = $this->connect();
    
        $query = $db->prepare('DELETE FROM mitologias WHERE id = ?');
        $query->execute([$id]);
        
    }

    function editMitologia($mitologia, $id){

        $db = $this->connect();

        $query = $db->prepare("UPDATE mitologias SET mitologia = ? WHERE id = ?");
        $query->execute([$mitologia, $id]);

    }
    
}


