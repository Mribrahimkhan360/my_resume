<?php


namespace App\classes;


class Auth
{
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: action.php?status=index');
    }

}