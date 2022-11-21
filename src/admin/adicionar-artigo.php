<?php
    require_once "../../Connection.php";
    require_once "../classes/Artigo.php";
    $consulta = new Artigo($mysql);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $consulta->adicionar_artigo($_POST);
        header('Location: ../../index.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Adicionar Artigo</title>
</head>
<body>
    <div id="container">
        <form action="#" method="post">
            <input name="titulo" placeholder="Titulo" type="text"> <br>
            <textarea name="conteudo" id="" cols="30" rows="10"></textarea> <br>
            <button>CRIAR</button>
        </form>
    </div>
</body>
</html>