<?php

require_once(ROOT . '/models/UserModel.php');

class CookiesManager
{
    public static $authUser;

    public static function setUserCookies($token)
    {
        setcookie(COOKIE_TOKEN_KEY, $token, time() + COOKIE_LIFE_TIME, '/');
    }

    public static function clearCookies()
    {
        setcookie(COOKIE_TOKEN_KEY, '', time() - COOKIE_LIFE_TIME, '/');
    }

    public static function check()
    {
        if(isset($_COOKIE[COOKIE_TOKEN_KEY])) {
            $token = $_COOKIE[COOKIE_TOKEN_KEY];
            
            $um = new UserModel();
            $user = $um->getByToken($token);

            //TODO: time check
            if(!$user)
                return false;

            self::$authUser = $user;

            return true;

        }
    }
}