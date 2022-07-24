<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
$user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
if(isset($_POST['title']))
{
        $title = $_POST['title']; 
	$sub = $_POST['sub'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $date = $day."-".$month."-".$year;
        include 'dbconnect.php';
        $qu2 = "SELECT id from user_notes ORDER by id DESC LIMIT 1";
        $res2 = mysql_query($qu2);
        $row2 = mysql_fetch_array($res2);
        $l_id = $row2['id'];
        $f_id1 = $l_id+1;
        if(strlen($_FILES['image']['name'])==0)
        {
         header('Location:user_notes.php');
        }
        else 
        {
        $f=$_FILES['image']['name'];
        $ext = pathinfo($f, PATHINFO_EXTENSION);
        $dot = ".";
        $f_id = $f_id1.$dot.$ext;
	define('MAX_FILE_SIZE',15000000);
        define('mydir','notes/');
        if(($_FILES['image']['size']>0)&&($_FILES['image']['size']<15000000))
        {
        move_uploaded_file($_FILES['image']['tmp_name'],mydir.$f_id);MAX_FILE_SIZE;
        }
        $qu = "INSERT INTO user_notes values('','$title','$sub','$class','$section','$date','$f_id','$user')";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:user_notes.php');
        }
        }
        
}
?>
