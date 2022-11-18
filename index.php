<?php
    require_once "./src/classes/Artigo.php";

    $artigo  = new Artigo();
    $artigos =  $artigo->exibeArtigo();

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
    <header>
        <h2>Meu Blog</h2>
    </header>

    <div id="box">

        <?php foreach($artigos as $artigo){?>

            <div class="container">
                <h1> <?=$artigo['titulo']?> </h1>
                <p>
                    <?=$artigo['conteudo']?>
                </p>
                <a href="">Acessar</a>
            </div>

        <?php }?>

    </div>

</body>
</html>