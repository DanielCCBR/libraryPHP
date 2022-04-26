<?php
require_once "model/Livro.php";
require_once "model/Secao.php";

class LivroController{
    public function all() {
        $obj = new Livro();
        $livros = $obj->all();

        include 'view/Livro_all.php';
    }

    public function create() {
        $obj = new Livro();
        $obj2 = new Secao();
        $secoes = $obj2->all();

        if(isset($_POST["titulo"]) && isset($_POST["autores"]) && isset($_POST["secao"])) {

            $obj->setTitulo($_POST["titulo"]);
            $obj->setAutores($_POST["autores"]);
            $obj->setSecao_id($_POST["secao"]);

            $obj->create();
        }

        include "view/Livro_create.php";
    }

    public function read() {
        $obj = new Livro();
        $obj->setId($_GET['id']);
        $obj->read();
    }

    public function update() {
        $obj = new Livro($_GET['id']);
        $obj2 = new Secao();
        $secoes = $obj2->all();

        if(isset($_POST["titulo"]) && isset($_POST["autores"]) && isset($_POST["secao"])) {

            $obj->setTitulo($_POST["titulo"]);
            $obj->setAutores($_POST["autores"]);
            $obj->setSecao_id($_POST["secao"]);

            $obj->update();
        }

        $livro = $obj->read();
        include "view/Livro_update.php";
    }

    public function delete() {
        $obj = new Livro();
        $obj->setId($_GET['id']);
        $livro = $obj->delete();
    }
}