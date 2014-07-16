<?php
require_once("access.php");
require_once("functions/db.php");

class Pages{
    private $db;
    private $pages;
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    /* menu dinamico do header */
    public function listpages()
    {
        $query = "select * from site where status<>0";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    /* Content pages */
    public function page($pag){
        $query = "select * from site where slug=:pag";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":pag",$pag, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    /* Content search */
    public function search($s){
        $query = "select * from site where content like :s";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":s","%$s%", PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    /* @param mixed $pages */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }
    /* @return mixed */
    public function getPages()
    {
        return $this->pages;
    }
}

/* Monta a rota e verifica as pages */

$pag = basename($_SERVER['REQUEST_URI']);

/* Pega todos os slugs das paginas no banco e coloca no array */
$stmt = $conn->prepare("SELECT slug FROM site");
$stmt->execute();
$rts = $stmt->fetchAll(\PDO::FETCH_COLUMN);

/* Gerando a rota */
$routes = function() use($conn,$pag,$rts){

    if(isset($_GET['s'])){
        $pag = "busca";
        $file = $pag;
    }
    else if(empty($pag)){
        $pag = "home";
        $file = $pag;
    }
    else if (in_array($pag, $rts)){
       $file = $pag;
    }
    else{
        $pag = "404";
        $file = $pag;
    }

    $p = new Pages($conn);
    $res = $p->page($pag);

    require_once("pages/".$file.".php");

}

?>