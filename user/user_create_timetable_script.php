<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['day']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$class = $_POST['class'];
        $section = $_POST['section'];
        $day = $_POST['day'];
        $time = $_POST['time'];
        $subject = $_POST['subject'];
 
        include 'dbconnect.php';
        $qu = "INSERT INTO user_timetable values('','$day','$time','$subject','$class','$section','$user')";
        $res = mysql_query($qu);
        if($res)
        {
          header('Location:user_timetable.php');
        }
        else
        {
          header('Location:user_timetable.php');
        }
}
?>
