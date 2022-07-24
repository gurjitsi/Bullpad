<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
	include 'dbconnect.php';
	$qu = "DELETE from user_syllabus WHERE id='$id'";
	$res = mysql_query($qu);
	if($res)
	{	
		header('Location:edit_syllabus.php');
	}
	else
	{	
		header('Location:edit_syllabus.php');
	}
}
?>
