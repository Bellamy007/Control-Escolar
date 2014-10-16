<?php
include_once('bd.php');
/**
 * Created by PhpStorm.
 * User: Compaq
 * Date: 19/09/14
 * Time: 06:41 PM
 */
Class Materia{
    public  $idmateria;
    private $materia;
    private $avatar;
    private $orden;
    private $estatusm;


    public function createMateria($materia, $avatar, $orden){
        echo"Crear Materia<br>";
        $query="INSERT INTO materias (nombre, avatar, orden, estatus)
                      VALUES ('$materia' ,'$avatar', '$orden', 1)";
        $result=mysql_query($query)or die ("error dae ");
        echo"Registro insertado correctamente<br>";
    }
    public function readMateria(){
        echo"Ver Materia<br>";
        $query="SELECT * FROM materias";
        $result=mysql_query($query)or die ("error de consuiñltyasuygf");

        echo"<table class='table table-striped'>
                     <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Avatar</th>
                            <th>Orden</th>
                            <th>Estatus</th>
                        </tr>
                     </thead>";
        while($field=mysql_fetch_array($result)){
            $this->idmateria=$field['id_materia'];
            $this->materia=$field['nombre'];
            $this->avatar=$field['avatar'];
            $this->orden=$field['orden'];
            $this->estatusm=$field['estatus'];
            echo"<tbody>";
            echo"<tr>";
            echo"<td>".$this->idmateria."</td>";
            echo"<td>".$this->materia."</td>";
            echo"<td>".$this->avatar."</td>";
            echo"<td>".$this->orden."</td>";
            echo"<td>".$this->estatusm."</td>";
            echo"</tr>";
            echo"</tbody>";
        }
        echo"</table>";

    }
    public function updateMateria($id_mod, $materia, $avatar, $orden){
        echo"Modificar Materia<br>";
        $query="UPDATE materias SET nombre='$materia',avatar='$avatar',orden='$orden' WHERE id_materia=$id_mod";
        $result=mysql_query($query)or die ("error de consulta");
        echo"Registro Actualizado correctamente<br>";
    }
    public function deleteMateria($id_del){
        echo"Eliminar Materia<br>";
        $query="DELETE FROM materias  WHERE  id_materia=$id_del";
        $result=mysql_query($query)or die ("error de consuiñltyasuygf");
        echo"Registro eliminado correctamente<br>";

    }
    public function viewMateria($id_user){
        echo"Ver Materia Especifico<br>";
        $query="SELECT * FROM materias WHERE  estatus='1' AND id_materia=$id_user";
        $result=mysql_query($query)or die ("error de consuiñltyasuygf");
        echo"<table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Avatar</th>
                            <th>Orden</th>
                            <th>Estatus</th>
                        </tr>
                     </thead>";
        while($field=mysql_fetch_array($result)){
            $this->idmateria=$field['id_materia'];
            $this->materia=$field['nombre'];
            $this->avatar=$field['avatar'];
            $this->orden=$field['orden'];
            $this->estatusm=$field['estatus'];
            echo"<tbody>";
            echo"<tr>";
            echo"<td>".$this->idmateria."</td>";
            echo"<td>".$this->materia."</td>";
            echo"<td>".$this->avatar."</td>";
            echo"<td>".$this->orden."</td>";
            echo"<td>".$this->estatusm."</td>";
            echo"</tr>";
            echo"</tbody>";
        }
        echo"</table>";


    }


    public function asignarmateriamaestro($idmaestro,$idmateria){
        $sql5=mysql_query("insert into mat_maes (id_maestro,id_materia) values('$idmaestro','$idmateria')") or die (mysql_error());
        /*$sql6=mysql_query("SELECT a.iduser, a.name AS maestro,b.nombre AS materias, c.id_maestro, c.id_materia
FROM usuario AS a, materias AS b, mat_maes AS c WHERE c.id_maestro='$idmaestro' AND a.iduser=c.id_maestro AND c.id_materia=b.id_materia;  ");
        $filas=mysql_num_rows($sql6);
        echo"<table class='table table-striped'>
        <tr><td>Materias</td></tr>";
        for($y=0; $y<$filas;$y++){
            $materias=mysql_result($sql6,$y,'materias');
        echo"<tr><td>".$materias."</td></tr>";
        }
        echo"</table>";*/
    }


    public  function  deletemate($id){
        $consulta=mysql_query("DELETE FROM materias WHERE id_materia=$id") or die("error");
        echo"Materia borrarda correctamente";
    }
    public  function  deleteasignacion($id,$id_maestro){
        $consulta=mysql_query("DELETE FROM mat_maes WHERE id_materia=$id AND id_maestro=$id_maestro") or die("error");
        echo"Materia borrarda correctamente";
    }
    public function  materiasMaestros($idusuario){
        echo"<form action='MateriasAsignadas.php' method='POST' name='frmdo' id='frmdo'>";
        $query="SELECT u.iduser,u.name,u.fname,u.lname,u.lvl,m.id_materia,m.nombre as materia,m_m.id_mat_aux
            FROM materias AS m,usuario AS u,mat_maes AS m_m
             WHERE u.iduser=m_m.id_maestro AND m.id_materia=m_m.id_materia AND  m.estatus='1'
             AND m_m.id_maestro='$idusuario'";
        $result=mysql_query($query)or die ("error de consuiñltyasuygf");
        if(mysql_num_rows($result)>0){
            echo"<table class='table table-striped' ><tr>";
            echo"<thead>";
            //       echo"<td>".mysql_result($result,0,'iduser')."</td>";
            echo"<td>".mysql_result($result,0,'name')."</td>";
            echo"<td>".mysql_result($result,0,'fname')."</td>";
            echo"<td>".mysql_result($result,0,'lname')."</td>";
            echo"</tr>
            </thead>
             </table>";
            echo"<table class='table table-striped'><tr>

                            <th>Materia</th>";
                            //<th>Eliminar</th>
                        echo"</tr>";
            for($y=0; $y<mysql_num_rows($result); $y++){
                $id_materia=mysql_result($result,$y,'id_materia');
                echo"</tr>";
                echo"<td>".mysql_result($result,$y,'materia')."</td>";
                //echo"<td><a href='delteMateria.php?id_materia=$id_materia&id_maestro=$idusuario'>Eliminar</a></td></tr>";
            }        //$new->asignarmateriamaestro($idusuario,$idmateria);
            echo"</table>";
        }//terina condicion
        else{ echo"<table class='table table-striped' ><tr><td>No tiene materias asignadas</td></tr></table>"; }


    }


} 