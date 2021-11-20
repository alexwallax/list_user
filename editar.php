<?php
    include 'contato.class.php';

    $contato = new Contato();

    if(!empty($_GET['id'])) { //se o id não estiver vazio entra na condição
        $id = $_GET['id']; //variavel $id armazena o que vem do get-id

        $info = $contato->getInfo($id); //variavel $info executa a função getInfo passando parametro a variavel $id 

        if(empty($info['email'])) { //verifica se email esta vazio se estiver direciona para index.php
            header("Location: index.php"); //redireciona para o index.php
            exit;
        }
    } else {
        header("Location: index.php"); //redireciona para o index.php
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form method="POST" action="editar_submit.php">
        <input type="hidden" name="id" value="<?php echo $info['id'] ?>" />
        Nome:<br/>
        <input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>
        E-mail:<br/>
        <?php echo $info['email']; ?>br/><br/>

        <input type="submit" value="Salvar" /><br/><br/>
    </form>
</body>
</html>