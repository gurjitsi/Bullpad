<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['class']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$class = $_POST['class'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $total = $_POST['total'];
        include 'dbconnect.php';
        $qu = "INSERT INTO temp_attendance values('','$date','$user')";
        $res = mysql_query($qu);
        for($i=1;$i<=$total;$i++)
        {
        $a='u_id'.$i;
        $b = 'attn'.$i;
        $u_id1 = $_POST[$a];
        $attn1 = $_POST[$b];
        $qu = "INSERT INTO attendence values('','$u_id1','$attn1','$date','$class','$section','$user')";
        $res = mysql_query($qu);
        }
        header('Location:user_attendance.php');
}
?>
