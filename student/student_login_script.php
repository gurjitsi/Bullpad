<?php
session_start();
if(isset($_POST['pswd']))
{
        $rollno = $_POST['rollno'];
        $class = $_POST['class'];
        $section = $_POST['section'];
	$pswd = $_POST['pswd'];
	include 'dbconnect.php';
	$qu1 = "SELECT id from student WHERE rollno='$rollno' AND pswd='$pswd' AND class='$class' AND section='$section' LIMIT 1";
	$res1 = mysql_query($qu1);
	$show = mysql_num_rows($res1);
        if($show==1)
	{
		$row = mysql_fetch_array($res1);
		$id = $row['id'];
		$_SESSION['student_management_user_login_now_nigvideo_chakde']=$id;
		header('Location:student_home.php');
	}
	else
	{
		header('Location:index.php?status=1');
	}
}
?>
