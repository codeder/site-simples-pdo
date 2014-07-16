<?php

require_once("access.php");

try{
    $conn = new \PDO("mysql:host=localhost;dbname=$db",$user,$pass);
}
catch(\PDOException $e){
        die("Erro. Cod: ".$e->getCode()." Mensagem: ".$e->getMessage());
    }
?>