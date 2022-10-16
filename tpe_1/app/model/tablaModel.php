<?php

class tablaModel {

    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_dragones; charset=utf8','root', '');
        return $db;
    }

    function getDragones() {
        $db = $this->connect();

        $query = $db->prepare('SELECT dragones.id as id,nombre_raza, mitologias.mitologia as origen_mitologico, descrip, representaciones, id_mitologia_fk FROM `dragones` inner join mitologias on dragones.id_mitologia_fk = mitologias.id;');
        $query->execute();
      
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getDragonesMitologia($mitologia){
        $db = $this->connect();
    
        $query = $db->prepare('SELECT dragones.id as id,nombre_raza, mitologias.mitologia as origen_mitologico, descrip, representaciones, id_mitologia_fk FROM `dragones` inner join mitologias on dragones.id_mitologia_fk = mitologias.id WHERE id_mitologia_fk = ?');
        $query->execute([$mitologia]);
        
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    function getDragonesId($id){

        $db = $this->connect();
    
        $query = $db->prepare('SELECT dragones.id as id,nombre_raza, mitologias.mitologia as origen_mitologico, descrip, representaciones, id_mitologia_fk FROM `dragones` inner join mitologias on dragones.id_mitologia_fk = mitologias.id WHERE dragones.id = ?');
        $query->execute([$id]);
        
        return $query->fetchAll(PDO::FETCH_OBJ);

    }    
        
    function addDragon($raza,$mitologia,$descripcion,$repre,$id_mito){
       
        $db = $this->connect();

        $query = $db->prepare("INSERT INTO dragones (nombre_raza,origen_mitologico,descrip,representaciones,id_mitologia_fk) VALUES (?, ?, ?, ?,?)");
        $query->execute([$raza,$mitologia,$descripcion,$repre,$id_mito]);

    }

    function deleteDragon($id){

        $db = $this->connect();
    
        $query = $db->prepare('DELETE FROM dragones WHERE id = ?');
        $query->execute([$id]);
        
    }

    function editDragon($raza,$mitologia,$descripcion,$repre,$id_mito,$id){

        $db = $this->connect();

        $query = $db->prepare("UPDATE dragones SET nombre_raza = ? , origen_mitologico = ? , descrip= ? , representaciones= ? , id_mitologia_fk = ? WHERE id = ?");
        $query->execute([$raza,$mitologia,$descripcion,$repre,$id_mito,$id]);

    }
    
}


