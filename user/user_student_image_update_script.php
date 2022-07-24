<?php
if(isset($_POST['st_id1']))
{
	$id = $_POST['st_id1'];
        $uni_id = md5(uniqid(rand(), true));
        if(strlen($_FILES['image']['name'])==0)
        {
        $f_id = "user_pic.jpg";
        }
        else 
        {
        $f=$_FILES['image']['name'];
        $ext = pathinfo($f, PATHINFO_EXTENSION);
        $dot = ".";
        $f_id = $id.$uni_id.$dot.$ext;
	define('MAX_FILE_SIZE',15000000);
        define('mydir','images/');
        if(($_FILES['image']['size']>0)&&($_FILES['image']['size']<15000000))
        {
        move_uploaded_file($_FILES['image']['tmp_name'],mydir.$f_id);MAX_FILE_SIZE;
        }
        }
	include 'dbconnect.php';
	$qu = "UPDATE student set image='$f_id' WHERE id='$id'";
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
