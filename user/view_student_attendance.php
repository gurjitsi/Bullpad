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
                               <td bgcolor='#f2f2f2' height='30px'>
                                <table width='100%' style='color:#444;' border='1'>
                                    <tr bgcolor='#444' height='25px' style='color:#ffffff;'>
                                     <td width='250px' align='center' style='font-size:12px;'>
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
                                      <b>Delivered</b>
                                    </td>
                                    <td width='50px' align='center' style='font-size:12px;'>
                                      <b>Attended</b>
                                    </td>
                                    <td width='200px' align='center' style='font-size:12px;'>
                                      <b>Percentage</b>
                                    </td>	
                                    </tr>
                                    <?php
                                     $user1 = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                      include 'dbconnect.php';
                                      $q1="SELECT count(*) from temp_attendance WHERE t_id = '$user1'";
                                      $result1=mysql_query($q1);
                                      $show1=mysql_fetch_array($result1);
                                      //echo $show1;
                                      $total=$show1[0];

                                     $qu="SELECT * from student WHERE u_id = '$user1' ORDER by rollno ASC";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $rollno = $row['rollno'];				   
								$class = $row['class'];
                                                                $section = $row['section'];
                                          $qu4 = "SELECT count(*) from attendence WHERE st_id = '$id' AND status = 'Present' AND t_id = '$user1'";
                                          $res4 = mysql_query($qu4);
                                          $show4 = mysql_fetch_array($res4);
                                          $total1=$show4[0];
                                          $perc = ($total1*100)/$total;
                                                                
                                                                
 
                                                                  echo "<tr height='25px'>
                                     <td width='100px' style='font-size:12px;padding:5px;'>
                                      $name
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                     $rollno
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                      $class
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                      $section
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                      $total
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                      $total1
                                    </td>
                                    <td width='100px' style='font-size:12px;padding:5px;'>
                                      $perc %
                                    </td>	
                                    </tr>";
							
						
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
                                 </table>
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
