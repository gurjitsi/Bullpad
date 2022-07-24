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
                                                                $class = $_POST['class'];
                                                                $section = $_POST['section'];
                                                                $day = $_POST['day'];
                                                                $month = $_POST['month'];
                                                                $year = $_POST['year'];
                                                                $date = $day."-".$month."-".$year;
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from student WHERE class='$class' AND section='$section' AND u_id='$user'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from student WHERE class='$class' AND section='$section' AND u_id='$user' ORDER by rollno ASC";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                echo "
                                     <b>Date - $date</b><br/><br/><table width='100%' style='color:#444;' border='1'>
                                    <tr bgcolor='#444' height='25px' style='color:#ffffff;'>
                                     <td width='100px' align='center' style='font-size:12px;'>
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
                                    <td width='100px' align='center' style='font-size:12px;'>
                                      <b>Attendance</b>
                                    </td>	
                                    </tr>";
                                                                $row=mysql_fetch_array($show);
                                                                echo "<form method='POST' action='user_attendance_finish_script.php'>
                                                                <input type='hidden' name='class' value='$class'>
                                                                <input type='hidden' name='section' value='$section'>
                                                                <input type='hidden' name='date' value='$date'>
                                                                <input type='hidden' name='total' value='$total'>";
                                                                $i = 1;
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $rollno = $row['rollno'];
                                                                                                                                
                                                                  echo "
        <tr bgcolor='#f2f2f2' height='25px' style='color:#444;'>
                                     <td width='100px' style='font-size:12px;padding:3px;'>
                                      $name
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                     $rollno
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      $class
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      $section
                                    </td>
                                    <td width='100px' align='center' style='font-size:12px;'>
                                     <input type='hidden' name='u_id$i' value='$id'>
               <input type='radio' name='attn$i' value='Present' checked='checked'>Present &nbsp; 
           <input type='radio' name='attn$i' value='Absent'>Absent
	 &nbsp; <input type='radio' name='attn$i' value='Leave'>Leave
                                    </td>	
                                    </tr>";
				$i++;			
						
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
