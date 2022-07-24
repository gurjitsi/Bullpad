<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['subject']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$class = $_POST['class'];
        $section = $_POST['section'];
        $subject= $_POST['subject'];
        $syllabus = $_POST['syllabus'];
 
        include 'dbconnect.php';
        $qu = "INSERT INTO user_syllabus values('','$subject','$syllabus','$class','$section','$user')";
        $res = mysql_query($qu);
        if($res)
        {
          header('Location:user_syllabus.php');
        }
        else
        {
          header('Location:user_syllabus.php');
        }
}
?>
