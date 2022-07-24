<?php
if(isset($_POST['title']))
{
	$title = $_POST['title'];
        $status = $_POST['status'];
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO admin_notice values('','$title','$status','$date1')";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:admin_notice.php');
        }
        else
        {
          header('Location:admin_notice.php');
        }
}
?>
