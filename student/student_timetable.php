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
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Time Table 
                              </td>
                              </tr>
                              <tr>
                                 <?php
                                 $user = $_SESSION['student_management_user_login_now_nigvideo_chakde'];
                                 include 'dbconnect.php';
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
                                                                $qu4 = "SELECT * from users WHERE id = '$u_id'";
                                                                $res4 = mysql_query($qu4);
                                                                $row4 = mysql_fetch_array($res4);
                                                                $t_name = $row4['name'];

                                                                 
                                 echo "
                                <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                <br/> <b>Class Incharge - </b>$t_name<br/><br/>
                                     <table width='100%' border='1'>
                                 <tr height='30px'>
                                  <td>
                                   <b>Monday</b>
                                  </td>";
                                      ?>
                                   <?php
                                
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Monday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?> 
                                  </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Tuesday</b>
                                  </td>
                                  <?php
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Tuesday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?>
                                  </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Wednesday</b>
                                  </td>
                                   <?php
                                 
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Wednesday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?>
                                  </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Thursday</b>
                                  </td>
                                   <?php
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Thursday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?>

                                  </tr>
                                 <tr height='30px'>
                                  <td>
                                   <b>Friday</b>
                                  </td>
                                  <?php
                                 
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Friday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?>
                                  </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Saturday</b>
                                  </td>
                                  <?php
                                 
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Saturday' AND t_id = '$u_id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 ?>
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
