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
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;' width='100%'> <br/><br/>
                                  <?php
                                                                $roll = $_POST['rollno'];
                                                                $class1 = $_POST['class'];
                                                                $section1 = $_POST['section'];
                                                                include 'dbconnect.php';
                                                                if($roll == "null")
                                                                {
                                                                $qu="SELECT * from student WHERE class = '$class1' AND section = '$section1' ORDER by rollno ASC";  
                                                                }
                                                                else
                                                                {
                                                                $qu="SELECT * from student WHERE rollno = '$roll' AND class = '$class1' AND section = '$section1' ORDER by rollno ASC";
                                                                }
                                                                
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
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
                                                                $t_id = $row['u_id'];
                                                                $birthDate = explode("-", $birth);
                                                                $b1 = $birthDate[0];
                                                                $b2 = $birthDate[1];
                                                                $b3 = $birthDate[2]; 
                                                                $contact = $row['contact'];
                                                                $image = $row['image'];	
                                                                $c_date = $row['c_date'];
                                          $qu6 = "SELECT name from users WHERE id = '$t_id'";
                                          $res6 = mysql_query($qu6);
                                          $show6 = mysql_fetch_array($res6);
                                          $t_name = $show6['name'];

                                          $qu5 = "SELECT count(*) from temp_attendance WHERE t_id = '$t_id'";
                                          $res5 = mysql_query($qu5);
                                          $show5 = mysql_fetch_array($res5);
                                          $total5=$show5[0];                      
                                          $qu4 = "SELECT count(*) from attendence WHERE st_id = '$id' AND status = 'Present' AND t_id = '$t_id'";
                                          $res4 = mysql_query($qu4);
                                          $show4 = mysql_fetch_array($res4);
                                          $total4=$show4[0];
                                          $perc = ($total4*100)/$total5;			   
								                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='70px' style='padding:5px;'>
                         <img src='../user/images/$image' height='60px' width='60px' style='border:1px solid $444;'>
                                       </td>
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'><b>$name</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> 
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$name's details</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      <b>Name - </b> $name<br/><br/>
                                      <b> Father's Name - </b> $father <br/><br/>
                                      <b> Mother's Name - </b> $mother<br/><br/>
                                      <b> Address - </b> $addr<br/><br/>
                                      <b> Contact - </b> $contact <br/><br/>
                                      <b> Password - </b> $pswd <br/><br/>
                                      <b> Roll Number - </b> $rollno <br/><br/>
                                      <b> Class - </b> $class<br/><br/>
                                      <b> Section - </b> $section <br/><br/>
                                      <b> Class Incharge - </b> $t_name<br/><br/>
                                      <b> Birth - </b> $birth <br/><br/>
                                      <b> Account Created - </b> $c_date<br/><br/>
                                </p>
			</div>
</div>		
                   &nbsp; <a href='#openModal127$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Attendance</a>		
                                               <div id='openModal127$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Attendance Record of $name</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                <b>Delivered - </b> $total5 <br/><br/>
                                <b>Attended - </b> $total4 <br/><br/>
                                <b>Percentage - </b> $perc %<br/><br/>
				</p>
			</div>
</div>
   &nbsp; <a href='#openModal129$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Marks</a>		
                                               <div id='openModal129$id' class='modalDialog'>
						<div>
                                <div style='height:400px;overflow-y:scroll;overflow-x:hidden;padding:5px;'>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Marks Record of $name</h3>";
                                 $qu4 = "SELECT * from user_record WHERE st_id = '$id' AND t_id = '$t_id' ORDER by id DESC";
                                 $res4 = mysql_query($qu4);
				echo "<p><hr style='border:0px;height:1px;background:#444;'/><br/>";
                                echo "<table border='1'><tr height='30px'>
                                     
                                    <td width='280px' style='font-size:10px;padding:5px;'>
                                      <b>Title</b>
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Subject</b>
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
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
                                                                 echo "<tr height='30px'>
                                     
                                    <td width='280px' style='font-size:10px;padding:5px;'>
                                      $title
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
                                      $subject
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
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
