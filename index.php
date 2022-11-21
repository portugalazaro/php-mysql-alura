<?php
    require_once "./Connection.php";
    require_once "./src/classes/Artigo.php";

    $consulta  = new Artigo($mysql);
    $dados = $consulta->get_artigos();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog Alura</title>
</head>
<body>
    <div>
        <h1>Blog Alura</h1>
    </div>
    
    <div id="container">
    <?php foreach($dados as $dado){?>
        <div class="post">
            <h2> <a href="src/admin/index.php?id=<?=$dado['id']?>"> <?=$dado['titulo'];?> </a> </h2> 
            <p> <?= $dado['conteudo'];?> </p>
        </div>
    <?php } ?>
    </div>
</body>
</html>