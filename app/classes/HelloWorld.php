<?php

namespace app\classes;
class HelloWorld
{
    public $message;
    public $name;
    public $email;
    public function __construct()
    {
        $this->name      = 'BITM';
        $this->email     = 'info@bitm.org.bd';
        // $this->message   = 'Hello World';
    }
    public function index(){
        header('location: pages/index.php');
    }

}