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
                                Marks Sheet 
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
                                                                $qu3 = "SELECT * from user_record WHERE st_id = '$user' ORDER by id DESC";
                                                                $res4 = mysql_query($qu3);
                                                                
                                                                 
                                 echo "
                                <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                <br/><table width='100%' border='2'><tr height='25px'>
                                     
                                    <td width='150px' style='font-size:10px;padding:5px;'>
                                      <b>Title</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Subject</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Category</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Date</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Total</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Obtained</b>
                                    </td>                                    
                                    <td width='30px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>%</b>
                                    </td>	
                                    </tr>";
                                   while($show4 = mysql_fetch_array($res4))
                                  {
                                           $title = $show4['title'];
                                           $subject = $show4['subject'];
                                           $tmarks = $show4['tmarks'];
                                           $omarks = $show4['omarks'];
                                           $cat = $show4['category'];
                                           $date = $show4['date'];
                                           $perc = ($omarks*100)/$tmarks;
                                                                 echo "<tr height='25px'>
                                     
                                    <td width='150px' style='font-size:10px;padding:5px;'>
                                      $title
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $subject
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $cat
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $date
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $tmarks
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $omarks
                                    </td>                                    
                                    <td width='30px' style='font-size:10px;padding:5px;' valign='top'>
                                      $perc %
                                    </td>	
                                    </tr>";
                                  }
                                echo "</table>";
                               echo "</td>";
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
