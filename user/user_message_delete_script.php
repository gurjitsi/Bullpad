<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from user_message WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:sent_messages.php');
	}
	else
	{	
		header('Location:sent_messages.php');
	}
}
?>
