<?php

class User
{
    public $id;
    public $name;
    public $birtdate;
    public $email;
    public $password;
    public $city;
    public $work;
    public $avatar;
    public $cover;
    public $token;

}

interface UserDAO
{
    public function findByToken($token);
    public function findByEmail($email);
    public function findById($id);
    public function update(User $u);
    public function insert(User $u);
}
