<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Test Usuario</h1>
    <div class="table-responsive">
        <?php
        require_once("header.php");
        require_once("Materia.php");
        $new=new Materia();
        if(isset($_POST['submit'])){
            switch($_POST['submit']){
                case "Vincular";
                    $idusuario=$_POST['idu'];
                    $new->asignarmateriamaestro($idusuario,$idmateria);
                    break;
                case "Modificar";


                    break;
                case "Delete";


                    break;
            }

        }
        /**
         * Created by PhpStorm.
         * User: Jairo
         * Date: 25/09/14
         * Time: 12:38 PM
         */
        echo"<form action='Asignamateria.php' method='Post' name='asigna'>
<br><br><br><br><center><table>
<tr><td colspan='2'>Maestros</td><td colspan='2'>Materias</td></tr>
<tr>
<td colspan='2'>
<select name='idu'>";
        $sq=mysql_query("Select * from usuario where lvl='2' order by iduser") or die (mysql_error());
        $field=mysql_num_rows($sq);
        for($y=0; $y<$field;$y++){
            $idu=mysql_result($sq,$y,'iduser');
            $nombre=mysql_result($sq,$y,'name');

            echo"<option value='$idu'>$nombre</option>";
        }
        echo"</select>
</td>

<td colspan='2'>

<select name='idm'>";
        $sq=mysql_query("SELECT * FROM materias WHERE estatus='1'ORDER BY id_materia") or die (mysql_error());
        $field=mysql_num_rows($sq);
        for($y=0; $y<$field;$y++){
            $idm=mysql_result($sq,$y,'id_materia');
            $nombre=mysql_result($sq,$y,'nombre');

            echo"<option value='$idm'>$nombre</option>";
        }
        echo"</select>

</td>
</tr>


<tr><td align='right' colspan='2'><input type='submit' value='Vincular' name='submit'></td></tr>
</table></center>
<div align='center'>


</div>
</form>
";
        require_once("footer.php");
        echo  "  </div>
</div>";
        ?>
