<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Adicionar</title>
</head>
<body>

    <div class="container">

        <h1>Adicionar Usuário</h1>
        <form method="POST" action="adiconar_submit.php">
        Nome:<br/>
        <input type="text" name="nome" /><br/><br/>
        E-mail:<br/>
        <input type="email" name="email" /><br/><br/>

        <input class="btn btn-primary" type="submit" value="Adicionar" /><br/><br/>
        </form>

    </div>
</body>
</html>