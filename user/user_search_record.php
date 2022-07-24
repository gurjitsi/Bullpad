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
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                                  <?php
                                                                $class1 = $_POST['class1'];
                                                                $section1 = $_POST['section1'];
                                                                $category1 = $_POST['category1'];
                                                                
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from temp_record WHERE category = '$category1' AND class='$class1' AND section = '$section1' AND t_id = '$user' ORDER by id DESC";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $title = $row['title'];
                                                                $subject = $row['subject'];
                                                                $category = $row['category'];
                                                                $class = $row['class'];
                                                                $section = $row['section'];
                                                                $date = $row['c_date'];
                                                                $uni_id = $row['uni_id'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <a href='user_update_record.php?uni_id=$uni_id&date=$date' style='color:#444;text-decoration:none;'><b>$title</b></a><br/><br/>
              Subject - $subject &nbsp; Category - $category &nbsp; Class - $class $section &nbsp; Date - $date
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
