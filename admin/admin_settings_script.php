<?php
session_start();
if(!isset($_SESSION['admin_management_user_login_now_nigvideo_hurrrr']))
{
header("Location:index.php");
}
$id = $_SESSION['admin_management_user_login_now_nigvideo_hurrrr'];
if(isset($_POST['uname']))
{
        $uname = $_POST['uname'];
	$pswd = $_POST['pswd'];
        include 'dbconnect.php';
        $qu = "UPDATE admin SET uname = '$uname', pswd='$pswd' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:admin_settings.php');
        }
        else
        {  
          header('Location:admin_settings.php');
        }
}
?>
