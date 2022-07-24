<?php
	session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style_home.css">
</head>
<body>
<div id="header">
	<div id="login">
	    <?php include 'user_header.php'; ?>
	</div>
</div>
<div id="page12"><br/><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="970px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                              <tr>
                               <td height='20px' style='background-color:#444;color:#ffffff;padding:5px;font-size:12px;font-weight:bold;'>
                                 Update Record
                                 </td>
                                 </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'>
                                  <?php 
                                                                $get_date = $_GET['date'];
                                                                $get_id = $_GET['uni_id'];
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from user_record WHERE date='$get_date' AND uni_id='$get_id' AND t_id='$user'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from user_record WHERE date='$get_date' AND uni_id='$get_id' AND t_id='$user'";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                echo "<b>Date - $get_date</b><br/><br/><table width='100%' style='color:#444;' border='1'>
                                    <tr bgcolor='#444' height='25px' style='color:#ffffff;'>
                                     <td width='200px' align='center' style='font-size:12px;'>
                                      <b>Name</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     <b>Roll No</b>
                                    </td> 
                                   <td width='50px' align='center' style='font-size:12px;'>
                                     <b>Class</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     <b>Section</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      <b>Total Marks</b>
                                    </td>
                                    <td width='100px' align='center' style='font-size:12px;'>
                                      <b>Obtained Marks</b>
                                    </td>	
                                    </tr>";
                                                                $row=mysql_fetch_array($show);
                                                                echo "<form method='POST' action='user_record_update_script.php'>
                                                                <input type='hidden' name='date' value='$get_date'>
                                                                <input type='hidden' name='total' value='$total'>";
                                                                $p = 1;
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $st_id = $row['st_id'];
                                                                $omarks = $row['omarks'];
                                                                $tmarks = $row['tmarks'];
                                                                $class = $row['class'];
                                                                $section = $row['section'];
                                                                $qu5 = "SELECT name,image,rollno from student WHERE id ='$st_id'";
                                                                $res5 = mysql_query($qu5);
                                                                $row5 = mysql_fetch_array($res5);
                                                                $name5 = $row5['name'];
                                                                $image5 = $row5['image'];
                                                                $rollno5 = $row5['rollno']; 
                                                              
                                                                  echo "
            <tr bgcolor='#f2f2f2' height='25px' style='color:#444;'>
                                     <td width='200px' style='font-size:12px;padding:3px;'>
                                      $name5
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     $rollno5
                                    </td>
                                     <td width='50px' align='center' style='font-size:12px;'>
                                     $class
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     $section
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      $tmarks
                                    </td>
                                    
                                    <td width='100px' style='font-size:12px;'>
         
               <input type='hidden' name='u_id$p' value='$id'>
               &nbsp; <input type='text' name='omarks$p' value='$omarks' style='color:#444;font-size:12px;font-weight:bold;width:100px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;' placeholder='Obtained Marks'>";  
            echo "
             </td>
                                       </tr>
                                       ";
				$p++;			
						
                               }
                                while($row=mysql_fetch_array($show));
                               echo "</table>";
                               
echo "<table width='90%' align='center' border='0' style='color:#444;font-size:14px;'>
                                      <tr>
            <td valign='top' style='padding:5px;'>";
                               echo "<input type='submit' name='submit' id='submit' value='Finish' style='color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;'> 
				<form>";              
                        echo "</td>
                                       </tr>
                                       </table>";
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
</div>
</body>
</html>
