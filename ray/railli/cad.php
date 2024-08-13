<?php 

ini_set("display_errors",1);

if(isset($_POST["cadastrar"])){
    $nome = $_POST["name"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $estado = $_POST["state"];
    $senha = $_POST["password"];
    
    require_once realpath(__DIR__ . "/controller/crudUsuario.php");
    $res = cadastrarUsuario($nome, $cpf, $email, $estado, $senha);

    if($res){
        header("Location: index.php");
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
            <h1>Criar conta</h1>
        </header>        
    <section>
        
        <form action="../crudUsuario.php" method="post">
            <label for="nome" >Nome:</label>
            <input type="text" name="name" id="idnome" required>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">    
            <label for="e-mail">E-mail</label>
                <input type="email" name="email"id="email" required>
            <label for="state">Estado:</label>
        <select id="state" name="state">
            <option value="">Selecione o Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            
        <input type="submit" name="cadastrar" value= "cadastrar">
        </form>
    </section>
    </div>
    <div class="divlogo">
        <a><img src="img/logoreta.png" alt="Texto alternativo aqui">
        </a>
     </div>
</body>
<script>
    // script.js

document.addEventListener('DOMContentLoaded', function () {
    const cpfInput = document.getElementById('cpf');

    // Adiciona a máscara ao CPF
    cpfInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 3 && value.length <= 6) {
            value = value.replace(/(\d{3})(\d+)/, '$1.$2');
        } else if (value.length > 6 && value.length <= 9) {
            value = value.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3');
        } else if (value.length > 9) {
            value = value.replace(/(\d{3})(\d{3})(\d{3})(\d+)/, '$1.$2.$3-$4');
        }
        e.target.value = value;
    });

    // Validação básica de CPF
    document.getElementById('cpf-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const cpf = cpfInput.value.replace(/\D/g, '');
        if (validateCPF(cpf)) {
            alert('CPF válido!');
        } else {
            alert('CPF inválido!');
        }
    });

    function validateCPF(cpf) {
        // Validação básica do CPF (não é completa)
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
            return false;
        }
        let sum = 0;
        let remainder;
        for (let i = 1; i <= 9; i++) {
            sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
        }
        remainder = (sum * 10) % 11;
        if (remainder === 10 || remainder === 11) {
            remainder = 0;
        }
        if (remainder !== parseInt(cpf.charAt(9))) {
            return false;
        }
        sum = 0;
        for (let i = 1; i <= 10; i++) {
            sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
        }
        remainder = (sum * 10) % 11;
        if (remainder === 10 || remainder === 11) {
            remainder = 0;
        }
        return remainder === parseInt(cpf.charAt(10));
    }
});

</script>
</html>