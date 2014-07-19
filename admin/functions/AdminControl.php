<?php

require_once("db.php");

/* FUNÇÕES DE USUÁRIOS */


/* Registra usuário */
$registerUser = function() use ($conn){

    if(isset($_POST['send'])){

        /* Verifica se o campo username e email já existem no banco */
        $stmt = $conn->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
        $stmt->bindValue(":username",$_POST['username'], PDO::PARAM_STR);
        $stmt->bindValue(":email",$_POST['email'], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if((strtolower($_POST['email']) == strtolower($result["email"]))){
            echo '<span class="bg-danger">O e-mail "<strong>'.$_POST['email'].'</strong>" já está sendo usado. Cadastre outro.</span>';
        }else if((strtolower($_POST['username']) == strtolower($result["username"]))){
            echo '<span class="bg-danger">O Username "<strong>'.$_POST['username'].'</strong>" já está sendo usado. Cadastre outro.</span>';
        }else{

            /* Se não existirem, efetua o cadastro */
            $options=['salt'=>"Frase segura de exemplo apenas",'cost'=>10];
            $password=password_hash($_POST['password'],PASSWORD_DEFAULT,$options);

            $query = "INSERT INTO users VALUES(null,:name,:username,:email,:password,:status)";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(":name",$_POST['name'], PDO::PARAM_STR);
            $stmt->bindValue(":username",$_POST['username'], PDO::PARAM_STR);
            $stmt->bindValue(":password",$password, PDO::PARAM_STR);
            $stmt->bindValue(":email",$_POST['email'], PDO::PARAM_STR);
            $stmt->bindValue(":status",$_POST['status'], PDO::PARAM_INT);
            if($stmt->execute()){
                header("Location: users.php?name=".$_POST['name']);
            }else{
                echo '<span class="bg-danger">Erro ao cadastar o usuário</span>';
            }
        }        
    }

};


/* Editar usuários */
$editUsers = function() use ($conn){

    if(isset($_POST['send'])){

        $options=['salt'=>"Frase segura de exemplo apenas",'cost'=>10];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT,$options);

        $query = "UPDATE users SET name=:name,username=:username,email=:email,password=:password,status=:status WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":id",$_POST['uid'], PDO::PARAM_INT);
        $stmt->bindValue(":name",$_POST['name'], PDO::PARAM_STR);
        $stmt->bindValue(":username",$_POST['username'], PDO::PARAM_STR);
        $stmt->bindValue(":password",$password, PDO::PARAM_STR);
        $stmt->bindValue(":email",$_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(":status",$_POST['status'], PDO::PARAM_INT);
        if($stmt->execute()){
            echo '<span class="bg-success">Usuário <strong>'.$_POST['name'].'</strong> atualizado com sucesso.</span>';    
        }else{
            echo '<span class="bg-danger">Houve um erro ao atualizar o cadastro</span>';
        }

    }
};

/* Listar usuários */
$getUsers = function() use ($conn){
    $query = "SELECT * FROM users ORDER BY id ASC";
    $result = $conn->prepare($query);
    $result->execute();
    while ($user = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>'.$user['id'].'</td>';
        echo '<td>'.$user['name'].'</td>';
        echo '<td>'.$user['username'].'</td>';
        echo '<td>'.$user['email'].'</td>';
        echo '<td>'.($user['status']=="1" ? 'Ativo':'Inativo').'</td>';
        echo '<td><a href="user_edit.php?uid='.$user['id'].'" title="Editar">editar</a></td>';
        echo '</tr>';
    }
};


/*$checkExistsUser = function() use($conn){

    if(isset($_POST['send'])){

        $stmt = $conn->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
        $stmt->bindValue(":username",$_POST['username'], PDO::PARAM_STR);
        $stmt->bindValue(":email",$_POST['email'], PDO::PARAM_STR);
        $stmt->execute();

           /* if( $row = $stmt->fetch() ){
                echo "existe";
            }else{
                echo "Não existe";
            }*/

/*
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if((strtolower($_POST['email']) == strtolower($result["email"]))){
                echo '<span class="bg-danger">O e-mail "<strong>'.$_POST['email'].'</strong>" já está sendo usado. Cadastre outro.</span>';
            }else if((strtolower($_POST['username']) == strtolower($result["username"]))){
                echo '<span class="bg-danger">O Username "<strong>'.$_POST['username'].'</strong>" já está sendo usado. Cadastre outro.</span>';
            }else{
                $registerUser();
            }
        }
    };

*/    


/* PÁGINAS */

/* Registra a página */
$registerPage = function() use ($conn){

    if(isset($_POST['send'])){

        /* Verifica se o campo slug já existe no banco */
        $stmt = $conn->prepare("SELECT slug FROM site WHERE slug=:slug");
        $stmt->bindValue(":slug",$_POST['slug'], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if((strtolower($_POST['slug']) == strtolower($result["slug"]))){
            echo '<span class="bg-danger">O slug "<strong>'.$_POST['slug'].'</strong>" já está sendo usado. Cadastre outro.</span>';
        }else{

            /* Se não existir, efetua o cadastro */            
            $query = "INSERT INTO site VALUES(null,:slug,:title,:content,:status)";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(":slug",$_POST['slug'], PDO::PARAM_STR);
            $stmt->bindValue(":title",$_POST['title'], PDO::PARAM_STR);
            $stmt->bindValue(":content",$_POST['content'], PDO::PARAM_STR);
            $stmt->bindValue(":status",$_POST['status'], PDO::PARAM_INT);
            if($stmt->execute()){
                header("Location: pages.php?title=".$_POST['title']);
            }else{
                echo '<span class="bg-danger">Erro ao cadastar a página</span>';
            }
        }        
    }

};

/* Editar página */
$editPages = function() use ($conn){

    if(isset($_POST['send'])){       

        $query = "UPDATE site SET slug=:slug,title=:title,content=:content,status=:status WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":id",$_POST['id'], PDO::PARAM_INT);
        $stmt->bindValue(":slug",$_POST['slug'], PDO::PARAM_STR);
        $stmt->bindValue(":title",$_POST['title'], PDO::PARAM_STR);
        $stmt->bindValue(":content",$_POST['content'], PDO::PARAM_STR);        
        $stmt->bindValue(":status",$_POST['status'], PDO::PARAM_INT);
        if($stmt->execute()){
            echo '<span class="bg-success">Página <strong>'.$_POST['title'].'</strong> atualizada com sucesso.</span>';    
        }else{
            echo '<span class="bg-danger">Houve um erro ao atualizar a página</span>';
        }

    }
};

?>