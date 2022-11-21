<?php
    require_once "../../Connection.php";
    require_once "../classes/Artigo.php";
    $consulta = new Artigo($mysql);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $consulta->delete_artigo($_POST['id']);
        header('Location: index.php');
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
    <title>Deletar Artigo</title>
</head>
<body>
    <div id="container">
        <div id="post">
            <h1>Você realmente deseja excluir o artigo?</h1>
            <form method="post" action="deletar-artigo.php">
                <p class="del">
                    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
                    <button class="botao">Excluir</button>
                    <a id="voltar"  href="index.php">Voltar</a>
                </p>
            </form>
        </div>
    </div>

</body>
</html>