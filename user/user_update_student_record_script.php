<?php
if(isset($_POST['name1']))
{
        $id = $_POST['u_id1'];
	$name = $_POST['name1'];
        $fname = $_POST['fname1'];
        $mname = $_POST['mname1'];
        $address = $_POST['address1'];
        $phn = $_POST['phn1'];
        $pswd = $_POST['pswd1'];
        $rollno = $_POST['rollno'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $birth = $day."-".$month."-".$year;
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE student SET name = '$name', father='$fname', mother='$mname', address='$address', rollno='$rollno', pswd='$pswd',class='$class', section='$section', birth='$birth', contact='$phn' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:user_view_student.php');
        }
        else
        {  
          header('Location:user_view_student.php');
        }
}
?>
