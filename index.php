<?php
    require_once "inc/config.php";

    if(isset($_GET['classe']) && isset($_GET['acao'])) {
        $controller = $_GET['classe'].'Controller';
        $acao = $_GET['acao'];
    }else {
        $controller = 'LivroController';
        $acao = 'all';
    }

    require_once "controller/".$controller.".php";
    $app = new $controller();
    $app->$acao();
?>