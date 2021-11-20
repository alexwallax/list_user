<?php
    include 'contato.class.php';

    $contato = new Contato(); //instanciando a class Contato

    if(!empty($_POST['id'])) { //verifica se o id esta vazio 
        $nome = $_POST['nome'];
        $id = $_POST['id'];

        $contato->editar($nome, $id);

        header("Location: index.php"); //redirecionando para o index.php
    }