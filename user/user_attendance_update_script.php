<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['date']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
        $date = $_POST['date'];
        $total = $_POST['total'];
        include 'dbconnect.php';
        for($i=1;$i<=$total;$i++)
        {
        $a='u_id'.$i;
        $b = 'attn'.$i;
        $u_id1 = $_POST[$a];
        $attn1 = $_POST[$b];
        $qu = "UPDATE attendence SET status = '$attn1' WHERE id = '$u_id1'";
        $res = mysql_query($qu);
        }
        header('Location:user_attendance.php');
}
?>
