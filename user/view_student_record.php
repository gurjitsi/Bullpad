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
                               <td bgcolor='#f2f2f2' height='25px'>
                                <table width='100%' style='color:#444;' border='1'>
                                    <tr bgcolor='#444' height='25px' style='color:#ffffff;'>
                                     <td width='100px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Name</b>
                                    </td>
                                    <td width='50px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                     <b>Roll No</b>
                                    </td>
                                    <td width='150px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Title</b>
                                    </td>
                                    <td width='50px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Subject</b>
                                    </td>
                                    <td width='50px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Category</b>
                                    </td>
                                    <td width='50px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Date</b>
                                    </td>
                                    <td width='30px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Total</b>
                                    </td>
                                    <td width='30px' align='center' style='border-right:1px solid #ffffff;font-size:12px;'>
                                      <b>Obtained</b>
                                    </td>
                                    <td width='30px' align='center' style='font-size:12px;'>
                                      <b>%</b>
                                    </td>	
                                    </tr>
                                    <?php
                                     $user1 = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                      include 'dbconnect.php';
                                      define('showmax',4);
                                      $page=isset($_GET['curpage'])?$_GET['curpage']:0;
                                      $startrow=$page*showmax;
                                      $q2="SELECT count(*) from student WHERE u_id = '$user1'";
                                                                $result2=mysql_query($q2);
                                                                $show2=mysql_fetch_array($result2);
                                                                //echo $show1;
                                                                $total=$show2[0];
                                     $qu="SELECT * from student WHERE u_id = '$user1' ORDER by rollno ASC LIMIT $startrow,".showmax;;
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $rollno = $row['rollno'];				   
								$class = $row['class'];
                                                                $section = $row['section'];
                                          $qu4 = "SELECT * from user_record WHERE st_id = '$id' ORDER by id DESC";
                                          $res4 = mysql_query($qu4);
                                          
 
                                                                  echo "<tr height='25px'>
                                     <td width='100px' style='font-size:10px;padding:5px;'>
                                      <b>$name</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;'>
                                     <b>$rollno</b>
                                    </td>
                                    <td width='150px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>
                                    <td width='50px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>
                                    <td width='50px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>
                                    <td width='50px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>
                                    <td width='50px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>
                                    <td width='50px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>                                    
                                    <td width='30px' style='font-size:12px;padding:5px;'>
                                      <b></b>
                                    </td>	
                                    </tr>";
                                while($show4 = mysql_fetch_array($res4))
                                  {
                                           $title = $show4['title'];
                                           $subject = $show4['subject'];
                                           $tmarks = $show4['tmarks'];
                                           $omarks = $show4['omarks'];
                                           $cat = $show4['category'];
                                           $date = $show4['date'];
                                           $perc = ($omarks*100)/$tmarks;
                                                                 echo "<tr height='25px'>
                                     <td width='100px' style='font-size:10px;padding:5px;'>
                                      <b>&nbsp;</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;'>
                                     <b>&nbsp;</b>
                                    </td>
                                    <td width='150px' style='font-size:10px;padding:5px;'>
                                      $title
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $subject
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $cat
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $date
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $tmarks
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      $omarks
                                    </td>                                    
                                    <td width='30px' style='font-size:10px;padding:5px;' valign='top'>
                                      $perc %
                                    </td>	
                                    </tr>";
                                  }
					echo "<tr><td colspan='9'><br/></td></tr>";		
						
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
<a href="view_student_record.php?curpage=<?php echo ($page-1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>prev</a>
<?php
}
else
{
echo "&nbsp;";
}
if($startrow+showmax<$total)
{?>
<a href="view_student_record.php?curpage=<?php echo ($page+1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>next</a>
<?php
}
echo "</td>
                                       </tr>
                                       </table>";

                         ?>
                                 </table>
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
