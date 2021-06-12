<?php

class User
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $token; 

    public function __construct($fields)
    {
        $this->id = $fields['id'];
        $this->username = $fields['username'];
        $this->email = $fields['email'];
        $this->password = $fields['password'];
    }  
}
