<?php
    include 'contato.class.php';

    $contato = new Contato();

    //adicionando um novo contato
    /*
    $contato->adicionar('teste02@email.com', 'teste02');
    $contato->adicionar('email02@ig.com.br');
    */

    //buscar um unico contato 
    /*
    $nome = $contato->getnome('teste@email.com');
    echo "Nome: ".$nome."<br/>";
    */

    //buscando todos os contatos
    /*
    $lista = $contato->getAll();
    print_r($lista);//para vizualizar um array
    */

    //atualizando um contato
    /*
    $contato->editar('João', 'email@ig.com.br');
    */ 

    //excluir um contato
    $excluir = $contato->excluir('email02@ig.com.br');

    if($excluir == true) {
        echo "Excluido com sucesso";
    } else {
        echo "Usuário não existe";
    }












?>