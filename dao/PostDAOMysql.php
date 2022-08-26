<?php

require_once 'models/Post.php';

class PostDAOMysql implements PostDAO 
{
    private $pdo;

    public function __construct(PDO $dirver)
    {
        $this->pdo = $dirver;
    }

    public function insert(Post $p)
    {
        $sql = $this->pdo->prepare('INSERT INTO posts (
            id_user, type, body, created_at
        ) VALUES (
            :id_user, :type, :body, :created_at
        );');

        $sql->bindValue(':id_user', $p->id_user);
        $sql->bindValue(':type', $p->type);
        $sql->bindValue(':body', $p->body);
        $sql->bindValue(':created_at', $p->created_at);
        $sql->execute();
    }
}
