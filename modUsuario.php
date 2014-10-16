<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 18/09/14
 * Time: 01:43 PM
 */
echo'<meta charset="utf-8" xml:lang="es">';
require('Usuario.php');
if($_GET){
    $iduser=$_GET['uduser'];
$alum= new Usuario();
$alum ->id=$iduser;
$alum -> updateUsuario();
}
?>