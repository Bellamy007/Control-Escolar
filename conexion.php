<?php
$conexion=mysql_connect("localhost", "root", "") or die ("Error");
$base=mysql_select_db("project", $conexion) or die ("error base");
mysql_query("SET NAMES utf80");

?>