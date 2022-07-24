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
                                New Teacher Details
                              </td>
                              </tr>
                              <tr>
                                <td height='260px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="admin_create_user_script.php" onsubmit="return validate()">
                                       <input type='text' name='name' id='name' style="color:#444;font-size:14px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Full Name'><br/><br/>
					<input type='text' name='uname' id='uname' style="color:#444;font-size:14px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Username'><br/><br/>
					<input type='password' name='pswd' id='pswd' style="color:#444;font-size:14px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Password'><br/><br/>
           &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class Incharge- </span> &nbsp; &nbsp; &nbsp;<select name="class" style='font-size:12px;color:#444;'>
  			<option value="Nursery">Nursery</option>
  			<option value="L.K.G">L.K.G</option>
  			<option value="U.K.G">U.K.G</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>
  			<option value="11">11</option>
  			<option value="12">12</option>
  			
  		</select><br/><br/>
               &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Section - </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="section" style='font-size:12px;color:#444;'>
  			<option value="A">A</option>
  			<option value="B">B</option>
  			<option value="C">C</option>
  			<option value="D">D</option>
  			<option value="E">E</option>
  			<option value="F">F</option>
  			<option value="G">G</option>
  			<option value="H">H</option>
  			<option value="I">I</option>
  			<option value="J">J</option>
  			<option value="K">K</option>
  			<option value="L">L</option>
  			<option value="M">M</option>
  			<option value="N">N</option>
  			<option value="O">O</option>
  			
  		</select><br/><br/>
	<input type='submit' name='submit' id='submit' value='Create' style="color:white;font-size:14px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
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
