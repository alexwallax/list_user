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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Editar</title>
</head>
<body>

    <div class="container">

        <h1>Editar Usuário</h1>
        <form method="POST" action="editar_submit.php">
            <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
            Nome:<br/>
            <input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>
            E-mail:<br/>
            <input type="email" name="email" value="<?php echo $info['email']; ?>"><br/><br/>

            <input class="btn btn-success" type="submit" value="Salvar" /><br/><br/>
        </form>

    </div>
</body>
</html>