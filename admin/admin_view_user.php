<?php
	session_start();
	if(!isset($_SESSION['admin_management_user_login_now_nigvideo_hurrrr']))
	{
	header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style_home.css">
   <link rel="stylesheet" href="css/box.css">
  <script type="text/javascript">

function validate()
{
   if( document.myuser.name.value == "" )
   {
     document.myuser.name.focus() ;
     return false;
   }
   if( document.myuser.uname.value == "" )
   {
     document.myuser.uname.focus() ;
     return false;
   }
   if( document.myuser.pswd.value == "" )
   {
     document.myuser.pswd.focus() ;
     return false;
   }
   return( true );
}

</script>

</head>
<body>
<div id="header">
	<div id="login">
	    <?php include 'admin_header.php'; ?>
	</div>
</div>
<div id="page1"><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="970px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                                  <?php
                                                                define('showmax',10);
                                                                $page=isset($_GET['curpage'])?$_GET['curpage']:0;
                                                                $startrow=$page*showmax;
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from users";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from users ORDER by id DESC LIMIT $startrow,".showmax;
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $uname = $row['uname'];				   
								$pswd = $row['pswd'];
                                                                $class = $row['class'];				   
								$section = $row['section'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='70px' style='padding:5px;'>
                         <img src='images/user_pic.jpg' height='60px' width='60px' style='border:1px solid $444;'>
                                       </td>
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'><b>$name</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> 
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$name's details</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      <b>Name - </b> $name<br/><br/>
                                      <b> User Name - </b> $uname <br/><br/>
                                      <b> Password - </b> $pswd <br/><br/>
                                      <b> Incharge of - </b> $class $section
				</p>
			</div>
</div>&nbsp; <a href='#openModal13$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Update</a>
                                                            <div id='openModal13$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Update $name's Record</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='admin_update_user_record_script.php'>
  			<input type='hidden' name='u_id1' value='$id'>
                                <input type='text' name='name1' id='name1' value='$name' style='color:#444;font-size:14px;font-weight:bold;width:300px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Full Name'><br/><br/>
				<input type='text' name='uname1' id='uname1' value='$uname' style='color:#444;font-size:14px;font-weight:bold;width:300px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Username'><br/><br/>
					<input type='password' name='pswd1' id='pswd1' value='$pswd' style='color:#444;font-size:14px;font-weight:bold;width:300px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Password'><br/><br/>";
                            echo "<b> Class Incharge - </b> &nbsp; &nbsp; &nbsp; &nbsp;<select name='class' style='font-size:12px;color:#444;'>";
                     $i = 1;
                     while($i < 16)
                     {
                       if($i == 1)
                       {
                         if($b2 == "Nursery")
                         {
                             echo "<option value='Nursery' selected='selected'>Nursery</option>";     
                         }
                         else
                         {
                            echo "<option value='Nursery'>Nursery</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($class == "L.K.G")
                         {
                             echo "<option value='L.K.G' selected='selected'>L.K.G</option>";     
                         }
                         else
                         {
                            echo "<option value='L.K.G'>L.K.G</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($class == "U.K.G")
                         {
                             echo "<option value='U.K.G' selected='selected'>U.K.G</option>";     
                         }
                         else
                         {
                            echo "<option value='U.K.G'>U.K.G</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($class == "1")
                         {
                             echo "<option value='1' selected='selected'>1</option>";     
                         }
                         else
                         {
                            echo "<option value='1'>1</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($class == "2")
                         {
                             echo "<option value='2' selected='selected'>2</option>";     
                         }
                         else
                         {
                            echo "<option value='2'>2</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($class == "3")
                         {
                             echo "<option value='3' selected='selected'>3</option>";     
                         }
                         else
                         {
                            echo "<option value='3'>3</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($class == "4")
                         {
                             echo "<option value='4' selected='selected'>4</option>";     
                         }
                         else
                         {
                            echo "<option value='4'>4</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($class == "5")
                         {
                             echo "<option value='5' selected='selected'>5</option>";     
                         }
                         else
                         {
                            echo "<option value='5'>5</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($class == "6")
                         {
                             echo "<option value='6' selected='selected'>6</option>";     
                         }
                         else
                         {
                            echo "<option value='6'>6</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($class == "7")
                         {
                             echo "<option value='7' selected='selected'>7</option>";     
                         }
                         else
                         {
                            echo "<option value='7'>7</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($class == "8")
                         {
                             echo "<option value='8' selected='selected'>8</option>";     
                         }
                         else
                         {
                            echo "<option value='8'>8</option>";
                         }
                       }
                       else if($i == 12)
                       {
                          if($class == "9")
                         {
                             echo "<option value='9' label='9' selected='selected'>9</option>";     
                         }
                         else
                         {
                            echo "<option value='9' label='9'>9</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($class == "10")
                         {
                             echo "<option value='10' label='10' selected='selected'>10</option>";     
                         }
                         else
                         {
                            echo "<option value='10' label='10'>10</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($class == "11")
                         {
                             echo "<option value='11' label='11' selected='selected'>11</option>";     
                         }
                         else
                         {
                            echo "<option value='11' label='11'>11</option>";
                         }
                       }
                       
                       else
                       {
                          if($class == "12")
                         {
                             echo "<option value='12' label='12' selected='selected'>12</option>";     
                         }
                         else
                         {
                            echo "<option value='12' label='12'>12</option>";
                         }
                       }        
                      $i++;
                     }
                     echo "</select><br/><br/>";

                    echo "<b> Section - </b>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name='section' style='font-size:12px;color:#444;'>";
                     $i = 1;
                     while($i < 16)
                     {
                       if($i == 1)
                       {
                         if($section == "A")
                         {
                             echo "<option value='A' selected='selected'>A</option>";     
                         }
                         else
                         {
                            echo "<option value='A'>A</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($section == "B")
                         {
                             echo "<option value='B' selected='selected'>B</option>";     
                         }
                         else
                         {
                            echo "<option value='B'>B</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($section == "C")
                         {
                             echo "<option value='C' selected='selected'>C</option>";     
                         }
                         else
                         {
                            echo "<option value='C'>C</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($section == "D")
                         {
                             echo "<option value='D' selected='selected'>D</option>";     
                         }
                         else
                         {
                            echo "<option value='D'>D</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($section == "E")
                         {
                             echo "<option value='E' selected='selected'>E</option>";     
                         }
                         else
                         {
                            echo "<option value='E'>E</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($section == "F")
                         {
                             echo "<option value='F' selected='selected'>F</option>";     
                         }
                         else
                         {
                            echo "<option value='F'>F</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($section == "G")
                         {
                             echo "<option value='G' selected='selected'>G</option>";     
                         }
                         else
                         {
                            echo "<option value='G'>G</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($section == "H")
                         {
                             echo "<option value='H' selected='selected'>H</option>";     
                         }
                         else
                         {
                            echo "<option value='H'>H</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($section == "I")
                         {
                             echo "<option value='I' selected='selected'>I</option>";     
                         }
                         else
                         {
                            echo "<option value='I'>I</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($section == "J")
                         {
                             echo "<option value='J' selected='selected'>J</option>";     
                         }
                         else
                         {
                            echo "<option value='J'>J</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($section == "K")
                         {
                             echo "<option value='K' selected='selected'>K</option>";     
                         }
                         else
                         {
                            echo "<option value='K'>K</option>";
                         }
                       }
                       else if($i == 12)
                       {
                          if($section == "L")
                         {
                             echo "<option value='L' label='L' selected='selected'>L</option>";     
                         }
                         else
                         {
                            echo "<option value='L' label='L'>L</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($section == "M")
                         {
                             echo "<option value='M' label='M' selected='selected'>M</option>";     
                         }
                         else
                         {
                            echo "<option value='M' label='M'>M</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($section == "N")
                         {
                             echo "<option value='N' label='N' selected='selected'>N</option>";     
                         }
                         else
                         {
                            echo "<option value='N' label='N'>N</option>";
                         }
                       }
                       
                       else
                       {
                          if($section == "O")
                         {
                             echo "<option value='O' label='O' selected='selected'>O</option>";     
                         }
                         else
                         {
                            echo "<option value='O' label='O'>O</option>";
                         }
                       }        
                      $i++;
                     }
                     echo "</select><br/><br/>";


                                   echo "<input type='submit' name='submit' id='submit' value='Update' style='color:white;font-size:14px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>		
   &nbsp; <a href='#openModal12$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Delete</a>		
                                               <div id='openModal12$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Are you confirm to delete $name?</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='admin_user_delete_script.php'>
  			<input type='hidden' name='st_id1' value='$id'>
				<input type='submit' name='submit' id='submit' value='Confirm' style='color:white;font-size:16px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>		
     &nbsp; <a href='#openModal15$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Send Message</a>		
                                               <div id='openModal15$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Send Message to $name?</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='admin_send_message_script.php'>
  			<input type='hidden' name='st_id2' value='$id'>
                                     <input type='text' name='title2' id='title2' style='color:#444;font-size:14px;width:330px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Title'><br/><br/>
                           <textarea rows='10' cols='44' name='status2' id='status2' style='-moz-border-radius:5px;border-radius:5px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Description ..'></textarea><br/><br/>
				<input type='submit' name='submit' id='submit' value='Send' style='color:white;font-size:16px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>
      &nbsp; <a href='#openModal19$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Time Table</a>		
                                               <div id='openModal19$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Time Table</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>";
                                    echo "<table width='100%' border='1'>
                                 <tr height='30px'>
                                  <td>
                                   <b>Monday</b>
                                  </td>";
                              
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Monday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 
                                 echo " </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Tuesday</b>
                                  </td>";
                                  
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Tuesday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 
                                 echo " </tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Wednesday</b>
                                  </td>";
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Wednesday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 
                                  echo "</tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Thursday</b>
                                  </td>";
                                 
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Thursday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                

                                echo "</tr>
                                 <tr height='30px'>
                                  <td>
                                   <b>Friday</b>
                                  </td>";
                                
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Friday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 
                                  echo "</tr>
                                  <tr height='30px'>
                                  <td>
                                   <b>Saturday</b>
                                  </td>";
                                  
                                 $qu3 = "SELECT * from user_timetable WHERE t_day='Saturday' AND t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $t_time = $show3['t_time'];
                                  $t_sub = $show3['t_subject'];
                                  echo "<td>$t_time<br/>$t_sub</td>"; 
                                 }
                                 echo"
                                  </tr>
                                   </table>";
				echo "</p>
			</div>
</div>		
                 &nbsp; <a href='#openModal25$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Syllabus</a>		
                                               <div id='openModal25$id' class='modalDialog'>
						<div>
                                <div style='height:400px;overflow-y:scroll;overflow-x:hidden;padding:5px;'>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Syllabus</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>";
                                       echo "<table width='100%' border='1'>";
                                 
                                 $qu3 = "SELECT * from user_syllabus WHERE t_id = '$id'";
                                 $res3 = mysql_query($qu3);
                                 while($show3 = mysql_fetch_array($res3))
                                 {
                                  $subject = $show3['subject'];
                                  $syllabus = $show3['syllabus'];
                                  echo "
                                  <tr>
                                  <td width='200px' valign='top'>
                                  <b>$subject</b>
                                  </td>
                                  <td>$syllabus</td>
                                  </tr>"; 
                                 }
                                  
                                   echo "</table>";
				echo "</p>
                         </div>
			</div>
</div>
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
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
echo "<table width='90%' align='center' border='0' style='color:#444;font-size:14px;'>
                                      <tr>
            <td valign='top' style='padding:5px;'>";
                                             
if($page>0)
{?>
<a href="admin_view_user.php?curpage=<?php echo ($page-1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>prev</a>
<?php
}
else
{
echo "&nbsp;";
}
if($startrow+showmax<$total)
{?>
<a href="admin_view_user.php?curpage=<?php echo ($page+1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>next</a>
<?php
}
echo "</td>
                                       </tr>
                                       </table>";
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
