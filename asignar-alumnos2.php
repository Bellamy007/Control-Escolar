<?php
include_once("bd.php");
include_once("Grupo.php");
$mat = new Grupo();
$cuantos=$_REQUEST['cuantos'];
$id_grupo=$_REQUEST['id_grupo'];
    for($y=0; $y<$cuantos;$y++){
        if(isset($_REQUEST['idu'.$y])){
            $id_alumno=$_REQUEST['idu'.$y];
            $mat->asignargrupoAlumno($id_grupo,$id_alumno);
        }
    }
echo"<div id='ajax_2'>";
$grupos = new Grupo();
$grupos->alumnosNoasignados();
$grupos->comboGrupos();
$grupos->alumnosAsisgnados($id_grupo);
echo"</div>";
require_once("footer.php");
echo"<script type='text/javascript'>
            $(function (e) {
                $('#frmdo').submit(function (e) {
                e.preventDefault()
                    $('#ajax_2').load('asignar-alumnos2.php?' + $('#frmdo').serialize())
                })
            })
        </script>";

/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 2/10/14
 * Time: 01:26 PM
 */ 