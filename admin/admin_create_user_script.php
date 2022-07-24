<?php
if(isset($_POST['name']))
{
	$name = $_POST['name'];
        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $date=date("m/d/Y", time());
	$date1=date(  "F j, Y", strtotime( $date ) )." ".date("h:i:s a", time());
        include 'dbconnect.php';
        $qu = "INSERT INTO users values('','$name','$uname','$pswd','$class','$section','$date1')";
        $res = mysql_query($qu);
        if($res)
        {
           header('Location:admin_view_user.php');
        }
        else
        {
          header('Location:admin_create_user.php');
        }
}
?>
