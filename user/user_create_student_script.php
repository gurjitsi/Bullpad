<?php
session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
if(isset($_POST['name']))
{
        $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
	$name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $addr = $_POST['address'];
        $phn = $_POST['phn'];
        $pswd = $_POST['pswd'];
        $rollno = $_POST['rollno'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $birth = $day."-".$month."-".$year;
        include 'dbconnect.php';
        $qu2 = "SELECT id from student ORDER by id DESC LIMIT 1";
        $res2 = mysql_query($qu2);
        $row2 = mysql_fetch_array($res2);
        $l_id = $row2['id'];
        $f_id1 = $l_id+1;
        if(strlen($_FILES['image']['name'])==0)
        {
        $f_id = "user_pic.jpg";
        }
        else 
        {
        $f=$_FILES['image']['name'];
        $ext = pathinfo($f, PATHINFO_EXTENSION);
        $dot = ".";
        $f_id = $f_id1.$dot.$ext;
	define('MAX_FILE_SIZE',15000000);
        define('mydir','images/');
        if(($_FILES['image']['size']>0)&&($_FILES['image']['size']<15000000))
        {
        move_uploaded_file($_FILES['image']['tmp_name'],mydir.$f_id);MAX_FILE_SIZE;
        }
        }
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO student values('','$name','$fname','$mname','$addr','$rollno','$pswd','$class','$section','$birth','$phn','$f_id','$date1','$user')";
        $res = mysql_query($qu);
        if($res)
        {
          header('Location:user_view_student.php');
        }
        else
        {
          header('Location:user_create_student.php');
        }
}
?>
