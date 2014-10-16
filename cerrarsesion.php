<?php
$idu=$_COOKIE['idxas3d'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
print"<meta http-equiv='refresh' content='0;
url=login.php'>";
exit;
}
session_start();
session_unset();
session_destroy();
$msg="Sesión terminada exitosamente";
$m=("msg=$msg");
print"<meta http-equiv='refresh' content='0; url=login.php?".$m."'>";
?>