<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
        $qu1 = "DELETE from admin_message WHERE t_id='$id'";
	$res1 = mysql_query($qu1);
        $qu2 = "DELETE from attendence WHERE t_id='$id'";
	$res2 = mysql_query($qu2);
        $qu3 = "DELETE from student WHERE u_id='$id'";
	$res3 = mysql_query($qu3);
        $qu4 = "DELETE from temp_attendance WHERE t_id='$id'";
	$res4 = mysql_query($qu4);
        $qu5 = "DELETE from temp_record WHERE t_id='$id'";
	$res5 = mysql_query($qu5);
        $qu6 = "DELETE from user_message WHERE t_id='$id'";
	$res6 = mysql_query($qu6);
        $qu7 = "DELETE from user_notice WHERE t_id='$id'";
	$res7= mysql_query($qu7);
        $qu8 = "DELETE from user_record WHERE t_id='$id'";
	$res8 = mysql_query($qu8);
	$qu = "DELETE from users WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:admin_view_user.php');
	}
	else
	{	
		header('Location:admin_view_user.php');
	}
}
?>
