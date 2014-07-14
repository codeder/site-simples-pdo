<?php

    /* Functions */
    require_once("functions/db.php");
    require_once("functions/pages.php");


    /* Pages */
    require_once("header.php");

    $pag = basename($_SERVER['REQUEST_URI']);

    if(isset($_GET['s'])){
        require_once("busca.php");
    }else if($pag=="contato"){
        require_once("contato.php");
    }else if($pag=="sucesso"){
        require_once("sucesso.php");
    }else{
        $p = new Pages($connection);
        $res = $p->page($pag);
        echo $res['content'];
    }
    require_once("footer.php");

?>