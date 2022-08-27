<?php

class Post
{
    public $id;
    public $id_user;
    public $type;   // text / photo
    public $body;
    public $created_at;
}

interface PostDAO
{
    public function insert(Post $p);
    public function getHomeFeed($id_user);
}
