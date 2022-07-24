<?php
	session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("Location:index.php");
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
   if( document.myuser.subject.value == "" )
   {
     document.myuser.subject.focus() ;
     return false;
   }
   if( document.myuser.syllabus.value == "" )
   {
     document.myuser.syllabus.focus() ;
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
                                New Entry 
                              </td>
                              </tr>
                              <tr>
                                 <?php
                                 $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                 include 'dbconnect.php';
                                 $qu2 = "SELECT class,section from users WHERE id = '$user'";
                                 $res2 = mysql_query($qu2);
                                 $show2 = mysql_fetch_array($res2);
                                 $class1 = $show2['class'];
                                 $section1 = $show2['section'];
                                 ?>
                                <td height='170px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                               <form name="myuser" method="POST" action="user_create_syllabus_script.php" onsubmit="return validate()">
                               <input type='hidden' name='class' value='<?php echo $class1; ?>'>
                               <input type='hidden' name='section' value='<?php echo $section1; ?>'>
                                       					
                &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Subject - </span> &nbsp; &nbsp;&nbsp; &nbsp;<input type='text' name='subject' id='subject' style="color:#444;font-size:12px;font-weight:bold;width:200px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Subject'><br/><br/>
               &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;<textarea rows='10' cols='38' name='syllabus' id='syllabus' style='-moz-border-radius:2px;border-radius:2px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Syllabus ..'></textarea><br/><br/>

                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span>  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $class1." &nbsp; ".$section1; ?><br/><br/>
   
	<input type='submit' name='submit' id='submit' value='Create' style="color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                                 <tr><td><br/></td></tr>
                                <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Syllabus
                              </td>
                              </tr>
                              <tr>
                                <td height='170px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                 <table width='100%' border='1'>
                                   <?php
                                 $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                 include 'dbconnect.php';
                                 $qu3 = "SELECT * from user_syllabus WHERE t_id = '$user'";
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
                                 ?> 
                                  
                                   </table>
                                </td>
                                 </tr>
                                 <tr><td><br/><a href='edit_syllabus.php' style='font-size:12px;color:#13A7C7;text-decoration:none;'>click here to edit syllabus</a></td></tr>
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
