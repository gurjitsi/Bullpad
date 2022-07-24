<?php
	session_start();
	if(!isset($_SESSION['student_management_user_login_now_nigvideo_chakde']))
	{
	header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="css/box.css">
</head>
<body>
<div id="header">
	<div id="login">
	    <?php include 'student_header.php'; ?>
	</div>
</div>
<div id="page12">
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="900px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                            <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                
                                     <table width='100%' border='1'>
                                  <tr height='25px' bgcolor='#444' style='color:#ffffff;'>
                                  <td width='200px' style='padding:5px;'>
                                   <b>Title</b>
                                  </td> 
                                  <td width='100px' style='padding:5px;'>
                                   <b>Subject</b>
                                  </td>
                                   <td width='100px' style='padding:5px;'>
                                   <b>Date</b>
                                  </td>
                                  <td width='100px' style='padding:5px;'>
                                   <b>Teacher</b>
                                  </td>
                                   <td width='100px' style='padding:5px;'>
                                   <b>Notes</b>
                                  </td>
                                  <td width='100px' style='padding:5px;'>
                                   <b>Action</b>
                                  </td>
                                  </tr>
                             
                              <tr>
                                 <?php
                                 $user = $_SESSION['student_management_user_login_now_nigvideo_chakde'];
                                 include 'dbconnect.php';
                                 define('showmax',10);
                                 $page=isset($_GET['curpage'])?$_GET['curpage']:0;
                                 $startrow=$page*showmax;
                       
                                 $qu2 = "SELECT * from student WHERE id = '$user'";
                                 $res2 = mysql_query($qu2);
                                 $row = mysql_fetch_array($res2);
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $father = $row['father'];				   
								$mother = $row['mother'];
                                                                $addr = $row['address'];
                                                                $rollno = $row['rollno'];
                                                                $pswd = $row['pswd'];
                                                                $class = $row['class'];				   
								$section = $row['section'];
                                                                $birth = $row['birth'];
                                                                $contact = $row['contact'];
                                                                $image = $row['image'];	
                                                                $c_date = $row['c_date'];
                                                                $u_id = $row['u_id'];
                                                                $q1="SELECT count(*) from user_notes WHERE class='$class' AND section='$section'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
 
                                                                $qu4 = "SELECT * from user_notes WHERE class='$class' AND section='$section' ORDER by id DESC LIMIT $startrow,".showmax;
                                                                $res4 = mysql_query($qu4);
                                                                while($row4 = mysql_fetch_array($res4))
                                                                {
                                                                $id = $row4['id'];
                                                                $title = $row4['title'];
                                                                $subject = $row4['subject'];
                                                                $date = $row4['date'];
                                                                $notes = $row4['notes'];
                                                                $t_id = $row4['t_id'];
                                                                $qu5 = "SELECT name from users WHERE id='$t_id' ORDER by id DESC";
                                                                $res5 = mysql_query($qu5);
                                                                $row5 = mysql_fetch_array($res5);
                                                                $t_name = $row5['name'];
                                                                 
                                 echo "
                                  <tr height='25px' bgcolor='#f2f2f2' style='color:#444;'>
                                  <td width='200px' valign='top' style='padding:5px;'>
                                   $title
                                  </td> 
                                  <td width='100px' valign='top' style='padding:5px;'>
                                   $subject
                                  </td>
                                   <td width='100px' valign='top' style='padding:5px;'>
                                   $date
                                  </td>
                                  <td width='100px' valign='top' style='padding:5px;'>
                                   $t_name
                                  </td>
                                   <td width='100px' valign='top' style='padding:5px;'>
                                   <img src='../user/notes/$notes' height='90px' width='90px'>
                                  </td>
                                  <td width='100px' valign='top' style='padding:5px;'>
                                   <a href='view_notes.php?notes=$notes' style='color:#13A7C7;text-decoration:none;'>View large image</a>
                                  </td>
                                  </tr>
                                 ";
                                  }
                                      ?>
                                  
                                   </table>
                                <table width='90%' align='center' border='0' style='color:#444;font-size:14px;'>
                                      <tr>
            <td valign='top' style='padding:5px;'>
 <?php                                            
if($page>0)
{?>
<a href="student_notes.php?curpage=<?php echo ($page-1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>prev</a>
<?php
}
else
{
echo "&nbsp;";
}
if($startrow+showmax<$total)
{?>
<a href="student_notes.php?curpage=<?php echo ($page+1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>next</a>
<?php
}
?>
</td>
                                       </tr>
                                       </table>

                               </td>
                                   
                                 </tr>
                               </table>   
                            
		      	</td>
                                 </tr>
                               </table>   
                            
		      	</td>
                   </td>
			</tr>
			</table>
                  
                       </td>
                        
                         </tr>
                          </table>
</div>
</body>
</html>
