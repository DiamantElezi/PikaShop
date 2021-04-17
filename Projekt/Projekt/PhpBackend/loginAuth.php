<?php
include_once 'AdminClass.php';
include_once 'SimpleUser.php';
require_once 'UserMapper.php';
session_start();
//main
if (isset($_POST['submit_login'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['submit_signup'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../login.php");
}


class RegisterLogic
{
    private $usernameR = "";
    private $passwordR = "";
    private $emailR = "";

    public function __construct($formData)
    {
        $this->usernameR = $formData['usernameR'];
        $this->passwordR = $formData['passwordR'];
        $this->emailR = $formData['emailR'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->usernameR,$this->emailR, $this->passwordR,0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../index.php");
    }
}


class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../index.php');
        }
         else {
            echo '3';
            header("Location:../login.php");
        }
    }
    

    function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {   
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'],$user['username'], $user['password'], $user['role']);
                $obj->setSession();              
            } else {
                $obj = new SimpleUser($user['id'],$user['username'], $user['password'], $user['role']);
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}
