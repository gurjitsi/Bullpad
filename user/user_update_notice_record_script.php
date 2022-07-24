<?php
if(isset($_POST['title1']))
{
        $id = $_POST['u_id1'];
	$title = $_POST['title1'];
        $notice = $_POST['status1'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE user_notice SET title = '$title', notice='$notice' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:user_notice.php');
        }
        else
        {  
          header('Location:user_notice.php');
        }
}
?>
