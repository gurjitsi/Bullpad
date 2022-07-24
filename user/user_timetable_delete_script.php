<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from user_timetable WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:edit_timetable.php');
	}
	else
	{	
		header('Location:edit_timetable.php');
	}
}
?>
