<?php

    require_once "../../Connection.php";
    require_once "../classes/Artigo.php";
    $consulta  = new Artigo($mysql);
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $consulta->update_artigo($_POST);
        header('Location: index.php');
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
    <title>Editar Artigo</title>
</head>
<body>
    <div>
        <h1>Blog Alura</h1>
        <div id="container">
        <form action="editar-artigo.php" method="post">
            <input name="id" type="hidden" value="<?=$dados['id']?>">
            <input name="titulo" placeholder="Titulo" type="text" value="<?=$dados['titulo'];?>"> <br>
            <textarea name="conteudo" id="" cols="30" rows="10" > <?=$dados['conteudo'];?> </textarea> <br>
            <button class="editar">EDITAR</button>
        </form>
    </div>
    </div>
</body>
</html>