<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
$user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
if(isset($_POST['title2']))
{
        $s_id = $_POST['st_id2'];
	$title = $_POST['title2'];
        $status = $_POST['status2'];
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO user_message values('','$title','$status','$s_id','$user','$date1')";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:user_view_student.php');
        }
        else
        {
          header('Location:user_view_student.php');
        }
}
?>
