<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from user_notes WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:view_complete_notes.php');
	}
	else
	{	
		header('Location:view_complete_notes.php');
	}
}
?>
