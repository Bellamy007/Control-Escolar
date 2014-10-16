<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Asigna Alumno-Grupo</h1>
    <div class="table-responsive">

<?php
require_once("header.php");
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 3/10/14
 * Time: 06:50 PM
 */
include"bd.php";
include"Materia.php";
$new = new Materia();
$new->materiasMaestros($idusuario);
echo"</div>
</div>";
require_once("footer.php");