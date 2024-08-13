<?php 



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="css/cadvendedor.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

    </head>

<body>
   
    <div class="divform">
        <header>
            <h1 id="h"> Cadastro de Vendedor</h1>
        </header>   
        
        <section>

        
        <form action="cad.php" method="get">
            <label for="nome" >Nome da empresa</label>
            <input type="number" name="sobrenome"id="idsobrenome" required>
            <label for="Endereco">Endereço</label>
            <input type="text" nome= "Endereco" id="Endereco" required>
            <label for="e-mail">E-mail</label>
            <input type="email" name="email"id="email" required>
            <!-- <label for="RG">RG</label>
            <input type="text" nome= "RG" id="RG" required> -->
            <label for="cnpj">CNPJ</label>
            <input type="text" name="cnpj" id="idcnpj" placeholder="000.000.000-00" maxlength="14" required>
            <div class="nums">
                <label for="ididade">Idade</label>
                <input type="date" name="idade" id="ididade" required>
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" maxlength="15" required>
            </div>
    <script>
        document.getElementById('idcnpj').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '');
            x = x.match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' + x[3] : '') + (x[4] ? '-' + x[4] : '');
        });
    </script>
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="idcpf" placeholder="000.000.000-00" maxlength="14" required>
    <script>
        document.getElementById('idcpf').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '');
            x = x.match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' + x[3] : '') + (x[4] ? '-' + x[4] : '');
        });
    </script>
    <script>
        document.getElementById('telefone').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '');
            x = x.match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
    </script>
        <input type="submit">
        </form>

       
    </section>
    </div>
    <div class="divlogo">
        <a><img src="img/logoreta.png" alt="Texto alternativo aqui">
        </a>
     </div>
     
</body>
<!-- ue, vc fez de tras pra frente KKKKKKKKKKKKKKK -->
</html>