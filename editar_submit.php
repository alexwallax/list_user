<?php
    include 'contato.class.php';

    $contato = new Contato(); //instanciando a class Contato

    if(!empty($_POST['id'])) { //verifica se o id esta vazio 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        if(!empty($email)) {
            $contato->editar($nome, $email, $id);
        }
        header("Location: index.php"); //redirecionando para o index.php
    }