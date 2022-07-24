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
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'>
                                  <?php 
                                                                $class = $_POST['class2'];
                                                                $section = $_POST['section2'];
                                                                $day = $_POST['day2'];
                                                                $month = $_POST['month2'];
                                                                $year = $_POST['year2'];
                                                                $get_date = $day."-".$month."-".$year;
                                                                
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from attendence WHERE date='$get_date' AND t_id='$user'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from attendence WHERE date='$get_date' AND t_id='$user'";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                echo "<table width='100%' style='color:#444;' border='1'>
                                    <tr bgcolor='#444' height='25px' style='color:#ffffff;'>
                                     <td width='100px' align='center' style='font-size:12px;'>
                                      <b>Name</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     <b>Roll No</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      <b>Date</b>
                                    </td>
                                    
                                    <td width='100px' align='center' style='font-size:12px;'>
                                      <b>Attendance</b>
                                    </td>	
                                    </tr>";
                                                                $row=mysql_fetch_array($show);
                                                                echo "<form method='POST' action='user_attendance_update_script.php'>
                                                                <input type='hidden' name='date' value='$get_date'>
                                                                <input type='hidden' name='total' value='$total'>";
                                                                $p = 1;
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $st_id = $row['st_id'];
                                                                $status = $row['status'];
                                                                $qu5 = "SELECT name,image,rollno from student WHERE id ='$st_id'";
                                                                $res5 = mysql_query($qu5);
                                                                $row5 = mysql_fetch_array($res5);
                                                                $name5 = $row5['name'];
                                                                $image5 = $row5['image']; 
                                                                $rollno5 = $row5['rollno'];
                                                              
                                                                  echo "
              <tr bgcolor='#f2f2f2' height='25px' style='color:#444;'>
                                     <td width='100px' style='font-size:12px;padding:3px;'>
                                      $name5
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     $rollno5
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      $get_date
                                    </td>
                                    
                                    <td width='100px' align='center' style='font-size:12px;'>
                                     
               <input type='hidden' name='u_id$p' value='$id'>
               <span style='font-size:12px;color:#444;'>";
	    
                     for($i=1;$i<4;$i++)
                     {
                       if($i == 1)
                       {
                         if($status == "Present")
                         {
                             echo "<input type='radio' name='attn$p' value='Present' checked>Present";     
                         }
                         else
                         {
                            echo "<input type='radio' name='attn$p' value='Present'>Present";
                         }
                       }
                       else if($i == 2)
                       {
                         if($status == "Absent")
                         {
                             echo "<input type='radio' name='attn$p' value='Absent' checked>Absent";     
                         }
                         else
                         {
                            echo "<input type='radio' name='attn$p' value='Absent'>Absent";
                         }
                       }
                       else
                       {
                          if($status == "Leave")
                         {
                             echo "<input type='radio' name='attn$p' value='Leave' checked>Leave";     
                         }
                         else
                         {
                            echo "<input type='radio' name='attn$p' value='Leave'>Leave";
                         }
                       }       
                     }
                    
            echo "</span>
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
                                        else
                              {
                             echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                 No record found
            </td>
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
