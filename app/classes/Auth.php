<?php


namespace App\classes;
use App\classes\User;

class Auth
{
    private $email;
    private $pass;
    private $users;
    private $user;

    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->pass = $post['password'];
    }

    public function login()
    {
        header('Location: action.php?page=login');
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getAllUser();

        foreach ($this->users as $user)
        {
            if ($this->email == $user['email'] && $this->pass == $user['password'])
            {
                session_start();
                $_SESSION['id']= $user['id'];
//                $_SESSION['id']= $user['id'];
                $_SESSION['name']= $user['name'];
                //echo $user['id'];
//                echo 'okk';
//                exit();
               header('Location: action.php?page=home');
            }
        }
        return 'invalid email password';
    }
}