<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['title']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$title = $_POST['title'];
        $status = $_POST['status'];
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO user_notice values('','$title','$status','$date1',$user)";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:user_notice.php');
        }
        else
        {
          header('Location:user_notice.php');
        }
}
?>
