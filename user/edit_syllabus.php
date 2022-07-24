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
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:11px;'> <br/><br/>
                                  <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                define('showmax',10);
                                                                $page=isset($_GET['curpage'])?$_GET['curpage']:0;
                                                                $startrow=$page*showmax;
                                                                include 'dbconnect.php';
                                                                $q1="SELECT count(*) from user_syllabus WHERE t_id = '$user'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from user_syllabus WHERE t_id = '$user' LIMIT $startrow,".showmax;
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $subject = $row['subject'];
                                                                $syllabus = $row['syllabus'];
                                                                $class = $row['class'];				   
								$section = $row['section'];
                                                                                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:11px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'><b>$subject</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> 
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<p><br/>
                                      Subject - $subject<br/><br/>
                                      Syllabus - $syllabus<br/><br/>
                                      Class - $class<br/><br/>
                                      Section - $section<br/><br/>
				</p>
			</div>
</div>&nbsp; <a href='#openModal13$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Update</a>
                                                            <div id='openModal13$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Update</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_update_syllabus_script.php'>
  			        <input type='hidden' name='u_id1' value='$id'>
                                
                       &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Subject - </span> &nbsp; &nbsp;&nbsp; &nbsp;<input type='text' name='subject' id='subject' value='$subject' style='color:#444;font-size:12px;font-weight:bold;width:200px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Subject'><br/><br/>
               &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;<textarea rows='10' cols='38' name='syllabus' id='syllabus' style='-moz-border-radius:2px;border-radius:2px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Syllabus ..'>$syllabus</textarea><br/><br/>

                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span>  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; $class &nbsp; $section<br/><br/>
                           
                                   <input type='submit' name='submit' id='submit' value='Update' style='color:white;font-size:14px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>		
   &nbsp; <a href='#openModal12$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Delete</a> &nbsp; <a href='#openModal12$id' style='color:#444;font-size:12px;text-decoration:none;'></span>
                                               <div id='openModal12$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Are you confirm to delete?</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_syllabus_delete_script.php'>
  			<input type='hidden' name='st_id1' value='$id'>
				<input type='submit' name='submit' id='submit' value='Confirm' style='color:white;font-size:16px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>		
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
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
echo "<table width='90%' align='center' border='0' style='color:#444;font-size:14px;'>
                                      <tr>
            <td valign='top' style='padding:5px;'>";
                                             
if($page>0)
{?>
<a href="edit_timetable.php?curpage=<?php echo ($page-1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>prev</a>
<?php
}
else
{
echo "&nbsp;";
}
if($startrow+showmax<$total)
{?>
<a href="edit_timetable.php?curpage=<?php echo ($page+1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>next</a>
<?php
}
echo "</td>
                                       </tr>
                                       </table>";
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
