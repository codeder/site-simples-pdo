<?php

require_once("db.php");

$options=['salt'=>"Frase segura de exemplo apenas",'cost'=>10];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT,$options);

/* Resgistrar usuários */
$registerUser = function() use ($conn,$password){

    if(isset($_POST['send'])){
        $query = "INSERT INTO users VALUES(null,:name,:username,:email,:password,:status)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name",$_POST['name'], PDO::PARAM_STR);
        $stmt->bindParam(":username",$_POST['username'], PDO::PARAM_STR);
        $stmt->bindParam(":password",$password, PDO::PARAM_STR);
        $stmt->bindParam(":email",$_POST['email'], PDO::PARAM_STR);
        $stmt->bindParam(":status",$_POST['status'], PDO::PARAM_INT);
        $stmt->execute();
        echo '<span class="bg-success">Cadastro efetuado com sucesso.</span>';
    }

};

/* Listar usuários */
$getUsers = function() use ($conn){
    $query = "SELECT id,name,username,email,status FROM users ORDER BY id ASC";
    $stmt = $conn->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_CLASS);
    foreach($results as $result){
        echo '<tr>';
        echo '<td>'.$result->id.'</td>';
		echo '<td>'.$result->name.'</td>';
		echo '<td>'.$result->username.'</td>';
		echo '<td>'.$result->email.'</td>';
		echo '<td>'.$result->status.'</td>';
		echo '<td><a href="user_edit.php?e=1&id='.$result->id.'" title="Editar">editar</a></td>';
		echo '</tr>';
    }
};

/* Editar usuários */
/*
$editUsers = function() use ($conn,$password){
    $query = "UPDATE users SET name=:name,username=:username,email=:email,password=:password,status=:status WHERE id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":name",$_POST['name'], PDO::PARAM_STR);
    $stmt->bindParam(":username",$_POST['username'], PDO::PARAM_STR);
    $stmt->bindParam(":password",$password, PDO::PARAM_STR);
    $stmt->bindParam(":email",$_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(":status",$_POST['status'], PDO::PARAM_INT);
    $stmt->execute();
    echo '<span class="bg-success">Cadastro atualizado com sucesso.</span>';
};*/

?>