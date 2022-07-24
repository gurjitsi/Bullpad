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
  <script type="text/javascript">

function validate()
{
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
<div id="page"><br/><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="570px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Update Username and Password
                              </td>
                              </tr>
                              <tr>
                               <?php
                                 $user = $_SESSION['admin_management_user_login_now_nigvideo_hurrrr'];
                                 include 'dbconnect.php';
                                 $qu = "SELECT * from admin WHERE id = '$user'";
                                 $res = mysql_query($qu);
                                 $row = mysql_fetch_array($res);
                                 $uname = $row['uname'];
                                 $pswd = $row['pswd'];
                               ?>
                                <td height='260px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="admin_settings_script.php" onsubmit="return validate()">
					<input type='text' name='uname' id='uname' value='<?php echo $uname; ?>' style="color:#444;font-size:14px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Username'><br/><br/>
					<input type='password' name='pswd' id='pswd' value='<?php echo $pswd; ?>' style="color:#444;font-size:14px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Password'><br/><br/>
	<input type='submit' name='submit' id='submit' value='Update' style="color:white;font-size:14px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				<form>
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
