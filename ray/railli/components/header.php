<?php session_start()?>

<header>
    <div>
        <img class="logo" src="img/logoreta.png" alt="logo railli">
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="colecoes.php">Coleções</a></li>
            <li><a href="tab.php">Lista</a></li>
            <li><a href="ctt.php">Contato</a></li>
        </ul>
    </div>
    </div>
    <div class="hover-container">

    <?php 
    if (isset($_SESSION["user"])) {
        echo "<a href='perfil.php'><img src='img/person.circle.png' alt='Imagem' id='i2' />
        </a>
        <div class='hover-text'>Perfil</div>";
    } else {
        echo "<a href='entrar.php'><img src='img/person.circle.png' alt='Imagem' id='i2' />
        </a>
        <div class='hover-text'>login</div>";
    }
    ?>
</header>