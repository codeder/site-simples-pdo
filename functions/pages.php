<?php

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
        $query = "select pages,status from site where status<>0";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    /* Content pages */
    public function page($pag){
        $query = "select * from site where pages=:pag";

        if($pag=="site-simples-pdo"){
            $pag="Home";
        }

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


    /**
     * @param mixed $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }




}


?>