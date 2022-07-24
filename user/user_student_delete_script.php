<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
        $qu3 = "DELETE from user_record WHERE st_id='$id'";
	$res3 = mysql_query($qu3);
        $qu2 = "DELETE from user_message WHERE st_id='$id'";
	$res2 = mysql_query($qu2);
        $qu1 = "DELETE from attendence WHERE st_id='$id'";
	$res1 = mysql_query($qu1);
	$qu = "DELETE from student WHERE id='$id'";
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
