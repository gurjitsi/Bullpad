<?php
if(isset($_POST['u_id1']))
{
        $id = $_POST['u_id1'];
	$day = $_POST['day'];
        $time = $_POST['time'];
        $subject = $_POST['subject'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE user_timetable SET t_day = '$day', t_time='$time', t_subject='$subject' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:edit_timetable.php');
        }
        else
        {  
          header('Location:edit_timetable.php');
        }
}
?>
