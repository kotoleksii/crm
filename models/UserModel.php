<?php

require_once(ROOT . '/models/BaseModel.php');
require_once(ROOT . '/models/User.php');
require_once(ROOT . '/components/CookiesManager.php');

class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('users');
    }

    private function generateToken(int $length): string 
    {
        return bin2hex(random_bytes($length));
    }

    public function get()
    {
        return $this->getAll()->fetchAll();
    }

    public function add($fields)
    {        
        $this->addRow($fields);
    }

    public function getByEmail(string $email): ?User
    {
        $args = [
            'email' => $email,
        ];

        $userFields = $this->getSome($args)->fetch();
        
        if($userFields) {
            return new User($userFields);
        }

        return null;
    }

    public function updateToken($userId)
    {
        $token = $this->generateToken(64);
        
        $this->updateRow($userId, ['token' => $token]);

        CookiesManager::setUserCookies($token);
    }

    public function getByToken($token): ?User
    {
        $userFields = $this->getSome(['token' => $token])->fetch();     
        
        if($userFields) {
            return new User($userFields);
        }

        return null;
    }

    public function disableToken()
    {
        $user = CookiesManager::$authUser;

        $this->updateRow($user->id, ['token' => null]);


        CookiesManager::clearCookies();


    }
}