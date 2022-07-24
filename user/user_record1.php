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
                                                                $title = $_POST['title'];
                                                                $tmarks = $_POST['tmarks'];
                                                                $subject = $_POST['sub'];
                                                                $category = $_POST['category'];
                                                                $class = $_POST['class'];
                                                                $section = $_POST['section'];
                                                                $day = $_POST['day'];
                                                                $month = $_POST['month'];
                                                                $year = $_POST['year'];
                                                                $date = $day."-".$month."-".$year;
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from student WHERE class='$class' AND section='$section'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from student WHERE class='$class' AND section='$section' ORDER by rollno ASC";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                echo "<b>Date - $date , Subject - $subject , Category - $category</b><br/><br/><table width='100%' style='color:#444;' border='1'>
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
                                                                echo "<form method='POST' action='user_record_finish_script.php'>
                                                                <input type='hidden' name='title' value='$title'>
                                                                <input type='hidden' name='tmarks' value='$tmarks'>
                                                                <input type='hidden' name='subject' value='$subject'>
                                                                <input type='hidden' name='category' value='$category'>
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
                                     <td width='200px' style='font-size:12px;padding:3px;'>
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
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      $tmarks
                                    </td>
                                    
                                    <td width='100px' style='font-size:12px;'>

                 <input type='hidden' name='u_id$i' value='$id'>
               &nbsp; <input type='text' name='omarks$i' style='color:#444;font-size:12px;font-weight:bold;width:100px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;' placeholder='Obtained Marks'>
              </td>
                                       </tr>
                                       ";
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
