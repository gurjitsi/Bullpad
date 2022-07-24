<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
 <style>
                    body
                    {
                        background-color:#444;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;
			height:100%;
                    }
</style>

  <script type="text/javascript">

function validate()
{
   if( document.mysignin.uname1.value == "" )
   {
     document.mysignin.uname1.focus() ;
     return false;
   }
   if( document.mysignin.pswd1.value == "" )
   {
     document.mysignin.pswd1.focus() ;
     return false;
   }
   return( true );
}

</script>

</head>
<body>
<div id="header">
	<div id="login">
                 <div style='text-align:left;float:left;width:100px;position:relative;z-index: 1;'>
               <img src='../user/images/mylogo1.png' width='90px' height='90px'>
              </div> 
             <div style='text-align:left;float:left;width:200px;position:relative;z-index: 1;margin-top:20px;'>
               <span style='font-size:18px;font-weight:700;color:#1A6981;'>Bullpad</span><br/>
               <span style='font-size:10px;font-weight:500;'>complete education technology solution
              </div>
		<div style='text-align:right;float:right;width:700px;'>
                 <a href="../index.php" style='display: inline-block;padding: 2px 10px;background: #1A6981;border-radius: 5px;color:white;text-decoration:none;padding:5px 5px 5px 5px;'>Home</a>
		</div>

	</div>
</div>

<div id="banner"> 
	<div id="banner-data"><br/>
		<div style="text-align:left;width:310px;margin-left:auto;margin-right:auto;">
		<span style="color:#13A7C7;font-size:22px;">Teacher</span><span style="color:#444;font-size:22px;"> Panel</span><br/><br/>
   <div>&nbsp;<?php if(isset($_GET['status'])){ echo "<span style='color:red;font-size:12px;'>* Wrong username or password</span>"; } ?></div>		
	 	<form name="mysignin" method="POST" action="user_login_script.php" onsubmit="return validate()">
					<input type='text' name='uname1' id='uname1' style="color:#444;font-size:16px;font-weight:bold;width:300px;height:35px;border-width:3px;border-style:solid;border-color:#f2f2f2;-moz-border-radius: 8px;border-radius: 8px;padding-left:0.5em;" placeholder='Username'><br/><br/>
					<input type='password' name='pswd1' id='pswd1' style="color:#444;font-size:16px;font-weight:bold;width:300px;height:35px;border-width:3px;border-style:solid;border-color:#f2f2f2;-moz-border-radius: 8px;border-radius: 8px;padding-left:0.5em;" placeholder='Password'><br/><br/>
	<input type='submit' name='submit' id='submit' value='Sign in' style="color:white;font-size:16px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				<form>
	</div>
	</div>
</div>
<div style="width:100%;height:420px;background-color:#f2f2f2;">
	<div style="width:1000px;margin-left:auto;margin-right:auto;padding:40px;">
    		
  </div>
</div>
<div style="width:100%;height:100px;background-color:#444;">
   <div style="width:1000px;margin-left:auto;margin-right:auto;margin-top:10px;padding:10px;font-size:12px;color:#ffffff;font-family: 'Trebuchet MS', Arial;">
       <div style='float:left;width:50%;text-align:left;'>
       Copyright &copy; 2013, Bullpad Technologies Pvt. Ltd. All rights reserved.
      </div> 
       </div>
</div>
</body>
</html>
