<?php
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 3/10/14
 * Time: 02:10 PM
 */
if(isset($_COOKIE['idxas3d']) or isset($_COOKIE['acceso']))
{
$idu=$_COOKIE['idxas3d'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
    print"<meta http-equiv='refresh' content='0;
url=login.php'>";
    exit();
}
    session_start();
if(isset($_SESSION['idxas3d']) or isset($_SESSION['acceso'])){
    $idusuario2=$_SESSION['idxas3d'];
    $accesos2=$_SESSION['acceso'];
    }else{
    print"<meta http-equiv='refresh' content='0;
url=login.php'>";
    exit();
}
if($idusuario2=="" or $accesos2=="")
{
    print"<meta http-equiv='refresh' content='0;
url=login.php>";
    exit();
}
include("bd.php");
$sql=mysql_query("SELECT * FROM usuario WHERE iduser='$idu'") or die ("errrode conuslta");
        $type=mysql_result($sql,0,'lvl');
        $idusuario=mysql_result($sql,0,'iduser');
}else{
    print"<meta http-equiv='refresh' content='0;
url=login.php'>";
    exit();
}
?>
