<?php
if(isset($_POST['u_id1']))
{
        $id = $_POST['u_id1'];
	$subject = $_POST['subject'];
        $syllabus = $_POST['syllabus'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE user_syllabus SET subject = '$subject', syllabus='$syllabus' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:edit_syllabus.php');
        }
        else
        {  
          header('Location:edit_syllabus.php');
        }
}
?>
