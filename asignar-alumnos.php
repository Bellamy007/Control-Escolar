<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Asigna Alumno-Grupo</h1>
    <div class="table-responsive">

<?php
require_once("header.php");
require_once("Grupo.php");
include_once"bd.php";
echo"<div id='ajax_2'>";
$mat = new Grupo();
if(isset($_GET['id_alumno'])){
    $id_alumno=$_GET['id_alumno'];
    $mat->deleteasignacionAlumno($id_alumno);
}
$grupos = new Grupo();
$grupos->alumnosNoasignados();
$grupos->comboGrupos();
echo"</div>";
echo"</div>
</div>";
require_once("footer.php");
echo"<script type='text/javascript'>
            $(function (e) {
                $('#frmdo').submit(function (e) {
                e.preventDefault()
                    $('#ajax_2').load('asignar-alumnos2.php?' + $('#frmdo').serialize())
                })
            })
        </script>";
echo"</div>";
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 2/10/14
 * Time: 12:47 PM
 */