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
<div id="page">
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="900px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Student Attendance 
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
                                                                $qu3 = "SELECT * from users WHERE id = '$u_id'";
                                                                $res3 = mysql_query($qu3);
                                                                $row3 = mysql_fetch_array($res3);
                                                                $t_name = $row3['name'];
                                                                $q8="SELECT count(*) from temp_attendance WHERE t_id = '$u_id'";
                                                                $result8=mysql_query($q8);
                                                                $show8=mysql_fetch_array($result8);
                                                                //echo $show1;
                                                                $total8=$show8[0];
                                                                $qu4 = "SELECT count(*) from attendence WHERE st_id = '$user' AND status = 'Present' AND t_id = '$u_id'";
                                                               $res4 = mysql_query($qu4);
                                                               $show4 = mysql_fetch_array($res4);
                                                               $total4=$show4[0];
                                                               $perc = ($total4*100)/$total8;
                                                                 
                                 echo "
                                <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                <br/>
                        &nbsp; <img src='../user/images/$image' width='100px' height='100px' style='border:1px solid #444;'><br/><br/>
                              <table>	
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Class Incharge -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $t_name
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Delivered -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $total8
                               </td>
                              </tr>
                              <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Attended -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $total4
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Percentage -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $perc %
                               </td>
                              </tr>
                               </table> 
                               </td>";
                                   ?>
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
