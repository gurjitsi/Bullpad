<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from admin_notice WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:admin_notice.php');
	}
	else
	{	
		header('Location:admin_notice.php');
	}
}
?>
