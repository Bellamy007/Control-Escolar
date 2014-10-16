<?php
//include('../decode.php');
//if($_GET)
//{
    //decode_get($_SERVER["REQUEST_URI"]);
    $id=$_GET['idxas3d'];
    if($id=="")
    {
        print"<meta http-equiv='refresh' content='0;
		url=login.php?msg='>";
        exit;
    }else{
        SetCookie ('idxas3d',$id);
        SetCookie ('acceso',1);
        session_start();
        $_SESSION['idxas3d']=$id;
        $_SESSION['acceso']=1;
            print"<meta http-equiv='refresh' content='0;
		url=index.php'>";
}
//}
/**
 * Created by PhpStorm.
 * User: Jairo
 * Date: 14/09/14
 * Time: 01:25 AM
 */ ?>