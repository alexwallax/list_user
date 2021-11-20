<?php
    include 'contato.class.php';

    $contato = new Contato(); //instanciando a class Contato

    if(!empty($_POST['email'])) { //verifica se o email esta vazio (obs porque o email é obrigatorio no banco)
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $contato->adicionar($email, $nome); //executando o adicionar

        header("Location: index.php"); //redirecionando para o index.php
    }