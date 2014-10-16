<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Asigna Materias-Maestro</h1>
    <div class="table-responsive">

<?php
require_once("header.php");
require_once("bd.php");
echo"<form action='Asignamateria.php' method='Post' name='asigna'>
<table class='table table-striped'>
<thead>
<tr><th>Maestros</th></tr>
</thead>
<td>
<select name='idu' id='idu'>";
$sq=mysql_query("Select * from usuario where lvl='2'order by iduser") or die (mysql_error());
$field=mysql_num_rows($sq);
for($y=0; $y<$field;$y++){
   $idu=mysql_result($sq,$y,'iduser');
   $nombre=mysql_result($sq,$y,'name');

    echo"<option value='$idu'>$nombre</option>";
}
echo"</select></td></table>
<div id='contenido'></div>
";
echo  "  </div>
</div>";
require_once("footer.php");
echo"<script type='text/javascript'>
            $(function (e) {
                $('#idu').click(function (e) {
                    $('#contenido').load('MateriasAsignadas.php?idu=' + this.options[this.selectedIndex].value);
                })
            })
        </script>";

?>
