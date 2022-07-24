<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['class']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$title = $_POST['title'];
        $tmarks = $_POST['tmarks'];
        $subject = $_POST['subject'];
        $category = $_POST['category'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $total = $_POST['total'];
        $uni_id = md5(uniqid(rand(), true));
        include 'dbconnect.php';
        $qu = "INSERT INTO temp_record values('','$title','$subject','$category','$class','$section','$date','$user','$uni_id')";
        $res = mysql_query($qu);
        for($i=1;$i<=$total;$i++)
        {
        $a='u_id'.$i;
        $b = 'omarks'.$i;
        $u_id1 = $_POST[$a];
        $attn1 = $_POST[$b];
 $qu = "INSERT INTO user_record values('','$title','$subject','$tmarks','$attn1','$category','$class','$section','$date','$u_id1','$user','$uni_id')";
        $res = mysql_query($qu);
        }
        header('Location:user_record.php');
}
?>
