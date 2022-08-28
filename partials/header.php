<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>assets/css/style.css" />
    <title></title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href=""><img src="<?= $base; ?>assets/images/devsbook_logo.png" /></a>
            </div>
            <div class="head-side">
                <div class="head-side-left">
                    <div class="search-area">
                        <form action="<?= $base; ?>search.php" method="GET">
                            <input type="search" placeholder="Pesquisar" name="s" />
                        </form>
                    </div>
                </div>
                <div class="head-side-right">
                    <a href="<?= $base; ?>perfil.php" class="user-area">
                        <div class="user-area-text"><?= $userInfo->name; ?></div>
                        <div class="user-area-icon">
                            <img src="<?= $base; ?>media/avatars/<?= $userInfo->avatar; ?>" />
                        </div>
                    </a>
                    <a href="<?= $base; ?>logout.php" class="user-logout">
                        <img src="<?= $base; ?>assets/images/power_white.png" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="container main">
