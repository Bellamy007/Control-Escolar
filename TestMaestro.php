<?php

require('Usuario.php');

$user=new Usuario();
$user -> createUsuario();
$user -> readUsuario();
$user -> updateUsuario();
$user -> deleteUsuario();
$user -> viewUsuario();




?>