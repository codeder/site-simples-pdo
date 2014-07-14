<?php

require_once("./fixture.php");

try{
    $connection = new \PDO("mysql:host=localhost;dbname=$db",$user,$pass);
}
catch(\PDOException $e){
        die("Erro. Cod: ".$e->getCode()." Mensagem: ".$e->getMessage());
    }
?>