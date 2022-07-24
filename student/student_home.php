<?php
	session_start();
	if(!isset($_SESSION['student_management_user_login_now_nigvideo_chakde']))
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
   if( document.myuser.title.value == "" )
   {
     document.myuser.title.focus() ;
     return false;
   }
   if( document.myuser.status.value == "" )
   {
     document.myuser.status.focus() ;
     return false;
   }
   return( true );
}

</script>

</head>
<body>
<div id="header">
	<div id="login">
	    <?php include 'student_header.php'; ?>
	</div>
</div>
<div id="page"><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="280px" height="400px" valign="top" valign='top'>
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                               Important Announcements
                              </td>
                              </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/>
                               <?php
                                                                $user = $_SESSION['student_management_user_login_now_nigvideo_chakde'];
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from admin_notice ORDER by id DESC LIMIT 3";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $title = $row['title'];
                                                                $notice = $row['notice'];				   
								$date = $row['c_date'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:10px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'>$title</span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$title</h3>$date
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      $notice
				</p>
			</div>
</div>		
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
                                 echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                 <a href='student_announcement.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all announcements</a>
            </td>
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
   
                       <td>
                        <table border="0">
			<tr>
                        <td width="280px" height="400px" valign="top" valign='top'>
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                               Notice Board
                              </td>
                              </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/>
                               <?php
                                                                $user = $_SESSION['student_management_user_login_now_nigvideo_chakde'];
                                                                include 'dbconnect.php';
                                                                $qu2 = "SELECT u_id from student WHERE id = '$user'";
                                                                $res2 = mysql_query($qu2);
                                                                $row2 = mysql_fetch_array($res2);
                                                                $u_id = $row2['u_id'];

                                                                $qu="SELECT * from user_notice WHERE t_id = '$u_id' ORDER by id DESC LIMIT 3";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $title = $row['title'];
                                                                $notice = $row['notice'];				   
								$date = $row['date'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:10px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'>$title</span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$title</h3>$date
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      $notice
				</p>
			</div>
</div>		
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
                                echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                 <a href='student_notice.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all notice</a>
            </td>
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
                      
                         <td width="280px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Inbox
                              </td>
                              </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/>
                                 <?php
                                                                $user = $_SESSION['student_management_user_login_now_nigvideo_chakde'];
                                                                include 'dbconnect.php';
                                                                $qu2 = "SELECT u_id from student WHERE id = '$user'";
                                                                $res2 = mysql_query($qu2);
                                                                $row2 = mysql_fetch_array($res2);
                                                                $u_id1 = $row2['u_id'];
                                                                $qu="SELECT * from user_message WHERE st_id='$user' AND t_id = '$u_id1' ORDER by id DESC LIMIT 3";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $title = $row['title'];
                                                                $notice = $row['message'];				   
								$date = $row['date'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:10px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'>$title</span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$title</h3>$date
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      $notice
				</p>
			</div>
</div>		
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
                                 echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                 <a href='student_inbox.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all messages</a>
            </td>
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
