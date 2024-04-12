<?php

require 'vendor/autoload.php';
use App\Login;

$login = new Login();
$login->executar('eu', '123');

?>