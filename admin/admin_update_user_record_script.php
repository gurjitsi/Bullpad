<?php
if(isset($_POST['name1']))
{
        $id = $_POST['u_id1'];
	$name = $_POST['name1'];
        $uname = $_POST['uname1'];
        $pswd = $_POST['pswd1'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        //echo $id." ".$name." ".$uname." ".$pswd;
        include 'dbconnect.php';
        $qu = "UPDATE users SET name = '$name', uname='$uname', pswd='$pswd', class='$class', section='$section' WHERE id = '$id'";
        $res = mysql_query($qu);
        if($res==1)
        {
           header('Location:admin_view_user.php');
        }
        else
        {  
          header('Location:admin_view_user.php');
        }
}
?>
