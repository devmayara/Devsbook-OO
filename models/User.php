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
}
