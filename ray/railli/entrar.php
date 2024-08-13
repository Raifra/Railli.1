<?php 

if (isset($_POST["entrar"])) {
    include "controller/crudUsuario.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $data = login($email, $password);
    if ($data) {
        session_start();
        $_SESSION["user"] = $data;
        header("Location: index.php");
    } else {
        return "Usuário ou senha inválidos";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/FotoJet-_1_.ico" type="image/x-icon"/>

    </head>

<body>
   
    <div class="divform">
        <header>
            <h1>Efetuar log-in</h1>
        </header>        
    <section>
        <form action="" method="post">
            <label for="nome" >Nome:</label>
            <input type="text" name="name" id="idnome" required> 
            <label for="e-mail">E-mail</label>
            <input type="email" name="email"id="email" required>    
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            
        <input type="submit" name="entrar">
        <p>Não tem uma conta?</p><a href="cad.php">Clique aqui</a>
        <p>Entrar como vendedor</p><a href="cadvendedor.php">Entrar como vendedor</a>
        </form>
    </section>
    </div>
    <div class="divlogo">
        <a><img src="img/logoreta.png" alt="Texto alternativo aqui">
        </a>
     </div>
</body>
</html>