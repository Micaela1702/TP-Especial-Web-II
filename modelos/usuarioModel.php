<?php
require_once 'config.php';
class usuarioModel{

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);   
      }  

    public function getEmailUsuario ($email){
        $query=$this->db->prepare("SELECT * FROM usuario WHERE email = ? ");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
     }



}