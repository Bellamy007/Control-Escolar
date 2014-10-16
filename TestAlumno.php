<?php
/**
 * Created by PhpStorm.
 * User: MAQ13-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:28 PM
 */
require"Alumno.php";
$alum= new Usuario();
$alum -> createUsuario();
$alum -> readUsuario();
$alum -> updateUsuario();
$alum -> deleteUsuario();
$alum -> viewUsuario();
?>