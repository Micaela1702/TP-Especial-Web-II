<?php
require_once 'config.php';
class generoModel {

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);   
      }

    public function getAllGeneros() {
        $query = $this->db->prepare("SELECT * FROM genero");
        $query->execute();
        $generos= $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    public function getDiscos($id) {
        $query = $this->db->prepare("SELECT discos.*, genero.nombre as genero FROM discos JOIN genero ON discos.id_genero = genero.id_genero WHERE discos.id_genero = ?");
        $query->execute(array($id));
        $generos= $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    public function getGenero($id) {
        $query = $this->db->prepare("SELECT * FROM genero WHERE id_genero = ?" );
        $query->execute(array($id));
        $generos= $query->fetch(PDO::FETCH_OBJ);
        return $generos;
    }

    public function insertarGenero($nombre,$descripcion){
        $query = $this->db->prepare ("INSERT INTO genero (nombre,descripcion) VALUES (?,?) ");
        $query->execute([$nombre,$descripcion]);
        return $this->db->lastInsertId();
    }

    public function eliminarGenero($id){
        $query = $this->db->prepare ("DELETE FROM genero WHERE id_genero= ?");
        $query->execute(array($id)); 
    }
    public function editarGeneros($nombre,$descripcion,$id){
        $query = $this->db->prepare("UPDATE genero SET nombre = ?, descripcion = ? WHERE id_genero = ?");
        $query->execute([$nombre, $descripcion, $id]);

    }
}