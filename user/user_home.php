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
	    <?php include 'user_header.php'; ?>
	</div>
</div>
<div id="page"><br/><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                
                        <td width="350px" height="280px" valign="top" valign='top'>
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                               New Notice
                              </td>
                              </tr>
                              <tr>
                                <td height='280px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="user_create_notice_script.php" onsubmit="return validate()">
                                       <input type='text' name='title' id='title' style="color:#444;font-size:14px;width:230px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Title'><br/><br/>
                           <textarea rows='10' cols='38' name='status' id='status' style='-moz-border-radius:2px;border-radius:2px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Description ..'></textarea><br/><br/>
						<input type='submit' name='submit' id='submit' value='Done' style="color:white;font-size:14px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                               </table>   
                            
		      	</td>
	
                  
                       </td>
                        <td width="260px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Important Announcements
                              </td>
                              </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                                <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
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
                <a href='user_announcements.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all announcements</a>
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
                         <td width="260px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Inbox
                              </td>
                              </tr>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                                <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from admin_message WHERE t_id = '$user' ORDER by id DESC LIMIT 3";
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
                <a href='user_inbox.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all messages</a>
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
