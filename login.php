<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>assets/css/login.css" />
    <title>Devsbook | Login</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?= $base; ?>login.php"><img src="<?= $base; ?>assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form action="<?= $base; ?>login_action.php" method="POST">

            <?php if(!empty($_SESSION['flash'])): ?>
                <div class="flash"><?= $_SESSION['flash']; ?></div>
                <?php $_SESSION['flash'] = ''; ?>
            <?php endif; ?>

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema" />

            <a href="<?= $base; ?>signup.php">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>
</html>
