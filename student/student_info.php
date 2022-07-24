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
                                Student Information 
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

                                                                 
                                 echo "
                                <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                <br/>
                        &nbsp; <img src='../user/images/$image' width='100px' height='100px' style='border:1px solid #444;'><br/><br/>
                              <table>
                              <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Name -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $name
                               </td>
                              </tr>
                                 <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Father's Name -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $father
                               </td>
                              </tr>
                              <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Mother's Name -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $mother
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Address -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $addr
                               </td>
                              </tr>
                                <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Roll No -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $rollno
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Class -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $class
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Section -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $section
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Birth -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $birth
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Contact -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $contact
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Account Created -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $c_date
                               </td>
                              </tr>
                               <tr>
                              <td width='130px' style='font-size:12px;color:#444;font-weight:bold;'>
                              &nbsp; Class Incharge -
                               </td>
                              <td style='font-size:12px;color:#444;'>
                               $t_name
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
