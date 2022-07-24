<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from user_notice WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:user_notice.php');
	}
	else
	{	
		header('Location:user_notice.php');
	}
}
?>
