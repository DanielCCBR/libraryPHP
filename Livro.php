<?php

class Livro{
    private $id;
    private $titulo;
    private $autores;
    private $secao_id;

    private $con;

    public function __construct($id=null)
    {
        $this->id = $id;
        $this->con = new PDO(SERVIDOR,USUARIO,SENHA);
    }

    public function all() {
        $sql = $this->con->prepare("SELECT * FROM livro");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create() {
        $sql = $this->con->prepare("INSERT INTO livro (id, titulo, autores, secao_id) VALUES (?,?,?,?)");
        $sql->execute([$this->id, $this->titulo, $this->autores, $this->secao_id]);

        if ( $sql->errorCode()=='00000'){
            header("Location: ./");
        }else{
            echo "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function read() {
        $sql = $this->con->prepare("SELECT * FROM livro WHERE id = ?");
        $sql->execute([$this->id]);
        $row = $sql->fetchObject();
        return $row;
    }

    public function update() {
        $sql = $this->con->prepare("UPDATE livro SET titulo = ?, autores = ? , secao_id = ? WHERE id = ?");
        $sql->execute([$this->titulo, $this->autores, $this->secao_id, $this->id]);

        if ( $sql->errorCode()=='00000'){
            header("Location: ./");
        }else{
            echo "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete() {
        $sql = $this->con->prepare("DELETE FROM livro where id = ?");
        $sql->execute([$this->id]);

        if ( $sql->errorCode()=='00000'){
            header("Location: ./");
        }else{
            echo "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function getid() {
        return $this->id;
    }

    public function setid($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutores() {
        return $this->autores;
    }

    public function setAutores($autores) {
        $this->autores = $autores;
    }

    public function getSecao_id() {
        return $this->secao_id;
    }

    public function setSecao_id($secao_id) {
        $this->secao_id = $secao_id;
    }
}