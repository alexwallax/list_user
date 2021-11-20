<?php
    include 'contato.class.php';

    $contato = new Contato();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Contatos</h1>
    <a href="adicionar.php">Adicionar</a><br/><br/>
    <table border="1" width="600px">
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
            <td>
                <a href="editar.php?id=<?php echo $item['id']; ?>"> EDITAR | </a>
                <a href="excluir.php?id=<?php echo $item['id']; ?>"> EXCLUIR </a>
            </td>><!--ações 4º coluna-->
        </tr><!--2º lina-->
        <?php endforeach; ?>

    </table>
</body>
</html>