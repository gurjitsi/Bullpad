<?php
if(isset($_POST['title1']))
{
        $id = $_POST['u_id1'];
	$title = $_POST['title1'];
        $notice = $_POST['status1'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE user_message SET title = '$title', message='$notice' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:sent_messages.php');
        }
        else
        {  
          header('Location:sent_messages.php');
        }
}
?>
