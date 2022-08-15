<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css" />
    <title>Devsbook | Cadastro</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?= $base; ?>/"><img src="<?= $base; ?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form action="<?= $base; ?>/signup_action.php" method="POST">

            <?php if(!empty($_SESSION['flash'])): ?>
                <div class="flash"><?= $_SESSION['flash']; ?></div>
                <?php $_SESSION['flash'] = ''; ?>
            <?php endif; ?>

            <input placeholder="Digite seu nome completo" class="input" type="text" name="name" />

            <input placeholder="Digite sua data de nascimento" class="input" id="birthdate" type="text" name="birthdate" />

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Fazer cadastro" />

            <a href="<?= $base; ?>/login.php">Já tem conta? Faça o login.</a>
        </form>
    </section>

    <script src="https://unpkg.com/imask"></script>
    <script>
        IMask(
            document.getElementById('birthdate'),
            {mask: '00/00/0000'}
        );
    </script>
</body>
</html>
