<?php


class Secao
{
    private $id;
    private $nome;

    private $con;

    public function __construct($id=null)
    {
        $this->id = $id;
        $this->con = new PDO(SERVIDOR,USUARIO,SENHA);
    }

    public function all() {
        $sql = $this->con->prepare("SELECT * FROM secao");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getnome() {
        return $this->nome;
    }

    public function setnome($nome) {
        $this->nome = $nome;
    }
}