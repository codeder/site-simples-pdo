<?php
require_once("db.php");


/* FUNÇÕES DE USUÁRIOS */

/* Hash seguro password */
$options=['salt'=>"Frase segura de exemplo apenas",'cost'=>10];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT,$options);


/* Registra usuário */
$registerUser = function() use ($conn,$password){

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
$editUsers = function() use ($conn,$password){

    if(isset($_POST['send'])){

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

/* Checar se o usuário está logado */
$checkExistsUser = function() use($conn,$password){

    if(isset($_POST['send'])){        

        $stmt = $conn->prepare("SELECT name,username,password FROM users WHERE username=:username AND password=:password AND status <> 0");        
        $stmt->bindValue(":username",$_POST['username'], PDO::PARAM_STR);
        $stmt->bindValue(":password",$password, PDO::PARAM_STR);
        $stmt->execute();
        
        if( $row = $stmt->fetch() ){                                
            session_start();
            $_SESSION['logged'] = true;
            header("Location: pages.php");
        }else{            
            echo '<span class="bg-danger">Login ou senha não conferem. Tente novamente</span>';
        }
    }

};



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