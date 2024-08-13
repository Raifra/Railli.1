<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: entrar.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Railli</title>
    <link rel="stylesheet" href="css/carrinho.css">
    <link rel="icon" href="img/FotoJet-_1_.ico" type="image/x-icon" />
</head>

<body>
    <?php include_once "./components/header.php"?>
    <div class="produt">

    </div>


</body>


<!-- 
  <footer>  
    <div class="text">
        Amor e sustentabilidade para vestir seus pequenos com estilo e responsabilidade!
    </div>
</footer> -->

</html>