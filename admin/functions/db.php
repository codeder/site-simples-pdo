<?php
require_once("access.php");

try{
    $conn = new \PDO("$drive:host=$host;dbname=$db",$user,$pass);
}
catch(\PDOException $e){
    echo $e->getMessage();
}

?>