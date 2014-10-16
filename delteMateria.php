<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Borrar Materia</h1>
    <div class="table-responsive">

<?php
require("header.php");
include_once("bd.php");
include_once("Materia.php");
$id=$_REQUEST['id_materia'];
$id_maestro=$_REQUEST['id_maestro'];
$mat = new Materia();
$mat->deleteasignacion($id,$id_maestro);