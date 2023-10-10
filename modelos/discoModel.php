<?php

class discoModel {

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=vinilos_db;charset=utf8' , 'root', '');
    }
    
    public function getAllDiscos() {
        $query = $this->db->prepare("SELECT discos.*, genero.nombre as genero FROM discos JOIN genero ON discos.id_genero = genero.id_genero");
        $query->execute();
        $discos= $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $discos;
    }
}