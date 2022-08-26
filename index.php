<?php

require 'config.php';
require 'models/Auth.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'home';

require 'partials/header.php';
require 'partials/menu.php';
?>


<?php
require 'partials/footer.php';
?>
