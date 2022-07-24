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
	    <?php include 'admin_header.php'; ?>
	</div>
</div>
<div id="page"><br/><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="470px" height="300px" valign="top" valign='top'>
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Notice Board
                              </td>
                              </tr>
                              <tr>
                                <td height='300px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="admin_create_notice_script.php" onsubmit="return validate()">
                                       <input type='text' name='title' id='title' style="color:#444;font-size:14px;width:430px;height:35px;border-width:3px;border-style:solid;border-color:#f2f2f2;-moz-border-radius: 8px;border-radius: 8px;padding-left:0.5em;" placeholder='Title'><br/><br/>
                           <textarea rows='10' cols='58' name='status' id='status' style='-moz-border-radius:5px;border-radius:5px;border:3px solid #f2f2f2;color:#444;font-size:12px;' placeholder='Description ..'></textarea><br/><br/>
						<input type='submit' name='submit' id='submit' value='Done' style="color:white;font-size:14px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				<form>
                                </td>
                                 </tr>
                               </table>   
                            
		      	</td>
			</tr>
			</table>
                  
                       </td>
                      
                         <td width="370px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Record Search
                              </td>
                              </tr>
                              <tr>
                                <td height='300px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               
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
