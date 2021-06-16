<?php

require_once(ROOT . '/components/Tools.php');
require_once(ROOT . '/models/UserModel.php');

class UserController
{
    private function checkFields($fields): array
    {
        $errors = [];
        foreach ($fields as $key => $item) {
            if(empty($item))
                $errors[] = ucfirst($key) . ' is required!';
        }

        return $errors;
    }

    private function encodePassword($pass): string
    {
        return md5($pass);
    }

    public function actionLogin() 
    {
        if(!isset($_POST['frm_login'])) {
            require_once(ROOT . '/views/user/LoginView.php');
        } else{
            
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];


            $errors = $this->checkFields($data);

            if($errors) {
                foreach ($errors as $e) {
                    Tools::showMessage($e, 'red');
                }
            } else {

                $um = new UserModel();
                $user = $um->getByEmail($data['email']);

                if (!$user || $this->encodePassword($data['password']) !== $user->password) {
                    Tools::showMessage("Incorrect password or email...", 'red');
                } else {                     
                    $um->updateToken($user->id);
                    
                    header('Location:' . HOME_URL);

                    }
                }
            }       
        
    }

    public function actionLogout()
    {
        $um = new UserModel();
        $um->disableToken();

        header('Location: /login');
        return;
    }

    public function actionRegistration()
    {
        if (!isset($_POST['frm_registration'])) {
            require_once(ROOT . '/views/user/RegistrationView.php');
        }
        else {
            $data = [
                'username'      => $_POST['username'],
                'email'         => $_POST['email'],
                'password'      => $_POST['password'],
                'cPassword'     => $_POST['cPassword'],
            ];

            $errors = $this->checkFields($data);

            if($errors) {
                foreach ($errors as $e) {
                    Tools::showMessage($e, 'red');
                }
            } else {
                unset($data['cPassword']);
                $data['password'] = $this->encodePassword($data['password']);

                $um = new UserModel();
                $user = $um->getByEmail($data['email']);
                
                if($user) {
                    Tools::showMessage("$user->email is exists....", 'red');
                } else {
                    $um->add($data);

                    header('Location: /login');
                }             

            }

        }
    }
}