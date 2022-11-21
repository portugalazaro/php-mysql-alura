<?php
    require_once "../../Connection.php";
    require_once "../classes/Artigo.php";

    $consulta  = new Artigo($mysql);

    if(isset($_GET['id']) == NULL){
        header('Location: ../../index.php');
        exit;
    }
    $dados = $consulta->get_artigo($_GET['id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Artigos</title>
</head>
<body>
    <div>
        <h1>Blog Alura</h1>
    </div>

    <div id="container">

        <div class="post">
            <h2> <?=$dados['titulo'];?> </h2> 
            <p> <?=$dados['conteudo'];?> </p>
            <div>
                <a class="editar" href="editar-artigo.php?id=<?=$dados['id'];?>">Editar</a>
                <a class="delete" href="deletar-artigo.php?id=<?=$dados['id'];?>">Deletar</a>
                <a id="voltar" href="../../index.php">Voltar</a>
            </div>
        </div>

    </div>
</body>
</html>