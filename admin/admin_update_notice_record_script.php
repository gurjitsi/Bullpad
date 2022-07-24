<?php
if(isset($_POST['title1']))
{
        $id = $_POST['u_id1'];
	$title = $_POST['title1'];
        $notice = $_POST['status1'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE admin_notice SET title = '$title', notice='$notice' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:admin_notice.php');
        }
        else
        {  
          header('Location:admin_notice.php');
        }
}
?>
