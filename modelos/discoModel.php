<?php
include 'config.php';
class discoModel {
    private $db;

    public function __construct() {
      $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);   
    }
    
    public function getAllDiscos() {
        $query = $this->db->prepare("SELECT discos.*, genero.nombre as genero FROM discos JOIN genero ON discos.id_genero = genero.id_genero");
        $query->execute();
        $discos= $query->fetchAll(PDO::FETCH_OBJ);  // devuelve un arreglo de objetos
        return $discos;
    }

    public function getDisco($id) {
        $query = $this->db->prepare("SELECT discos.*, genero.nombre as genero FROM discos JOIN genero ON discos.id_genero = genero.id_genero WHERE id_disco = ?");
        $query->execute(array($id));
        $disco= $query->fetch(PDO::FETCH_OBJ);  // devuelve un arreglo de objetos
        return $disco;

    }
    public function insertarDisco($nombre,$artista,$sello,$añoLanzamiento,$genero) {
        $query = $this->db->prepare ("INSERT INTO discos (nombre,artista,sello_discografico,anio_lanzamiento,id_genero) VALUES (?,?,?,?,?) ");
        $query->execute([$nombre,$artista,$sello,$añoLanzamiento,$genero]);
        return $this->db->lastInsertId();

    }
    public function eliminarDisco($id){
        $query = $this->db->prepare ("DELETE FROM discos WHERE id_disco= ?");
        $query->execute(array($id)); 
    }

    public function editarDiscos($nombre,$artista,$sello,$añoLanzamiento,$genero, $id_disco) {
        $query = $this->db->prepare("UPDATE discos SET nombre = ?, artista = ?, sello_discografico = ?, anio_lanzamiento = ?, id_genero = ? WHERE id_disco = ?");
        $query->execute([$nombre,$artista,$sello,$añoLanzamiento,$genero,$id_disco]);

    }

    
}