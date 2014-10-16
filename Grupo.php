<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 2/10/14
 * Time: 06:12 PM
 */
class Grupo{
    private  $nombre;
    private  $avatar;
    private  $estatus;
    private  $orden;
    public function createUsuario($nombre,$estatus){
        mysql_query("INSERT INTO mat_maes (nombre,estatus) values ($nombre,$$estatus)")or die ("ERRRO DE CONSULTA");
    }
    public function deleteUsuario($nombre,$estatus){

    }
    public function updateUsuario($nombre,$estatus){

    }
    public function readUsuario($nombre,$estatus){

    }
    public function viewUsuario($nombre,$estatus){

    }
    public function alumnosNoasignados(){
        $sql=mysql_query("SELECT * FROM grupo_alum ORDER BY id_alumno") or die (mysql_error());
        $filas_1=mysql_num_rows($sql);
        if($filas_1 > 0){
            $condicion="";
            for($y=0; $y<$filas_1;$y++){
                $idu=mysql_result($sql,$y,'id_alumno');
                $condicio="AND iduser != '$idu'"." ";
                $condicion.=$condicio;
            }
        }else{ $condicion="AND iduser"; }
        $sq=mysql_query("SELECT * FROM usuario WHERE lvl='3' $condicion ORDER BY iduser") or die (mysql_error());
        $field=mysql_num_rows($sq);
        if($field > 0){
            echo"<form action='asignar-alumnos.php' method='POST' target='_self' name='frmdo' id='frmdo'>";
            echo"<input type='hidden' name='cuantos' value='$field'>";
            echo"<table class='table table-striped'>";
            echo"<thead>
                    <tr><th>Alumnos</th></tr>";
            echo"</thead>";
            for($y=0; $y<$field;$y++){
                $idu=mysql_result($sq,$y,'iduser');
                $nombre=mysql_result($sq,$y,'name');
                $app=mysql_result($sq,$y,'fname');
                $apm=mysql_result($sq,$y,'lname');
                echo"<tr><td><input type='checkbox' name='idu".$y."' id='idu".$y."' value='$idu' >$nombre $app $apm</td></tr>";
            }
        } else{ echo"<table class='table table-striped'><tr><td>No hay Alumnos por asignar</td></tr></table>"; }
    }
    public function comboGrupos(){

        $sql_1=mysql_query("SELECT * FROM grupos where estatus='1' ORDER BY nombre") or die (mysql_error());
        $filas=mysql_num_rows($sql_1);
        echo"<tr><th>Grupos</th></tr>";
        echo"<tr>
        <td>
        <select name='id_grupo' id='id_grupo'>";
        for($y=0; $y<$filas;$y++){
            $id_grupo=mysql_result($sql_1,$y,'id_grupo');
            $grupo=mysql_result($sql_1,$y,'nombre');
            echo"<option value='$id_grupo'>$grupo</option>";
        }
        echo"   </select>
        <input type='submit' value='Asignar'></td>
        </tr>";
        echo"</table>";
        echo"</from>";

    }
    public  function alumnosAsisgnados($id_grupo){
        $sql_2="SELECT u.iduser,u.name,u.lname,u.fname,g.nombre AS grupo,g.id_grupo
FROM grupos AS g,usuario AS u,grupo_alum AS gr
WHERE gr.id_grupo=g.id_grupo AND u.iduser=gr.id_alumno and gr.id_grupo='$id_grupo'";
        $query=mysql_query($sql_2);
        $rows=mysql_num_rows($query);
        echo"<table class='table table-striped'>
<tr><th colspan='4'>Alumnos Asignados</th><th>Eliminar</th></tr></tr>";
        if($rows > 0){
            for($y=0; $y<$rows;$y++){
                $iduser=mysql_result($query,$y,'iduser');
                echo"<tr><td>".mysql_result($query,$y,'name')."</td>"
                    ."<td>".mysql_result($query,$y,'fname')."</td>"
                    ."<td>".mysql_result($query,$y,'lname')."</td>"
                    ."<td>".mysql_result($query,$y,'grupo')."</td>"
                    ."<td><a href='asignar-alumnos.php?id_alumno=$iduser'>Elim</a></td></tr>";
            }
            echo"</table>";
        }else{ echo"<table class='table table-striped'><tr><td>No se asigno ningun alumno, seleccione uno.</td></tr></table>"; }
    }
    public function asignargrupoAlumno($id_grupo,$id_alumno){
        $sql5=mysql_query("insert into grupo_alum (id_grupo,id_alumno) values('$id_grupo','$id_alumno')") or die (mysql_error());

    }
    public  function  deleteasignacionAlumno($id_alumno){
        $consulta=mysql_query("DELETE FROM grupo_alum WHERE id_alumno=$id_alumno") or die("error");
        echo"Se borro la asignacion del alumno";
    }
}