<?php

require_once 'Server.php';

$user = $_POST['usuario'];
$pass =$_POST['clave'] ;

$server = new Server();
$server->login($user, $pass);
$exito=$server->login($user, $pass);

