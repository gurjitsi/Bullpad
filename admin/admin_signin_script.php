<?php
session_start();
if(isset($_POST['uname1']))
{
	$uname = $_POST['uname1'];
	$pswd = $_POST['pswd1'];
	include 'dbconnect.php';
	$qu1 = "SELECT id from admin WHERE uname='$uname' AND pswd='$pswd' LIMIT 1";
	$res1 = mysql_query($qu1);
	$show = mysql_num_rows($res1);
        if($show==1)
	{
		$row = mysql_fetch_array($res1);
		$id = $row['id'];
		$_SESSION['admin_management_user_login_now_nigvideo_hurrrr']=$id;
		header('Location:admin_home.php');
	}
	else
	{
		header('Location:index.php?status=1');
	}
}
?>
