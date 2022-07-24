<?php
session_start();
if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
{
header("Location:index.php");
}
$id = $_SESSION['user_management_user_login_now_nigvideo_burr'];
if(isset($_POST['pswd']))
{
	$pswd = $_POST['pswd'];
        include 'dbconnect.php';
        $qu = "UPDATE users SET pswd='$pswd' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:user_settings.php');
        }
        else
        {  
          header('Location:user_settings.php');
        }
}
?>
