<?php

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;

$auth   = new HelloWorld();
$auth->index();