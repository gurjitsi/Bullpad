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
               <img src='user/images/mylogo1.png' width='90px' height='90px'>
              </div> 
             <div style='text-align:left;float:left;width:200px;position:relative;z-index: 1;margin-top:20px;'>
               <span style='font-size:18px;font-weight:700;color:#1A6981;'>Bullpad</span><br/>
               <span style='font-size:10px;font-weight:500;'>Complete education technology solution
              </div>
		<div style='text-align:right;float:right;width:700px;'>
                 <a href="admin/index.php" style='display: inline-block;padding: 2px 10px;background: #1A6981;border-radius: 5px;color:white;text-decoration:none;padding:5px 5px 5px 5px;'>Principal Login</a> &nbsp; <a href="user/index.php" style='display: inline-block;padding: 2px 10px;background: #1A6981;border-radius: 5px;color:white;text-decoration:none;padding:5px 5px 5px 5px;'>Teacher Login</a> &nbsp; <a href="student/index.php" style='display: inline-block;padding: 2px 10px;background: #1A6981;border-radius: 5px;color:white;text-decoration:none;padding:5px 5px 5px 5px;'>Student / Parents Login</a>
		</div>

	</div>
</div>

<div id="banner"> 
	<div id="banner-data"><br/>
		<div style="text-align:center;width:310px;margin-left:auto;margin-right:auto;">
                 <img src='images/abschool.png' height='200px' width='200px'><br/><br/>
		<span style="color:#13A7C7;font-size:22px;">Techno </span><span style="color:#444;font-size:22px;">Public High School</span><br/><br/>
   			 
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
       Copyright &copy; 2013-2022, Gurjit Singh. All rights reserved.
      </div> 
       </div>
</div>
</body>
</html>
