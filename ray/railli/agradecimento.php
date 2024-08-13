<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="css/ctt.css">
    <link rel="icon" href="img/FotoJet-_1_.ico" type="image/x-icon"/>

    </head>
    <header> <a href="index.html"><img src="img/seta.png" alt="seta" id="seta"></a>
    </header>
<body>
    
    <div class="obrigada"><h2>Obrigada por sua mensagem!</h2><br> Entraremos em contato em breve.</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.querySelector('.obrigada').classList.add('show');
    }, 3000); // Delay de 3 segundos
});
</script>
</html>