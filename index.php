<?php
    include 'contato.class.php';

    $contato = new Contato();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Lista</title>
</head>
<body>

    <div class="container">

        <br/>

        <a class="btn btn-primary" href="adicionar.php">Adicionar</a><br/><br/>

        <table>
            <tr>
                <th>ID</th><!--1º coluna-->
                <th>NOME</th><!--2º coluna-->
                <th>E-MAIL</th><!--3º coluna-->
                <th>AÇÕES</th><!--4º coluna-->
                
            </tr><!--1º lina-->

            <?php
                $lista = $contato->getAll();//pegar a lista de todos os contatos
                foreach($lista as $item) : //varrer toda lista e colocar dentro do array $item
            ?>
            <tr>
                <td><?php echo $item['id']; ?></td><!--resultado 1º coluna-->    
                <td><?php echo $item['nome']; ?></td>><!--resultado 2º coluna-->
                <td><?php echo $item['email']; ?></td>><!--resultado 3º coluna-->
                <td><hr>
                    <a class="btn btn-success" href="editar.php?id=<?php echo $item['id']; ?>"> EDITAR </a>
                    <a class="btn btn-danger" href="excluir.php?id=<?php echo $item['id']; ?>"> EXCLUIR </a>
                </td>><!--ações 4º coluna-->
            </tr><!--2º lina-->
            <?php endforeach; ?>



        </table>

    </div>


</body>
</html>