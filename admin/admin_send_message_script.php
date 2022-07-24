<?php
if(isset($_POST['title2']))
{
        $t_id = $_POST['st_id2'];
	$title = $_POST['title2'];
        $status = $_POST['status2'];
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO admin_message values('','$title','$status','$t_id','$date1')";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:admin_view_user.php');
        }
        else
        {
          header('Location:admin_view_user.php');
        }
}
?>
