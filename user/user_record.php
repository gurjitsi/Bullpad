<?php
	session_start();
	if(!isset($_SESSION['user_management_user_login_now_nigvideo_burr']))
	{
	header("Location:index.php");
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
   if( document.myuser.sub.value == "" )
   {
     document.myuser.sub.focus() ;
     return false;
   }
   if( document.myuser.tmarks.value == "" )
   {
     document.myuser.tmarks.focus() ;
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
<div id="page12"><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="470px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                New Record (Test/Paper/Assignment)
                              </td>
                              </tr>
                              <tr>
                              
                                <td height='240px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                               <form name="myuser" method="POST" action="user_record1.php" onsubmit="return validate()">
                            
                          &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Title - </span> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type='text' name='title' id='title' style="color:#444;font-size:12px;font-weight:bold;width:200px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Title'><br/><br/>
                            &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Subject - </span> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <input type='text' name='sub' id='sub' style="color:#444;font-size:12px;font-weight:bold;width:200px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Subject'><br/><br/>
                            &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Total Marks - </span> &nbsp;&nbsp;&nbsp;<input type='text' name='tmarks' id='tmarks' style="color:#444;font-size:12px;font-weight:bold;width:200px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Total Marks'><br/><br/>
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Category - </span> &nbsp; &nbsp; &nbsp; &nbsp;<select name="category" style='font-size:12px;color:#444;'>
  			<option value="Test">Test</option>
  			<option value="Paper">Paper</option>
  			<option value="Assignment">Assignment</option>
                        </select><br/><br/>
                             
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="class" style='font-size:12px;color:#444;'>
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
                      &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Section - </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="section" style='font-size:12px;color:#444;'>
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
                 &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Date -</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="day" style='font-size:12px;color:#444;'>
  			<option value="">Day</option>
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
  			<option value="13">13</option>
  			<option value="14">14</option>
  			<option value="15">15</option>
  			<option value="16">16</option>
  			<option value="17">17</option>
  			<option value="18">18</option>
  			<option value="19">19</option>
  			<option value="20">20</option>
  			<option value="21">21</option>
  			<option value="22">22</option>
  			<option value="23">23</option>
  			<option value="24">24</option>
  			<option value="25">25</option>
  			<option value="26">26</option>
  			<option value="27">27</option>
  			<option value="28">28</option>
  			<option value="29">29</option>
  			<option value="30">30</option>
  			<option value="31">31</option>
  		</select><select name="month" style='font-size:12px;color:#444;'>
  			<option value="">Month</option>
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
  			
  		</select><select name="year" style='font-size:12px;color:#444;'>
  			<option value="">Year</option>
    <option value="2015" label="2015">2015</option>
    <option value="2014" label="2014">2014</option>
    <option value="2013" label="2013">2013</option>
    <option value="2012" label="2012">2012</option>
    <option value="2011" label="2011">2011</option>
    <option value="2010" label="2010">2010</option>
    <option value="2009" label="2009">2009</option>
    <option value="2008" label="2008">2008</option>
    <option value="2007" label="2007">2007</option>
    <option value="2006" label="2006">2006</option>
    <option value="2005" label="2005">2005</option>
    <option value="2004" label="2004">2004</option>
    <option value="2003" label="2003">2003</option>
    <option value="2002" label="2002">2002</option>
    <option value="2001" label="2001">2001</option>
    <option value="2000" label="2000">2000</option>
    <option value="1999" label="1999">1999</option>
    <option value="1998" label="1998">1998</option>
    <option value="1997" label="1997">1997</option>
    <option value="1996" label="1996">1996</option>
    <option value="1995" label="1995">1995</option>
    <option value="1994" label="1994">1994</option>
    <option value="1993" label="1993">1993</option>
    <option value="1992" label="1992">1992</option>
    <option value="1991" label="1991">1991</option>
    <option value="1990" label="1990">1990</option>
    <option value="1989" label="1989">1989</option>
    <option value="1988" label="1988">1988</option>
    <option value="1987" label="1987">1987</option>
    <option value="1986" label="1986">1986</option>
    <option value="1985" label="1985">1985</option>
    <option value="1984" label="1984">1984</option>
    <option value="1983" label="1983">1983</option>
    <option value="1982" label="1982">1982</option>
    <option value="1981" label="1981">1981</option>
    <option value="1980" label="1980">1980</option>
    <option value="1979" label="1979">1979</option>
    <option value="1978" label="1978">1978</option>
    <option value="1977" label="1977">1977</option>
    <option value="1976" label="1976">1976</option>
    <option value="1975" label="1975">1975</option>
    <option value="1974" label="1974">1974</option>
    <option value="1973" label="1973">1973</option>
    <option value="1972" label="1972">1972</option>
    <option value="1971" label="1971">1971</option>
    <option value="1970" label="1970">1970</option>
    <option value="1969" label="1969">1969</option>
    <option value="1968" label="1968">1968</option>
    <option value="1967" label="1967">1967</option>
    <option value="1966" label="1966">1966</option>
    <option value="1965" label="1965">1965</option>
    <option value="1964" label="1964">1964</option>
    <option value="1963" label="1963">1963</option>
    <option value="1962" label="1962">1962</option>
    <option value="1961" label="1961">1961</option>
    <option value="1960" label="1960">1960</option>
    <option value="1959" label="1959">1959</option>
    <option value="1958" label="1958">1958</option>
    <option value="1957" label="1957">1957</option>
    <option value="1956" label="1956">1956</option>
    <option value="1955" label="1955">1955</option>
    <option value="1954" label="1954">1954</option>
    <option value="1953" label="1953">1953</option>
    <option value="1952" label="1952">1952</option>
    <option value="1951" label="1951">1951</option>
    <option value="1950" label="1950">1950</option>
    <option value="1949" label="1949">1949</option>
    <option value="1948" label="1948">1948</option>
    <option value="1947" label="1947">1947</option>
    <option value="1946" label="1946">1946</option>
    <option value="1945" label="1945">1945</option>
    <option value="1944" label="1944">1944</option>

  		</select><br/><br/>
	<input type='submit' name='submit' id='submit' value='Next' style="color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                       <tr><td><br/></td></tr>
                                <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                 Record Search (Test/Paper/Assignment)
                              </td>
                              </tr>
                              <tr>
                              
                                <td height='130px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                               <form name="mysearch" method="POST" action="user_search_record.php">
                              
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Category - </span> &nbsp; &nbsp; &nbsp; &nbsp;<select name="category1" style='font-size:12px;color:#444;'>
  			<option value="Test">Test</option>
  			<option value="Paper">Paper</option>
  			<option value="Assignment">Assignment</option>
                        </select><br/><br/>
                             
                     &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="class1" style='font-size:12px;color:#444;'>
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
                      &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Section - </span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="section1" style='font-size:12px;color:#444;'>
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
              
	<input type='submit' name='submit1' id='submit1' value='Search' style="color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                               </table>   
                            
		      	</td>
                       <td width='50px'>&nbsp;</td>
                       <td width="350px" height="445px" valign="top">
		             
                            <table border='0' width='100%'>
                            <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                              Student Marks Sheet
                              </td>
                              </tr>
                              <tr>
                                 <td bgcolor='#f2f2f2'><br/>
                                <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:white;'>
               <a href='view_student_record.php' style='font-size:12px;color:#13A7C7;text-decoration:none;'>click here to see marks sheet</a><br/>
              </td>
                                       </tr>
                                       </table><br/>
                                </td> 
                                </tr>	
                            <tr><td><br/></td></tr>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Latest Records
                              </td>
                              </tr>
                              <tr>
                                <td height='330px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from temp_record WHERE t_id = '$user' ORDER by id DESC LIMIT 3";
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
              Subject - $subject &nbsp; Category - $category &nbsp; Class - $class $section <br/><br/>Date - $date
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
                              echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                <a href='view_complete_record.php' style='font-size:12px;color:#13A7C7;text-decoration:none;'>View all records</a>
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
