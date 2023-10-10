<?php

class generoModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=vinilos_db;charset=utf8' , 'root', '');
}


 
public function getAllGeneros() {
    $query = $this->db->prepare("SELECT * FROM genero");
    $query->execute();
    $generos = $query->fetchAll(PDO::FETCH_OBJ);
    
    return $generos;
}
}