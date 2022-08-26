<?php

require 'config.php';
require 'models/Auth.php';
require 'dao/PostDAOMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

$body = filter_input(INPUT_POST, 'body');

if($body) {
    $postDao = new PostDAOMysql($pdo);

    $newPost = new Post();
    $newPost->id_user = $userInfo->id;
    $newPost->type = 'text';
    $newPost->body = $body;
    $newPost->created_at = date('Y-m-d H:i:s');

    $postDao->insert($newPost);
}

header("Location: ".$base);
exit;
