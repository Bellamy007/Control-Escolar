<?php
$user=$_POST['username'];
$psw=$_POST['password'];
if($user=="" or $psw=="")
{
$msg="Favor de llenar el formulario";
print"<meta http-equiv='refresh' content='0; url=index3.php?msg=$msg'>";
exit;
}
$psw=md5($psw);
include('bd.php');
$user1=mysql_real_escape_string(strip_tags($user));
$sql="SELECT * FROM usuario WHERE USER='$user1' AND cont='$psw'";
$consulta=mysql_query($sql) or die ('error de consulta');
$cuantos=mysql_num_rows($consulta);
if($cuantos==0)
{
    $msg='El usuario o el password es incorrecto';
    print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
}
    else
    {
        $idu=mysql_result($consulta,0,'iduser');
        $activo=mysql_result($consulta,0,'estatus');

        if($activo=='0')
        {
            $msg='El usuario no esta activo, consulte a su administrador ';
            print"<meta http-equiv='refresh' content='0; url=login.php?msg=$msg'>";
        }
        else
            {
            print"<meta http-equiv='refresh' content='0; url=accesos.php?idxas3d=$idu'>";
            }
    }
?>