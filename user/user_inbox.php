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
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:11px;' width='50%'>
                               <div style='width:100%;background-color:#444;color:#ffffff;font-size:12px;font-weight:bold;padding:5px;text-align:center;'> Inbox </div><br/>
                                  <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                
                                                                include 'dbconnect.php';
                                                                
                                                                $qu="SELECT * from admin_message WHERE t_id = '$user' ORDER by id DESC LIMIT 5";
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
               <span style='color:#444;text-decoration:none;'><b>$title</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
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
                <a href='inbox.php' style='font-size:12px;color:#13A7C7;text-decoration:none;'>click here to see more</a>
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
                               <td width='2%'>&nbsp;</td>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:11px;' width='48%'>
                               <div style='width:100%;background-color:#444;color:#ffffff;font-size:12px;font-weight:bold;padding:5px;text-align:center;'> Sent Messages </div>
                               <br/>
                                  <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from user_message WHERE t_id = '$user' ORDER by id DESC LIMIT 5";
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
               <span style='color:#444;text-decoration:none;'><b>$title</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
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
                <a href='sent_messages.php' style='font-size:12px;color:#13A7C7;text-decoration:none;'>click here to see more</a>
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
