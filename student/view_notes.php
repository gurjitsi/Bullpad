<?php
	session_start();
	if(!isset($_SESSION['student_management_user_login_now_nigvideo_chakde']))
	{
	header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="css/box.css">
</head>
<body>
<div id="header">
	<div id="login">
	    <?php include 'student_header.php'; ?>
	</div>
</div>
<div id="page12">
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="900px" height="300px" valign="top">
                            <a href='student_notes.php' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Back</a><br/><br/>
                            <table border='0' width='100%'>
                            <td height='400px' bgcolor='#f2f2f2' valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                                
                                 <?php
                                 $get_image = $_GET['notes'];
                                 echo "<img src='../user/notes/$get_image' width='870px' height='1000px'>";          
                                 ?>  
                               </td>
                                   
                                 </tr>
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
