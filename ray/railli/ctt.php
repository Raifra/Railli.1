<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Railli</title>
    <link rel="stylesheet" href="css/ctt.css">
    <link rel="icon" href="img/FotoJet-_1_.ico" type="image/x-icon" />
</head>

<body>

    <?php include_once "./components/header.php" ?>
    <section>
        <form action="agradecimento.html" method="get">
            <label for="nome">Nome:</label>
            <input type="text" name="name" id="idnome" required>
            <label for="e-mail">E-mail</label>
            <input type="email" name="email" id="email" required>
            <label for="input-textarea">Digite seu texto:</label>
            <textarea id="input-textarea" class="styled-textarea" maxlength="200" placeholder="Digite seu texto aqui..." required></textarea>
            <div id="char-count">0/200 caracteres</div>
            <input type="submit">
        </form>
    </section>
    </div>
    <script>
        const textarea = document.getElementById('input-textarea');
        const charCount = document.getElementById('char-count');

        textarea.addEventListener('input', () => {
            const currentLength = textarea.value.length;
            charCount.textContent = `${currentLength}/200 caracteres`;
        });
    </script>
</body>

</html>