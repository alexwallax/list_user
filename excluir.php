<?php
    include 'contato.class.php';

    $contato = new Contato();

    if(!empty($_GET['id'])) { //verifica se existe o id

        $id = $_GET['id'];

        /*
        echo "ID: ".$id; //testar se esta recebendo id certo
        */

        $contato->excluir($id);//executar a função excluir la de excluir.php

    } 
        header("Location: index.php"); //redireciona para o index.php
    
