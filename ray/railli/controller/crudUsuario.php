<?php

require_once('../conexao.php');

if (isset($_POST[]))
{
    $nome = $_POST["name"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $estado = $_POST["state"];
    $senha = $_POST["password"];
 
   else {
    $sql = "INSERT INTO cadastro (name, cpf, email, state, password) VALUES ('$nome', '$cpf', '$email', '$estado', '$senha')";
    $sqlcombanco = $conn->prepare($sql);
   
    if($sqlcombanco->execute())
    {
        echo "<strong>OK!</strong> o professor
        $nome foi incluido com sucesso!!!";
    }
}
}

?>