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
<div id="page12"><br/>
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="970px" height="400px" valign="top">
		             
                            <table border='0' width='100%'>
                              <tr>
                                <td height='400px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;' width='72%'> <br/><br/>
                                  <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                define('showmax',10);
                                                                $page=isset($_GET['curpage'])?$_GET['curpage']:0;
                                                                $startrow=$page*showmax;
                                                                include 'dbconnect.php';
                                                                $q2="SELECT count(*) from temp_attendance WHERE t_id = '$user'";
                                                                $result2=mysql_query($q2);
                                                                $show2=mysql_fetch_array($result2);
                                                                //echo $show1;
                                                                $total2=$show2[0];
                                                                $q1="SELECT count(*) from student WHERE u_id = '$user'";
                                                                $result1=mysql_query($q1);
                                                                $show1=mysql_fetch_array($result1);
                                                                //echo $show1;
                                                                $total=$show1[0];
                                                                //echo $total;
                                                                $qu="SELECT * from student WHERE u_id = '$user' ORDER by rollno ASC LIMIT $startrow,".showmax;
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $name = $row['name'];
                                                                $father = $row['father'];				   
								$mother = $row['mother'];
                                                                $addr = $row['address'];
                                                                $rollno = $row['rollno'];
                                                                $pswd = $row['pswd'];
                                                                $class = $row['class'];				   
								$section = $row['section'];
                                                                $birth = $row['birth'];
                                                                $birthDate = explode("-", $birth);
                                                                $b1 = $birthDate[0];
                                                                $b2 = $birthDate[1];
                                                                $b3 = $birthDate[2]; 
                                                                $contact = $row['contact'];
                                                                $image = $row['image'];	
                                                                $c_date = $row['c_date'];
                                                                $qu4 = "SELECT count(*) from attendence WHERE st_id = '$id' AND status = 'Present' AND t_id = '$user'";
                                          $res4 = mysql_query($qu4);
                                          $show4 = mysql_fetch_array($res4);
                                          $total4=$show4[0];
                                          $perc = ($total4*100)/$total2;			   
								                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='70px' style='padding:5px;'>
                         <img src='images/$image' height='60px' width='60px' style='border:1px solid $444;'>
                                       </td>
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'><b>$name</b></span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> 
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$name's details</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      <b>Name - </b> $name<br/><br/>
                                      <b> Father's Name - </b> $father <br/><br/>
                                      <b> Mother's Name - </b> $mother<br/><br/>
                                      <b> Address - </b> $addr<br/><br/>
                                      <b> Contact - </b> $contact <br/><br/>
                                      <b> Password - </b> $pswd <br/><br/>
                                      <b> Roll Number - </b> $rollno <br/><br/>
                                      <b> Class - </b> $class<br/><br/>
                                      <b> Section - </b> $section <br/><br/>
                                      <b> Birth - </b> $birth <br/><br/>
                                      <b> Account Created - </b> $c_date<br/><br/>
                                </p>
			</div>
</div>&nbsp; <a href='#openModal13$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Update</a>
                                                            <div id='openModal13$id' class='modalDialog'>
						<div>
                                  <div style='height:400px;overflow-y:scroll;overflow-x:hidden;padding:5px;'>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Update $name's Record</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_update_student_record_script.php'>
  			<input type='hidden' name='u_id1' value='$id'>
                                <input type='text' name='name1' id='name1' value='$name' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Name'><br/><br/>
				<input type='text' name='fname1' id='uname1' value='$father' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Father Name'><br/><br/> 
                               <input type='text' name='mname1' id='mname1' value='$mother' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Mother Name'><br/><br/>
					<input type='text' name='address1' id='address1' value='$addr' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Address'><br/><br/>
					<input type='text' name='phn1' id='phn1' value='$contact' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Phone Number'><br/><br/>
                                       <input type='password' name='pswd1' id='pswd1' value='$pswd' style='color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Password'><br/><br/>";
                           echo "<b> Roll Number - </b><select name='rollno' style='font-size:12px;color:#444;'>";
              
                     $i = 1;
                     while($i < 156)
                     {
                       if($i == 1)
                       {
                         if($rollno == "1")
                         {
                             echo "<option value='1' selected='selected'>1</option>";     
                         }
                         else
                         {
                            echo "<option value='1'>1</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($rollno == "2")
                         {
                             echo "<option value='2' selected='selected'>2</option>";     
                         }
                         else
                         {
                            echo "<option value='2'>2</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($rollno == "3")
                         {
                             echo "<option value='3' selected='selected'>3</option>";     
                         }
                         else
                         {
                            echo "<option value='3'>3</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($rollno == "4")
                         {
                             echo "<option value='4' selected='selected'>4</option>";     
                         }
                         else
                         {
                            echo "<option value='4'>4</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($rollno == "5")
                         {
                             echo "<option value='5' selected='selected'>5</option>";     
                         }
                         else
                         {
                            echo "<option value='5'>5</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($rollno == "6")
                         {
                             echo "<option value='6' selected='selected'>6</option>";     
                         }
                         else
                         {
                            echo "<option value='6'>6</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($rollno == "7")
                         {
                             echo "<option value='7' selected='selected'>7</option>";     
                         }
                         else
                         {
                            echo "<option value='7'>7</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($rollno == "8")
                         {
                             echo "<option value='8' selected='selected'>8</option>";     
                         }
                         else
                         {
                            echo "<option value='8'>8</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($rollno == "9")
                         {
                             echo "<option value='9' label='9' selected='selected'>9</option>";     
                         }
                         else
                         {
                            echo "<option value='9' label='9'>9</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($rollno == "10")
                         {
                             echo "<option value='10' label='10' selected='selected'>10</option>";     
                         }
                         else
                         {
                            echo "<option value='10' label='10'>10</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($rollno == "11")
                         {
                             echo "<option value='11' label='11' selected='selected'>11</option>";     
                         }
                         else
                         {
                            echo "<option value='11' label='11'>11</option>";
                         }
                       }
                       
                       else if($i == 12)
                       {
                          if($rollno == "12")
                         {
                             echo "<option value='12' label='12' selected='selected'>12</option>";     
                         }
                         else
                         {
                            echo "<option value='12' label='12'>12</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($rollno == "13")
                         {
                             echo "<option value='13' label='13' selected='selected'>13</option>";     
                         }
                         else
                         {
                            echo "<option value='13' label='13'>13</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($rollno == "14")
                         {
                             echo "<option value='14' label='14' selected='selected'>14</option>";     
                         }
                         else
                         {
                            echo "<option value='14' label='14'>14</option>";
                         }
                       }
                       else if($i == 15)
                       {
                          if($rollno == "15")
                         {
                             echo "<option value='15' label='15' selected='selected'>15</option>";     
                         }
                         else
                         {
                            echo "<option value='15' label='15'>15</option>";
                         }
                       }
                       else if($i == 16)
                       {
                          if($rollno == "16")
                         {
                             echo "<option value='16' label='16' selected='selected'>16</option>";     
                         }
                         else
                         {
                            echo "<option value='16' label='16'>16</option>";
                         }
                       }
                        else if($i == 17)
                       {
                          if($rollno == "17")
                         {
                             echo "<option value='17' label='17' selected='selected'>17</option>";     
                         }
                         else
                         {
                            echo "<option value='17' label='17'>17</option>";
                         }
                       }
                       else if($i == 18)
                       {
                          if($rollno == "18")
                         {
                             echo "<option value='18' label='18' selected='selected'>18</option>";     
                         }
                         else
                         {
                            echo "<option value='18' label='18'>18</option>";
                         }
                       }
                        else if($i == 19)
                       {
                          if($rollno == "19")
                         {
                             echo "<option value='19' label='19' selected='selected'>19</option>";     
                         }
                         else
                         {
                            echo "<option value='19' label='19'>19</option>";
                         }
                       }
                       else if($i == 20)
                       {
                          if($rollno == "20")
                         {
                             echo "<option value='20' label='20' selected='selected'>20</option>";     
                         }
                         else
                         {
                            echo "<option value='20' label='20'>20</option>";
                         }
                       }
                       else if($i == 21)
                       {
                          if($rollno == "21")
                         {
                             echo "<option value='21' label='21' selected='selected'>21</option>";     
                         }
                         else
                         {
                            echo "<option value='21' label='21'>21</option>";
                         }
                       }
                       else if($i == 22)
                       {
                          if($rollno == "22")
                         {
                             echo "<option value='22' label='22' selected='selected'>22</option>";     
                         }
                         else
                         {
                            echo "<option value='22' label='22'>22</option>";
                         }
                       }
                       else if($i == 23)
                       {
                          if($rollno == "23")
                         {
                             echo "<option value='23' label='23' selected='selected'>23</option>";     
                         }
                         else
                         {
                            echo "<option value='23' label='23'>23</option>";
                         }
                       }
                       
                       else if($i == 24)
                       {
                          if($rollno == "24")
                         {
                             echo "<option value='24' label='24' selected='selected'>24</option>";     
                         }
                         else
                         {
                            echo "<option value='24' label='24'>24</option>";
                         }
                       }
                       else if($i == 25)
                       {
                          if($rollno == "25")
                         {
                             echo "<option value='25' label='25' selected='selected'>25</option>";     
                         }
                         else
                         {
                            echo "<option value='25' label='25'>25</option>";
                         }
                       }
                       else if($i == 26)
                       {
                          if($rollno == "26")
                         {
                             echo "<option value='26' label='26' selected='selected'>26</option>";     
                         }
                         else
                         {
                            echo "<option value='26' label='26'>26</option>";
                         }
                       }
                       else if($i == 27)
                       {
                          if($rollno == "27")
                         {
                             echo "<option value='27' label='27' selected='selected'>27</option>";     
                         }
                         else
                         {
                            echo "<option value='27' label='27'>27</option>";
                         }
                       }
                       else if($i == 28)
                       {
                          if($rollno == "28")
                         {
                             echo "<option value='28' label='28' selected='selected'>28</option>";     
                         }
                         else
                         {
                            echo "<option value='28' label='28'>28</option>";
                         }
                       }
                        else if($i == 29)
                       {
                          if($rollno == "29")
                         {
                             echo "<option value='29' label='29' selected='selected'>29</option>";     
                         }
                         else
                         {
                            echo "<option value='29' label='29'>29</option>";
                         }
                       }
                       else if($i == 30)
                       {
                          if($rollno == "30")
                         {
                             echo "<option value='30' label='30' selected='selected'>30</option>";     
                         }
                         else
                         {
                            echo "<option value='30' label='30'>30</option>";
                         }
                       }
                       else if($i == 31)
                       {
                          if($rollno == "31")
                         {
                             echo "<option value='31' selected='selected'>31</option>";     
                         }
                         else
                         {
                            echo "<option value='31'>31</option>";
                         }
                       }
                       else if($i == 32)
                       {
                          if($rollno == "32")
                         {
                             echo "<option value='32' selected='selected'>32</option>";     
                         }
                         else
                         {
                            echo "<option value='32'>32</option>";
                         }
                       }
                       else if($i == 33)
                       {
                          if($rollno == "33")
                         {
                             echo "<option value='33' selected='selected'>33</option>";     
                         }
                         else
                         {
                            echo "<option value='33'>33</option>";
                         }
                       }
                       else if($i == 34)
                       {
                          if($rollno == "34")
                         {
                             echo "<option value='34' selected='selected'>34</option>";     
                         }
                         else
                         {
                            echo "<option value='34'>34</option>";
                         }
                       }
                       else if($i == 35)
                       {
                          if($rollno == "35")
                         {
                             echo "<option value='35' selected='selected'>35</option>";     
                         }
                         else
                         {
                            echo "<option value='35'>35</option>";
                         }
                       }
                       else if($i == 36)
                       {
                          if($rollno == "36")
                         {
                             echo "<option value='36' selected='selected'>36</option>";     
                         }
                         else
                         {
                            echo "<option value='36'>36</option>";
                         }
                       }
                       else if($i == 37)
                       {
                          if($rollno == "37")
                         {
                             echo "<option value='37' selected='selected'>37</option>";     
                         }
                         else
                         {
                            echo "<option value='37'>37</option>";
                         }
                       }
                       else if($i == 38)
                       {
                          if($rollno == "38")
                         {
                             echo "<option value='38' label='38' selected='selected'>38</option>";     
                         }
                         else
                         {
                            echo "<option value='38' label='38'>38</option>";
                         }
                       }
                       else if($i == 39)
                       {
                          if($rollno == "39")
                         {
                             echo "<option value='39' label='39' selected='selected'>39</option>";     
                         }
                         else
                         {
                            echo "<option value='39' label='39'>39</option>";
                         }
                       }
                       else if($i == 40)
                       {
                          if($rollno == "40")
                         {
                             echo "<option value='40' label='40' selected='selected'>40</option>";     
                         }
                         else
                         {
                            echo "<option value='40' label='40'>40</option>";
                         }
                       }
                       
                       else if($i == 41)
                       {
                          if($rollno == "41")
                         {
                             echo "<option value='41' label='41' selected='selected'>41</option>";     
                         }
                         else
                         {
                            echo "<option value='41' label='41'>41</option>";
                         }
                       }
                       else if($i == 42)
                       {
                          if($rollno == "42")
                         {
                             echo "<option value='42' label='42' selected='selected'>42</option>";     
                         }
                         else
                         {
                            echo "<option value='42' label='42'>42</option>";
                         }
                       }
                       else if($i == 43)
                       {
                          if($rollno == "43")
                         {
                             echo "<option value='43' label='43' selected='selected'>43</option>";     
                         }
                         else
                         {
                            echo "<option value='43' label='43'>43</option>";
                         }
                       }
                       else if($i == 44)
                       {
                          if($rollno == "44")
                         {
                             echo "<option value='44' label='44' selected='selected'>44</option>";     
                         }
                         else
                         {
                            echo "<option value='44' label='44'>44</option>";
                         }
                       }
                       else if($i == 45)
                       {
                          if($rollno == "45")
                         {
                             echo "<option value='45' label='45' selected='selected'>45</option>";     
                         }
                         else
                         {
                            echo "<option value='45' label='45'>45</option>";
                         }
                       }
                        else if($i == 46)
                       {
                          if($rollno == "46")
                         {
                             echo "<option value='46' label='46' selected='selected'>46</option>";     
                         }
                         else
                         {
                            echo "<option value='46' label='46'>46</option>";
                         }
                       }
                       else if($i == 47)
                       {
                          if($rollno == "47")
                         {
                             echo "<option value='47' label='47' selected='selected'>47</option>";     
                         }
                         else
                         {
                            echo "<option value='47' label='47'>47</option>";
                         }
                       }
                        else if($i == 48)
                       {
                          if($rollno == "48")
                         {
                             echo "<option value='48' label='48' selected='selected'>48</option>";     
                         }
                         else
                         {
                            echo "<option value='48' label='48'>48</option>";
                         }
                       }
                       else if($i == 49)
                       {
                          if($rollno == "49")
                         {
                             echo "<option value='49' label='49' selected='selected'>49</option>";     
                         }
                         else
                         {
                            echo "<option value='49' label='49'>49</option>";
                         }
                       }
                       else if($i == 50)
                       {
                          if($rollno == "50")
                         {
                             echo "<option value='50' label='50' selected='selected'>50</option>";     
                         }
                         else
                         {
                            echo "<option value='50' label='50'>50</option>";
                         }
                       }
                       else if($i == 51)
                       {
                          if($rollno == "51")
                         {
                             echo "<option value='51' label='51' selected='selected'>51</option>";     
                         }
                         else
                         {
                            echo "<option value='51' label='51'>51</option>";
                         }
                       }
                       else if($i == 52)
                       {
                          if($rollno == "52")
                         {
                             echo "<option value='52' label='52' selected='selected'>52</option>";     
                         }
                         else
                         {
                            echo "<option value='52' label='52'>52</option>";
                         }
                       }
                       
                       else if($i == 53)
                       {
                          if($rollno == "53")
                         {
                             echo "<option value='53' label='53' selected='selected'>53</option>";     
                         }
                         else
                         {
                            echo "<option value='53' label='53'>53</option>";
                         }
                       }
                       else if($i == 54)
                       {
                          if($rollno == "54")
                         {
                             echo "<option value='54' label='54' selected='selected'>54</option>";     
                         }
                         else
                         {
                            echo "<option value='54' label='54'>54</option>";
                         }
                       }
                       else if($i == 55)
                       {
                          if($rollno == "55")
                         {
                             echo "<option value='55' label='55' selected='selected'>55</option>";     
                         }
                         else
                         {
                            echo "<option value='55' label='55'>55</option>";
                         }
                       }
                       else if($i == 56)
                       {
                          if($rollno == "56")
                         {
                             echo "<option value='56' label='56' selected='selected'>56</option>";     
                         }
                         else
                         {
                            echo "<option value='56' label='56'>56</option>";
                         }
                       }
                       else if($i == 57)
                       {
                          if($rollno == "57")
                         {
                             echo "<option value='57' label='57' selected='selected'>57</option>";     
                         }
                         else
                         {
                            echo "<option value='57' label='57'>57</option>";
                         }
                       }
                        else if($i == 58)
                       {
                          if($rollno == "58")
                         {
                             echo "<option value='58' label='58' selected='selected'>58</option>";     
                         }
                         else
                         {
                            echo "<option value='58' label='58'>58</option>";
                         }
                       }
                       else if($i == 59)
                       {
                          if($rollno == "59")
                         {
                             echo "<option value='59' label='59' selected='selected'>59</option>";     
                         }
                         else
                         {
                            echo "<option value='59' label='59'>59</option>";
                         }
                       }
                       else if($i == 60)
                       {
                          if($rollno == "60")
                         {
                             echo "<option value='60' selected='selected'>60</option>";     
                         }
                         else
                         {
                            echo "<option value='60'>60</option>";
                         }
                       }
                       else if($i == 61)
                       {
                          if($rollno == "61")
                         {
                             echo "<option value='61' selected='selected'>61</option>";     
                         }
                         else
                         {
                            echo "<option value='61'>61</option>";
                         }
                       }
                       else if($i == 62)
                       {
                          if($rollno == "62")
                         {
                             echo "<option value='62' selected='selected'>62</option>";     
                         }
                         else
                         {
                            echo "<option value='62'>62</option>";
                         }
                       }
                       else if($i == 63)
                       {
                          if($rollno == "63")
                         {
                             echo "<option value='63' selected='selected'>63</option>";     
                         }
                         else
                         {
                            echo "<option value='63'>63</option>";
                         }
                       }
                       else if($i == 64)
                       {
                          if($rollno == "64")
                         {
                             echo "<option value='64' selected='selected'>64</option>";     
                         }
                         else
                         {
                            echo "<option value='64'>64</option>";
                         }
                       }
                       else if($i == 65)
                       {
                          if($rollno == "65")
                         {
                             echo "<option value='65' selected='selected'>65</option>";     
                         }
                         else
                         {
                            echo "<option value='65'>65</option>";
                         }
                       }
                       else if($i == 66)
                       {
                          if($rollno == "66")
                         {
                             echo "<option value='66' label='66' selected='selected'>66</option>";     
                         }
                         else
                         {
                            echo "<option value='66' label='66'>66</option>";
                         }
                       }
                       else if($i == 67)
                       {
                          if($rollno == "67")
                         {
                             echo "<option value='67' label='67' selected='selected'>67</option>";     
                         }
                         else
                         {
                            echo "<option value='67' label='67'>67</option>";
                         }
                       }
                       else if($i == 68)
                       {
                          if($rollno == "68")
                         {
                             echo "<option value='68' label='68' selected='selected'>68</option>";     
                         }
                         else
                         {
                            echo "<option value='68' label='68'>68</option>";
                         }
                       }
                       
                       else if($i == 69)
                       {
                          if($rollno == "69")
                         {
                             echo "<option value='69' label='69' selected='selected'>69</option>";     
                         }
                         else
                         {
                            echo "<option value='69' label='69'>69</option>";
                         }
                       }
                       else if($i == 70)
                       {
                          if($rollno == "70")
                         {
                             echo "<option value='70' label='70' selected='selected'>70</option>";     
                         }
                         else
                         {
                            echo "<option value='70' label='70'>70</option>";
                         }
                       }
                       else if($i == 71)
                       {
                          if($rollno == "71")
                         {
                             echo "<option value='71' label='71' selected='selected'>71</option>";     
                         }
                         else
                         {
                            echo "<option value='71' label='71'>71</option>";
                         }
                       }
                       else if($i == 72)
                       {
                          if($rollno == "72")
                         {
                             echo "<option value='72' label='72' selected='selected'>72</option>";     
                         }
                         else
                         {
                            echo "<option value='72' label='72'>72</option>";
                         }
                       }
                       else if($i == 73)
                       {
                          if($rollno == "73")
                         {
                             echo "<option value='73' label='73' selected='selected'>73</option>";     
                         }
                         else
                         {
                            echo "<option value='73' label='73'>73</option>";
                         }
                       }
                        else if($i == 74)
                       {
                          if($rollno == "74")
                         {
                             echo "<option value='74' label='74' selected='selected'>74</option>";     
                         }
                         else
                         {
                            echo "<option value='74' label='74'>74</option>";
                         }
                       }
                       else if($i == 75)
                       {
                          if($rollno == "75")
                         {
                             echo "<option value='75' label='75' selected='selected'>75</option>";     
                         }
                         else
                         {
                            echo "<option value='75' label='75'>75</option>";
                         }
                       }
                        else if($i == 76)
                       {
                          if($rollno == "76")
                         {
                             echo "<option value='76' label='76' selected='selected'>76</option>";     
                         }
                         else
                         {
                            echo "<option value='76' label='76'>76</option>";
                         }
                       }
                       else if($i == 77)
                       {
                          if($rollno == "77")
                         {
                             echo "<option value='77' label='77' selected='selected'>77</option>";     
                         }
                         else
                         {
                            echo "<option value='77' label='77'>77</option>";
                         }
                       }
                       else if($i == 78)
                       {
                          if($rollno == "78")
                         {
                             echo "<option value='78' label='78' selected='selected'>78</option>";     
                         }
                         else
                         {
                            echo "<option value='78' label='78'>78</option>";
                         }
                       }
                       else if($i == 79)
                       {
                          if($rollno == "79")
                         {
                             echo "<option value='79' label='79' selected='selected'>79</option>";     
                         }
                         else
                         {
                            echo "<option value='79' label='79'>79</option>";
                         }
                       }
                       else if($i == 80)
                       {
                          if($rollno == "80")
                         {
                             echo "<option value='80' label='80' selected='selected'>80</option>";     
                         }
                         else
                         {
                            echo "<option value='80' label='80'>80</option>";
                         }
                       }
                       
                       else if($i == 81)
                       {
                          if($rollno == "81")
                         {
                             echo "<option value='81' label='81' selected='selected'>81</option>";     
                         }
                         else
                         {
                            echo "<option value='81' label='81'>81</option>";
                         }
                       }
                       else if($i == 82)
                       {
                          if($rollno == "82")
                         {
                             echo "<option value='82' label='82' selected='selected'>82</option>";     
                         }
                         else
                         {
                            echo "<option value='82' label='82'>82</option>";
                         }
                       }
                       else if($i == 83)
                       {
                          if($rollno == "83")
                         {
                             echo "<option value='83' label='83' selected='selected'>83</option>";     
                         }
                         else
                         {
                            echo "<option value='83' label='83'>83</option>";
                         }
                       }
                       else if($i == 84)
                       {
                          if($rollno == "84")
                         {
                             echo "<option value='84' label='84' selected='selected'>84</option>";     
                         }
                         else
                         {
                            echo "<option value='84' label='84'>84</option>";
                         }
                       }
                       else if($i == 85)
                       {
                          if($rollno == "85")
                         {
                             echo "<option value='85' label='85' selected='selected'>85</option>";     
                         }
                         else
                         {
                            echo "<option value='85' label='85'>85</option>";
                         }
                       }
                        else if($i == 86)
                       {
                          if($rollno == "86")
                         {
                             echo "<option value='86' label='86' selected='selected'>86</option>";     
                         }
                         else
                         {
                            echo "<option value='86' label='86'>86</option>";
                         }
                       }
                       else if($i == 87)
                       {
                          if($rollno == "87")
                         {
                             echo "<option value='87' label='87' selected='selected'>87</option>";     
                         }
                         else
                         {
                            echo "<option value='87' label='87'>87</option>";
                         }
                       }
                       else if($i == 88)
                       {
                          if($rollno == "88")
                         {
                             echo "<option value='88' selected='selected'>88</option>";     
                         }
                         else
                         {
                            echo "<option value='88'>88</option>";
                         }
                       }
                       else if($i == 89)
                       {
                          if($rollno == "89")
                         {
                             echo "<option value='89' selected='selected'>89</option>";     
                         }
                         else
                         {
                            echo "<option value='89'>89</option>";
                         }
                       }
                       else if($i == 90)
                       {
                          if($rollno == "90")
                         {
                             echo "<option value='90' selected='selected'>90</option>";     
                         }
                         else
                         {
                            echo "<option value='90'>90</option>";
                         }
                       }
                       else if($i == 91)
                       {
                          if($rollno == "91")
                         {
                             echo "<option value='91' selected='selected'>91</option>";     
                         }
                         else
                         {
                            echo "<option value='91'>91</option>";
                         }
                       }
                       else if($i == 92)
                       {
                          if($rollno == "92")
                         {
                             echo "<option value='92' selected='selected'>92</option>";     
                         }
                         else
                         {
                            echo "<option value='92'>92</option>";
                         }
                       }
                       else if($i == 93)
                       {
                          if($rollno == "93")
                         {
                             echo "<option value='93' selected='selected'>93</option>";     
                         }
                         else
                         {
                            echo "<option value='93'>93</option>";
                         }
                       }
                       else if($i == 94)
                       {
                          if($rollno == "94")
                         {
                             echo "<option value='94' selected='selected'>94</option>";     
                         }
                         else
                         {
                            echo "<option value='94'>94</option>";
                         }
                       }
                       else if($i == 95)
                       {
                          if($rollno == "95")
                         {
                             echo "<option value='95' label='95' selected='selected'>95</option>";     
                         }
                         else
                         {
                            echo "<option value='95' label='95'>95</option>";
                         }
                       }
                       else if($i == 96)
                       {
                          if($rollno == "96")
                         {
                             echo "<option value='96' label='96' selected='selected'>96</option>";     
                         }
                         else
                         {
                            echo "<option value='96' label='96'>96</option>";
                         }
                       }
                       else if($i == 97)
                       {
                          if($rollno == "97")
                         {
                             echo "<option value='97' label='97' selected='selected'>97</option>";     
                         }
                         else
                         {
                            echo "<option value='97' label='97'>97</option>";
                         }
                       }
                       
                       else if($i == 98)
                       {
                          if($rollno == "98")
                         {
                             echo "<option value='98' label='98' selected='selected'>98</option>";     
                         }
                         else
                         {
                            echo "<option value='98' label='98'>98</option>";
                         }
                       }
                       else if($i == 99)
                       {
                          if($rollno == "99")
                         {
                             echo "<option value='99' label='99' selected='selected'>99</option>";     
                         }
                         else
                         {
                            echo "<option value='99' label='99'>99</option>";
                         }
                       }
                       else if($i == 100)
                       {
                          if($rollno == "100")
                         {
                             echo "<option value='100' label='100' selected='selected'>100</option>";     
                         }
                         else
                         {
                            echo "<option value='100' label='100'>100</option>";
                         }
                       }
                       else if($i == 101)
                       {
                          if($rollno == "101")
                         {
                             echo "<option value='101' label='101' selected='selected'>101</option>";     
                         }
                         else
                         {
                            echo "<option value='101' label='101'>101</option>";
                         }
                       }
                       else if($i == 102)
                       {
                          if($rollno == "102")
                         {
                             echo "<option value='102' label='102' selected='selected'>102</option>";     
                         }
                         else
                         {
                            echo "<option value='102' label='102'>102</option>";
                         }
                       }
                        else if($i == 103)
                       {
                          if($rollno == "103")
                         {
                             echo "<option value='103' label='103' selected='selected'>103</option>";     
                         }
                         else
                         {
                            echo "<option value='103' label='103'>103</option>";
                         }
                       }
                       else if($i == 104)
                       {
                          if($rollno == "104")
                         {
                             echo "<option value='104' label='104' selected='selected'>104</option>";     
                         }
                         else
                         {
                            echo "<option value='104' label='104'>104</option>";
                         }
                       }
                        else if($i == 105)
                       {
                          if($rollno == "105")
                         {
                             echo "<option value='105' label='105' selected='selected'>105</option>";     
                         }
                         else
                         {
                            echo "<option value='105' label='105'>105</option>";
                         }
                       }
                       else if($i == 106)
                       {
                          if($rollno == "106")
                         {
                             echo "<option value='106' label='106' selected='selected'>106</option>";     
                         }
                         else
                         {
                            echo "<option value='106' label='106'>106</option>";
                         }
                       }
                       else if($i == 107)
                       {
                          if($rollno == "107")
                         {
                             echo "<option value='107' label='107' selected='selected'>107</option>";     
                         }
                         else
                         {
                            echo "<option value='107' label='107'>107</option>";
                         }
                       }
                       else if($i == 108)
                       {
                          if($rollno == "108")
                         {
                             echo "<option value='108' label='108' selected='selected'>108</option>";     
                         }
                         else
                         {
                            echo "<option value='108' label='108'>108</option>";
                         }
                       }
                       else if($i == 109)
                       {
                          if($rollno == "109")
                         {
                             echo "<option value='109' label='109' selected='selected'>109</option>";     
                         }
                         else
                         {
                            echo "<option value='109' label='109'>109</option>";
                         }
                       }
                       
                       else if($i == 110)
                       {
                          if($rollno == "110")
                         {
                             echo "<option value='110' label='110' selected='selected'>110</option>";     
                         }
                         else
                         {
                            echo "<option value='110' label='110'>110</option>";
                         }
                       }
                       else if($i == 111)
                       {
                          if($rollno == "111")
                         {
                             echo "<option value='111' label='111' selected='selected'>111</option>";     
                         }
                         else
                         {
                            echo "<option value='111' label='111'>111</option>";
                         }
                       }
                       else if($i == 112)
                       {
                          if($rollno == "112")
                         {
                             echo "<option value='112' label='112' selected='selected'>112</option>";     
                         }
                         else
                         {
                            echo "<option value='112' label='112'>112</option>";
                         }
                       }
                       else if($i == 113)
                       {
                          if($rollno == "113")
                         {
                             echo "<option value='113' label='113' selected='selected'>113</option>";     
                         }
                         else
                         {
                            echo "<option value='113' label='113'>113</option>";
                         }
                       }
                       else if($i == 114)
                       {
                          if($rollno == "114")
                         {
                             echo "<option value='114' label='114' selected='selected'>114</option>";     
                         }
                         else
                         {
                            echo "<option value='114' label='114'>114</option>";
                         }
                       }
                        else if($i == 115)
                       {
                          if($rollno == "115")
                         {
                             echo "<option value='115' label='115' selected='selected'>115</option>";     
                         }
                         else
                         {
                            echo "<option value='115' label='115'>115</option>";
                         }
                       }
                       else if($i == 116)
                       {
                          if($rollno == "116")
                         {
                             echo "<option value='116' label='116' selected='selected'>116</option>";     
                         }
                         else
                         {
                            echo "<option value='116' label='116'>116</option>";
                         }
                       }
                       else if($i == 117)
                       {
                          if($rollno == "117")
                         {
                             echo "<option value='117' label='117' selected='selected'>117</option>";     
                         }
                         else
                         {
                            echo "<option value='117' label='117'>117</option>";
                         }
                       }
                        else if($i == 118)
                       {
                          if($rollno == "118")
                         {
                             echo "<option value='118' label='118' selected='selected'>118</option>";     
                         }
                         else
                         {
                            echo "<option value='118' label='118'>118</option>";
                         }
                       }
                       else if($i == 119)
                       {
                          if($rollno == "119")
                         {
                             echo "<option value='119' label='119' selected='selected'>119</option>";     
                         }
                         else
                         {
                            echo "<option value='119' label='119'>119</option>";
                         }
                       }
                       else if($i == 120)
                       {
                          if($rollno == "120")
                         {
                             echo "<option value='120' selected='selected'>120</option>";     
                         }
                         else
                         {
                            echo "<option value='120'>120</option>";
                         }
                       }
                       else if($i == 121)
                       {
                          if($rollno == "121")
                         {
                             echo "<option value='121' selected='selected'>121</option>";     
                         }
                         else
                         {
                            echo "<option value='121'>121</option>";
                         }
                       }
                       else if($i == 122)
                       {
                          if($rollno == "122")
                         {
                             echo "<option value='122' selected='selected'>122</option>";     
                         }
                         else
                         {
                            echo "<option value='122'>122</option>";
                         }
                       }
                       else if($i == 123)
                       {
                          if($rollno == "123")
                         {
                             echo "<option value='123' selected='selected'>123</option>";     
                         }
                         else
                         {
                            echo "<option value='123'>123</option>";
                         }
                       }
                       else if($i == 124)
                       {
                          if($rollno == "124")
                         {
                             echo "<option value='124' selected='selected'>124</option>";     
                         }
                         else
                         {
                            echo "<option value='124'>124</option>";
                         }
                       }
                       else if($i == 125)
                       {
                          if($rollno == "125")
                         {
                             echo "<option value='125' selected='selected'>125</option>";     
                         }
                         else
                         {
                            echo "<option value='125'>125</option>";
                         }
                       }
                       else if($i == 126)
                       {
                          if($rollno == "126")
                         {
                             echo "<option value='126' selected='selected'>126</option>";     
                         }
                         else
                         {
                            echo "<option value='126'>126</option>";
                         }
                       }
                       else if($i == 127)
                       {
                          if($rollno == "127")
                         {
                             echo "<option value='127' label='127' selected='selected'>127</option>";     
                         }
                         else
                         {
                            echo "<option value='127' label='127'>127</option>";
                         }
                       }
                       else if($i == 128)
                       {
                          if($rollno == "128")
                         {
                             echo "<option value='128' label='128' selected='selected'>128</option>";     
                         }
                         else
                         {
                            echo "<option value='128' label='128'>128</option>";
                         }
                       }
                       else if($i == 129)
                       {
                          if($rollno == "129")
                         {
                             echo "<option value='129' label='129' selected='selected'>129</option>";     
                         }
                         else
                         {
                            echo "<option value='129' label='129'>129</option>";
                         }
                       }
                       
                       else if($i == 130)
                       {
                          if($rollno == "130")
                         {
                             echo "<option value='130' label='130' selected='selected'>130</option>";     
                         }
                         else
                         {
                            echo "<option value='130' label='130'>130</option>";
                         }
                       }
                       else if($i == 131)
                       {
                          if($rollno == "131")
                         {
                             echo "<option value='131' label='131' selected='selected'>131</option>";     
                         }
                         else
                         {
                            echo "<option value='131' label='131'>131</option>";
                         }
                       }
                       else if($i == 132)
                       {
                          if($rollno == "132")
                         {
                             echo "<option value='132' label='132' selected='selected'>132</option>";     
                         }
                         else
                         {
                            echo "<option value='132' label='132'>132</option>";
                         }
                       }
                       else if($i == 133)
                       {
                          if($rollno == "133")
                         {
                             echo "<option value='133' label='133' selected='selected'>133</option>";     
                         }
                         else
                         {
                            echo "<option value='133' label='133'>133</option>";
                         }
                       }
                       else if($i == 134)
                       {
                          if($rollno == "134")
                         {
                             echo "<option value='134' label='134' selected='selected'>134</option>";     
                         }
                         else
                         {
                            echo "<option value='134' label='134'>134</option>";
                         }
                       }
                        else if($i == 135)
                       {
                          if($rollno == "135")
                         {
                             echo "<option value='135' label='135' selected='selected'>135</option>";     
                         }
                         else
                         {
                            echo "<option value='135' label='135'>135</option>";
                         }
                       }
                       else if($i == 136)
                       {
                          if($rollno == "136")
                         {
                             echo "<option value='136' label='136' selected='selected'>136</option>";     
                         }
                         else
                         {
                            echo "<option value='136' label='136'>136</option>";
                         }
                       }
                        else if($i == 137)
                       {
                          if($rollno == "137")
                         {
                             echo "<option value='137' label='137' selected='selected'>137</option>";     
                         }
                         else
                         {
                            echo "<option value='137' label='137'>137</option>";
                         }
                       }
                       else if($i == 138)

                       {
                          if($rollno == "138")
                         {
                             echo "<option value='138' label='138' selected='selected'>138</option>";     
                         }
                         else
                         {
                            echo "<option value='138' label='138'>138</option>";
                         }
                       }
                       else if($i == 139)
                       {
                          if($rollno == "139")
                         {
                             echo "<option value='139' label='139' selected='selected'>139</option>";     
                         }
                         else
                         {
                            echo "<option value='139' label='139'>139</option>";
                         }
                       }
                       else if($i == 140)
                       {
                          if($rollno == "140")
                         {
                             echo "<option value='140' label='140' selected='selected'>140</option>";     
                         }
                         else
                         {
                            echo "<option value='140' label='140'>140</option>";
                         }
                       }
                       else if($i == 141)
                       {
                          if($rollno == "141")
                         {
                             echo "<option value='141' label='141' selected='selected'>141</option>";     
                         }
                         else
                         {
                            echo "<option value='141' label='141'>141</option>";
                         }
                       }
                       
                       else if($i == 142)
                       {
                          if($rollno == "142")
                         {
                             echo "<option value='142' label='142' selected='selected'>142</option>";     
                         }
                         else
                         {
                            echo "<option value='142' label='142'>142</option>";
                         }
                       }
                       else if($i == 143)
                       {
                          if($rollno == "143")
                         {
                             echo "<option value='143' label='143' selected='selected'>143</option>";     
                         }
                         else
                         {
                            echo "<option value='143' label='143'>143</option>";
                         }
                       }
                       else if($i == 144)
                       {
                          if($rollno == "144")
                         {
                             echo "<option value='144' label='144' selected='selected'>144</option>";     
                         }
                         else
                         {
                            echo "<option value='144' label='144'>144</option>";
                         }
                       }
                       else if($i == 145)
                       {
                          if($rollno == "145")
                         {
                             echo "<option value='145' label='145' selected='selected'>145</option>";     
                         }
                         else
                         {
                            echo "<option value='145' label='145'>145</option>";
                         }
                       }
                       else if($i == 146)
                       {
                          if($rollno == "146")
                         {
                             echo "<option value='146' label='146' selected='selected'>146</option>";     
                         }
                         else
                         {
                            echo "<option value='146' label='146'>146</option>";
                         }
                       }
                        else if($i == 147)
                       {
                          if($rollno == "147")
                         {
                             echo "<option value='147' label='147' selected='selected'>147</option>";     
                         }
                         else
                         {
                            echo "<option value='147' label='147'>147</option>";
                         }
                       }
                       else if($i == 148)
                       {
                          if($rollno == "148")
                         {
                             echo "<option value='148' label='148' selected='selected'>148</option>";     
                         }
                         else
                         {
                            echo "<option value='148' label='148'>148</option>";
                         }
                       }
                       else if($i == 149)
                       {
                          if($rollno == "149")
                         {
                             echo "<option value='149' label='149' selected='selected'>149</option>";     
                         }
                         else
                         {
                            echo "<option value='149' label='149'>149</option>";
                         }
                       }
                       else if($i == 150)
                       {
                          if($rollno == "150")
                         {
                             echo "<option value='150' label='150' selected='selected'>150</option>";     
                         }
                         else
                         {
                            echo "<option value='150' label='150'>150</option>";
                         }
                       }
                       else if($i == 151)
                       {
                          if($rollno == "151")
                         {
                             echo "<option value='151' label='151' selected='selected'>151</option>";     
                         }
                         else
                         {
                            echo "<option value='151' label='151'>151</option>";
                         }
                       }
                       else if($i == 152)
                       {
                          if($rollno == "152")
                         {
                             echo "<option value='152' label='152' selected='selected'>152</option>";     
                         }
                         else
                         {
                            echo "<option value='152' label='152'>152</option>";
                         }
                       }
                       else if($i == 153)
                       {
                          if($rollno == "153")
                         {
                             echo "<option value='153' label='153' selected='selected'>153</option>";     
                         }
                         else
                         {
                            echo "<option value='153' label='153'>153</option>";
                         }
                       }
                        else if($i == 154)
                       {
                          if($rollno == "154")
                         {
                             echo "<option value='154' label='154' selected='selected'>154</option>";     
                         }
                         else
                         {
                            echo "<option value='154' label='154'>154</option>";
                         }
                       }
                                               
                       else
                       {
                          if($rollno == "155")
                         {
                             echo "<option value='155' label='155' selected='selected'>155</option>";     
                         }
                         else
                         {
                            echo "<option value='155' label='155'>155</option>";
                         }
                       }        
                      $i++;
                     }
                     
  		   
    		     echo "</select><br/><br/>";

                      echo "<b> Class - </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name='class' style='font-size:12px;color:#444;'>";
                     $i = 1;
                     while($i < 16)
                     {
                       if($i == 1)
                       {
                         if($b2 == "Nursery")
                         {
                             echo "<option value='Nursery' selected='selected'>Nursery</option>";     
                         }
                         else
                         {
                            echo "<option value='Nursery'>Nursery</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($class == "L.K.G")
                         {
                             echo "<option value='L.K.G' selected='selected'>L.K.G</option>";     
                         }
                         else
                         {
                            echo "<option value='L.K.G'>L.K.G</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($class == "U.K.G")
                         {
                             echo "<option value='U.K.G' selected='selected'>U.K.G</option>";     
                         }
                         else
                         {
                            echo "<option value='U.K.G'>U.K.G</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($class == "1")
                         {
                             echo "<option value='1' selected='selected'>1</option>";     
                         }
                         else
                         {
                            echo "<option value='1'>1</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($class == "2")
                         {
                             echo "<option value='2' selected='selected'>2</option>";     
                         }
                         else
                         {
                            echo "<option value='2'>2</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($class == "3")
                         {
                             echo "<option value='3' selected='selected'>3</option>";     
                         }
                         else
                         {
                            echo "<option value='3'>3</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($class == "4")
                         {
                             echo "<option value='4' selected='selected'>4</option>";     
                         }
                         else
                         {
                            echo "<option value='4'>4</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($class == "5")
                         {
                             echo "<option value='5' selected='selected'>5</option>";     
                         }
                         else
                         {
                            echo "<option value='5'>5</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($class == "6")
                         {
                             echo "<option value='6' selected='selected'>6</option>";     
                         }
                         else
                         {
                            echo "<option value='6'>6</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($class == "7")
                         {
                             echo "<option value='7' selected='selected'>7</option>";     
                         }
                         else
                         {
                            echo "<option value='7'>7</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($class == "8")
                         {
                             echo "<option value='8' selected='selected'>8</option>";     
                         }
                         else
                         {
                            echo "<option value='8'>8</option>";
                         }
                       }
                       else if($i == 12)
                       {
                          if($class == "9")
                         {
                             echo "<option value='9' label='9' selected='selected'>9</option>";     
                         }
                         else
                         {
                            echo "<option value='9' label='9'>9</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($class == "10")
                         {
                             echo "<option value='10' label='10' selected='selected'>10</option>";     
                         }
                         else
                         {
                            echo "<option value='10' label='10'>10</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($class == "11")
                         {
                             echo "<option value='11' label='11' selected='selected'>11</option>";     
                         }
                         else
                         {
                            echo "<option value='11' label='11'>11</option>";
                         }
                       }
                       
                       else
                       {
                          if($class == "12")
                         {
                             echo "<option value='12' label='12' selected='selected'>12</option>";     
                         }
                         else
                         {
                            echo "<option value='12' label='12'>12</option>";
                         }
                       }        
                      $i++;
                     }
                     echo "</select><br/><br/>";
                     
                        echo "<b> Section - </b> &nbsp; &nbsp; &nbsp; &nbsp; <select name='section' style='font-size:12px;color:#444;'>";
                     $i = 1;
                     while($i < 16)
                     {
                       if($i == 1)
                       {
                         if($section == "A")
                         {
                             echo "<option value='A' selected='selected'>A</option>";     
                         }
                         else
                         {
                            echo "<option value='A'>A</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($section == "B")
                         {
                             echo "<option value='B' selected='selected'>B</option>";     
                         }
                         else
                         {
                            echo "<option value='B'>B</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($section == "C")
                         {
                             echo "<option value='C' selected='selected'>C</option>";     
                         }
                         else
                         {
                            echo "<option value='C'>C</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($section == "D")
                         {
                             echo "<option value='D' selected='selected'>D</option>";     
                         }
                         else
                         {
                            echo "<option value='D'>D</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($section == "E")
                         {
                             echo "<option value='E' selected='selected'>E</option>";     
                         }
                         else
                         {
                            echo "<option value='E'>E</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($section == "F")
                         {
                             echo "<option value='F' selected='selected'>F</option>";     
                         }
                         else
                         {
                            echo "<option value='F'>F</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($section == "G")
                         {
                             echo "<option value='G' selected='selected'>G</option>";     
                         }
                         else
                         {
                            echo "<option value='G'>G</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($section == "H")
                         {
                             echo "<option value='H' selected='selected'>H</option>";     
                         }
                         else
                         {
                            echo "<option value='H'>H</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($section == "I")
                         {
                             echo "<option value='I' selected='selected'>I</option>";     
                         }
                         else
                         {
                            echo "<option value='I'>I</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($section == "J")
                         {
                             echo "<option value='J' selected='selected'>J</option>";     
                         }
                         else
                         {
                            echo "<option value='J'>J</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($section == "K")
                         {
                             echo "<option value='K' selected='selected'>K</option>";     
                         }
                         else
                         {
                            echo "<option value='K'>K</option>";
                         }
                       }
                       else if($i == 12)
                       {
                          if($section == "L")
                         {
                             echo "<option value='L' label='L' selected='selected'>L</option>";     
                         }
                         else
                         {
                            echo "<option value='L' label='L'>L</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($section == "M")
                         {
                             echo "<option value='M' label='M' selected='selected'>M</option>";     
                         }
                         else
                         {
                            echo "<option value='M' label='M'>M</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($section == "N")
                         {
                             echo "<option value='N' label='N' selected='selected'>N</option>";     
                         }
                         else
                         {
                            echo "<option value='N' label='N'>N</option>";
                         }
                       }
                       
                       else
                       {
                          if($section == "O")
                         {
                             echo "<option value='O' label='O' selected='selected'>O</option>";     
                         }
                         else
                         {
                            echo "<option value='O' label='O'>O</option>";
                         }
                       }        
                      $i++;
                     }
                     echo "</select><br/><br/>";

 
                               echo "<b> Birth - </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Day - <select name='day' style='font-size:12px;color:#444;'>";
              
                     $i = 1;
                     while($i < 32)
                     {
                       if($i == 1)
                       {
                         if($b1 == "1")
                         {
                             echo "<option value='1' selected='selected'>1</option>";     
                         }
                         else
                         {
                            echo "<option value='1'>1</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($b1 == "2")
                         {
                             echo "<option value='2' selected='selected'>2</option>";     
                         }
                         else
                         {
                            echo "<option value='2'>2</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($b1 == "3")
                         {
                             echo "<option value='3' selected='selected'>3</option>";     
                         }
                         else
                         {
                            echo "<option value='3'>3</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($b1 == "4")
                         {
                             echo "<option value='4' selected='selected'>4</option>";     
                         }
                         else
                         {
                            echo "<option value='4'>4</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($b1 == "5")
                         {
                             echo "<option value='5' selected='selected'>5</option>";     
                         }
                         else
                         {
                            echo "<option value='5'>5</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($b1 == "6")
                         {
                             echo "<option value='6' selected='selected'>6</option>";     
                         }
                         else
                         {
                            echo "<option value='6'>6</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($b1 == "7")
                         {
                             echo "<option value='7' selected='selected'>7</option>";     
                         }
                         else
                         {
                            echo "<option value='7'>7</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($b1 == "8")
                         {
                             echo "<option value='8' selected='selected'>8</option>";     
                         }
                         else
                         {
                            echo "<option value='8'>8</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($b1 == "9")
                         {
                             echo "<option value='9' label='9' selected='selected'>9</option>";     
                         }
                         else
                         {
                            echo "<option value='9' label='9'>9</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($b1 == "10")
                         {
                             echo "<option value='10' label='10' selected='selected'>10</option>";     
                         }
                         else
                         {
                            echo "<option value='10' label='10'>10</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($b1 == "11")
                         {
                             echo "<option value='11' label='11' selected='selected'>11</option>";     
                         }
                         else
                         {
                            echo "<option value='11' label='11'>11</option>";
                         }
                       }
                       
                       else if($i == 12)
                       {
                          if($b1 == "12")
                         {
                             echo "<option value='12' label='12' selected='selected'>12</option>";     
                         }
                         else
                         {
                            echo "<option value='12' label='12'>12</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($b1 == "13")
                         {
                             echo "<option value='13' label='13' selected='selected'>13</option>";     
                         }
                         else
                         {
                            echo "<option value='13' label='13'>13</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($b1 == "14")
                         {
                             echo "<option value='14' label='14' selected='selected'>14</option>";     
                         }
                         else
                         {
                            echo "<option value='14' label='14'>14</option>";
                         }
                       }
                       else if($i == 15)
                       {
                          if($b1 == "15")
                         {
                             echo "<option value='15' label='15' selected='selected'>15</option>";     
                         }
                         else
                         {
                            echo "<option value='15' label='15'>15</option>";
                         }
                       }
                       else if($i == 16)
                       {
                          if($b1 == "16")
                         {
                             echo "<option value='16' label='16' selected='selected'>16</option>";     
                         }
                         else
                         {
                            echo "<option value='16' label='16'>16</option>";
                         }
                       }
                        else if($i == 17)
                       {
                          if($b1 == "17")
                         {
                             echo "<option value='17' label='17' selected='selected'>17</option>";     
                         }
                         else
                         {
                            echo "<option value='17' label='17'>17</option>";
                         }
                       }
                       else if($i == 18)
                       {
                          if($b1 == "18")
                         {
                             echo "<option value='18' label='18' selected='selected'>18</option>";     
                         }
                         else
                         {
                            echo "<option value='18' label='18'>18</option>";
                         }
                       }
                        else if($i == 19)
                       {
                          if($b1 == "19")
                         {
                             echo "<option value='19' label='19' selected='selected'>19</option>";     
                         }
                         else
                         {
                            echo "<option value='19' label='19'>19</option>";
                         }
                       }
                       else if($i == 20)
                       {
                          if($b1 == "20")
                         {
                             echo "<option value='20' label='20' selected='selected'>20</option>";     
                         }
                         else
                         {
                            echo "<option value='20' label='20'>20</option>";
                         }
                       }
                       else if($i == 21)
                       {
                          if($b1 == "21")
                         {
                             echo "<option value='21' label='21' selected='selected'>21</option>";     
                         }
                         else
                         {
                            echo "<option value='21' label='21'>21</option>";
                         }
                       }
                       else if($i == 22)
                       {
                          if($b1 == "22")
                         {
                             echo "<option value='22' label='22' selected='selected'>22</option>";     
                         }
                         else
                         {
                            echo "<option value='22' label='22'>22</option>";
                         }
                       }
                       else if($i == 23)
                       {
                          if($b1 == "23")
                         {
                             echo "<option value='23' label='23' selected='selected'>23</option>";     
                         }
                         else
                         {
                            echo "<option value='23' label='23'>23</option>";
                         }
                       }
                       
                       else if($i == 24)
                       {
                          if($b1 == "24")
                         {
                             echo "<option value='24' label='24' selected='selected'>24</option>";     
                         }
                         else
                         {
                            echo "<option value='24' label='24'>24</option>";
                         }
                       }
                       else if($i == 25)
                       {
                          if($b1 == "25")
                         {
                             echo "<option value='25' label='25' selected='selected'>25</option>";     
                         }
                         else
                         {
                            echo "<option value='25' label='25'>25</option>";
                         }
                       }
                       else if($i == 26)
                       {
                          if($b1 == "26")
                         {
                             echo "<option value='26' label='26' selected='selected'>26</option>";     
                         }
                         else
                         {
                            echo "<option value='26' label='26'>26</option>";
                         }
                       }
                       else if($i == 27)
                       {
                          if($b1 == "27")
                         {
                             echo "<option value='27' label='27' selected='selected'>27</option>";     
                         }
                         else
                         {
                            echo "<option value='27' label='27'>27</option>";
                         }
                       }
                       else if($i == 28)
                       {
                          if($b1 == "28")
                         {
                             echo "<option value='28' label='28' selected='selected'>28</option>";     
                         }
                         else
                         {
                            echo "<option value='28' label='28'>28</option>";
                         }
                       }
                        else if($i == 29)
                       {
                          if($b1 == "29")
                         {
                             echo "<option value='29' label='29' selected='selected'>29</option>";     
                         }
                         else
                         {
                            echo "<option value='29' label='29'>29</option>";
                         }
                       }
                       else if($i == 30)
                       {
                          if($b1 == "30")
                         {
                             echo "<option value='30' label='30' selected='selected'>30</option>";     
                         }
                         else
                         {
                            echo "<option value='30' label='30'>30</option>";
                         }
                       }
                       
                       else
                       {
                          if($b1 == "31")
                         {
                             echo "<option value='31' label='31' selected='selected'>31</option>";     
                         }
                         else
                         {
                            echo "<option value='31' label='31'>31</option>";
                         }
                       }        
                      $i++;
                     }
                     
  		   
    		     echo "</select> Month - <select name='month' style='font-size:12px;color:#444;'>";
                                  $i = 1;
                     while($i < 13)
                     {
                       if($i == 1)
                       {
                         if($b2 == "1")
                         {
                             echo "<option value='1' selected='selected'>1</option>";     
                         }
                         else
                         {
                            echo "<option value='1'>1</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($b2 == "2")
                         {
                             echo "<option value='2' selected='selected'>2</option>";     
                         }
                         else
                         {
                            echo "<option value='2'>2</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($b2 == "3")
                         {
                             echo "<option value='3' selected='selected'>3</option>";     
                         }
                         else
                         {
                            echo "<option value='3'>3</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($b2 == "4")
                         {
                             echo "<option value='4' selected='selected'>4</option>";     
                         }
                         else
                         {
                            echo "<option value='4'>4</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($b2 == "5")
                         {
                             echo "<option value='5' selected='selected'>5</option>";     
                         }
                         else
                         {
                            echo "<option value='5'>5</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($b2 == "6")
                         {
                             echo "<option value='6' selected='selected'>6</option>";     
                         }
                         else
                         {
                            echo "<option value='6'>6</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($b2 == "7")
                         {
                             echo "<option value='7' selected='selected'>7</option>";     
                         }
                         else
                         {
                            echo "<option value='7'>7</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($b2 == "8")
                         {
                             echo "<option value='8' selected='selected'>8</option>";     
                         }
                         else
                         {
                            echo "<option value='8'>8</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($b2 == "9")
                         {
                             echo "<option value='9' label='9' selected='selected'>9</option>";     
                         }
                         else
                         {
                            echo "<option value='9' label='9'>9</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($b2 == "10")
                         {
                             echo "<option value='10' label='10' selected='selected'>10</option>";     
                         }
                         else
                         {
                            echo "<option value='10' label='10'>10</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($b2 == "11")
                         {
                             echo "<option value='11' label='11' selected='selected'>11</option>";     
                         }
                         else
                         {
                            echo "<option value='11' label='11'>11</option>";
                         }
                       }
                       
                       else
                       {
                          if($b2 == "12")
                         {
                             echo "<option value='12' label='12' selected='selected'>12</option>";     
                         }
                         else
                         {
                            echo "<option value='12' label='12'>12</option>";
                         }
                       }        
                      $i++;
                     }
                     echo "</select> Year - <select name='year' style='font-size:12px;color:#444;'>";       
                         
                    $i = 1;
                     while($i < 50)
                     {
                       
                       if($i == 1)
                       {
                         if($b3 == "2013")
                         {
                             echo "<option value='2013' selected='selected'>2013</option>";     
                         }
                         else
                         {
                            echo "<option value='2013'>2013</option>";
                         }
                       }
                       else if($i == 2)
                       {
                          if($b3 == "2012")
                         {
                             echo "<option value='2012' label='2012' selected='selected'>2012</option>";     
                         }
                         else
                         {
                            echo "<option value='2012' label='2012'>2012</option>";
                         }
                       }
                       else if($i == 3)
                       {
                          if($b3 == "2011")
                         {
                             echo "<option value='2011' label='2011' selected='selected'>2011</option>";     
                         }
                         else
                         {
                            echo "<option value='2011' label='2011'>2011</option>";
                         }
                       }
                       else if($i == 4)
                       {
                          if($b3 == "2010")
                         {
                             echo "<option value='2010' label='2010' selected='selected'>2010</option>";     
                         }
                         else
                         {
                            echo "<option value='2010' label='2010'>2010</option>";
                         }
                       }
                       else if($i == 5)
                       {
                          if($b3 == "2009")
                         {
                             echo "<option value='2009' label='2009' selected='selected'>2009</option>";     
                         }
                         else
                         {
                            echo "<option value='2009' label='2009'>2009</option>";
                         }
                       }
                       else if($i == 6)
                       {
                          if($b3 == "2008")
                         {
                             echo "<option value='2008' label='2008' selected='selected'>2008</option>";     
                         }
                         else
                         {
                            echo "<option value='2008' label='2008'>2008</option>";
                         }
                       }
                       else if($i == 7)
                       {
                          if($b3 == "2007")
                         {
                             echo "<option value='2007' label='2007' selected='selected'>2007</option>";     
                         }
                         else
                         {
                            echo "<option value='2007' label='2007'>2007</option>";
                         }
                       }
                       else if($i == 8)
                       {
                          if($b3 == "2006")
                         {
                             echo "<option value='2006' label='2006' selected='selected'>2006</option>";     
                         }
                         else
                         {
                            echo "<option value='2006' label='2006'>2006</option>";
                         }
                       }
                       else if($i == 9)
                       {
                          if($b3 == "2005")
                         {
                             echo "<option value='2005' label='2005' selected='selected'>2005</option>";     
                         }
                         else
                         {
                            echo "<option value='2005' label='2005'>2005</option>";
                         }
                       }
                       else if($i == 10)
                       {
                          if($b3 == "2004")
                         {
                             echo "<option value='2004' label='2004' selected='selected'>2004</option>";     
                         }
                         else
                         {
                            echo "<option value='2004' label='2004'>2004</option>";
                         }
                       }
                       else if($i == 11)
                       {
                          if($b3 == "2003")
                         {
                             echo "<option value='2003' label='2003' selected='selected'>2003</option>";     
                         }
                         else
                         {
                            echo "<option value='2003' label='2003'>2003</option>";
                         }
                       }
                       else if($i == 12)
                       {
                          if($b3 == "2002")
                         {
                             echo "<option value='2002' label='2002' selected='selected'>2002</option>";     
                         }
                         else
                         {
                            echo "<option value='2002' label='2002'>2002</option>";
                         }
                       }
                       else if($i == 13)
                       {
                          if($b3 == "2001")
                         {
                             echo "<option value='2001' label='2001' selected='selected'>2001</option>";     
                         }
                         else
                         {
                            echo "<option value='2001' label='2001'>2001</option>";
                         }
                       }
                       else if($i == 14)
                       {
                          if($b3 == "2000")
                         {
                             echo "<option value='2000' label='2000' selected='selected'>2000</option>";     
                         }
                         else
                         {
                            echo "<option value='2000' label='2000'>2000</option>";
                         }
                       }
                       else if($i == 15)
                       {
                          if($b3 == "1999")
                         {
                             echo "<option value='1999' label='1999' selected='selected'>1999</option>";     
                         }
                         else
                         {
                            echo "<option value='1999' label='1999'>1999</option>";
                         }
                       }
                       else if($i == 16)
                       {
                          if($b3 == "1998")
                         {
                             echo "<option value='1998' label='1998' selected='selected'>1998</option>";     
                         }
                         else
                         {
                            echo "<option value='1998' label='1998'>1998</option>";
                         }
                       }
                       else if($i == 17)
                       {
                          if($b3 == "1997")
                         {
                             echo "<option value='1997' label='1997' selected='selected'>1997</option>";     
                         }
                         else
                         {
                            echo "<option value='1997' label='1997'>1997</option>";
                         }
                       }
                       else if($i == 18)
                       {
                          if($b3 == "1996")
                         {
                             echo "<option value='1996' label='1996' selected='selected'>1996</option>";     
                         }
                         else
                         {
                            echo "<option value='1996' label='1996'>1996</option>";
                         }
                       }
                       else if($i == 19)
                       {
                          if($b3 == "1995")
                         {
                             echo "<option value='1995' label='1995' selected='selected'>1995</option>";     
                         }
                         else
                         {
                            echo "<option value='1995' label='1995'>1995</option>";
                         }
                       }
                       else if($i == 20)
                       {
                          if($b3 == "1994")
                         {
                             echo "<option value='1994' selected='selected'>1994</option>";     
                         }
                         else
                         {
                            echo "<option value='1994'>1994</option>";
                         }
                       }
                       else if($i == 21)
                       {
                          if($b3 == "1993")
                         {
                             echo "<option value='1993' selected='selected'>1993</option>";     
                         }
                         else
                         {
                            echo "<option value='1993'>1993</option>";
                         }
                       }
                       else if($i == 22)
                       {
                          if($b3 == "1992")
                         {
                             echo "<option value='1992' selected='selected'>1992</option>";     
                         }
                         else
                         {
                            echo "<option value='1992'>1992</option>";
                         }
                       }
                       else if($i == 23)
                       {
                          if($b3 == "1991")
                         {
                             echo "<option value='1991' selected='selected'>1991</option>";     
                         }
                         else
                         {
                            echo "<option value='1991'>1991</option>";
                         }
                       }
                       else if($i == 24)
                       {
                          if($b3 == "1990")
                         {
                             echo "<option value='1990' selected='selected'>1990</option>";     
                         }
                         else
                         {
                            echo "<option value='1990'>1990</option>";
                         }
                       }
                       else if($i == 25)
                       {
                          if($b3 == "1989")
                         {
                             echo "<option value='1989' selected='selected'>1989</option>";     
                         }
                         else
                         {
                            echo "<option value='1989'>1989</option>";
                         }
                       }
                       else if($i == 26)
                       {
                          if($b3 == "1988")
                         {
                             echo "<option value='1988' selected='selected'>1988</option>";     
                         }
                         else
                         {
                            echo "<option value='1988'>1988</option>";
                         }
                       }
                       else if($i == 27)
                       {
                          if($b3 == "1987")
                         {
                             echo "<option value='1987' label='1987' selected='selected'>1987</option>";     
                         }
                         else
                         {
                            echo "<option value='1987' label='1987'>1987</option>";
                         }
                       }
                       else if($i == 28)
                       {
                          if($b3 == "1986")
                         {
                             echo "<option value='1986' label='1986' selected='selected'>1986</option>";     
                         }
                         else
                         {
                            echo "<option value='1986' label='1986'>1986</option>";
                         }
                       }
                       else if($i == 29)
                       {
                          if($b3 == "1985")
                         {
                             echo "<option value='1985' label='1985' selected='selected'>1985</option>";     
                         }
                         else
                         {
                            echo "<option value='1985' label='1985'>1985</option>";
                         }
                       }
                       
                       else if($i == 30)
                       {
                          if($b3 == "1984")
                         {
                             echo "<option value='1984' label='1984' selected='selected'>1984</option>";     
                         }
                         else
                         {
                            echo "<option value='1984' label='1984'>1984</option>";
                         }
                       }
                       else if($i == 31)
                       {
                          if($b3 == "1983")
                         {
                             echo "<option value='1983' label='1983' selected='selected'>1983</option>";     
                         }
                         else
                         {
                            echo "<option value='1983' label='1983'>1983</option>";
                         }
                       }
                       else if($i == 32)
                       {
                          if($b3 == "1982")
                         {
                             echo "<option value='1982' label='1982' selected='selected'>1982</option>";     
                         }
                         else
                         {
                            echo "<option value='1982' label='1982'>1982</option>";
                         }
                       }
                       else if($i == 33)
                       {
                          if($b3 == "1981")
                         {
                             echo "<option value='1981' label='1981' selected='selected'>1981</option>";     
                         }
                         else
                         {
                            echo "<option value='1981' label='1981'>1981</option>";
                         }
                       }
                       else if($i == 34)
                       {
                          if($b3 == "1980")
                         {
                             echo "<option value='1980' label='1980' selected='selected'>1980</option>";     
                         }
                         else
                         {
                            echo "<option value='1980' label='1980'>1980</option>";
                         }
                       }
                        else if($i == 35)
                       {
                          if($b3 == "1979")
                         {
                             echo "<option value='1979' label='1979' selected='selected'>1979</option>";     
                         }
                         else
                         {
                            echo "<option value='1979' label='1979'>1979</option>";
                         }
                       }
                       else if($i == 36)
                       {
                          if($b3 == "1978")
                         {
                             echo "<option value='1978' label='1978' selected='selected'>1978</option>";     
                         }
                         else
                         {
                            echo "<option value='1978' label='1978'>1978</option>";
                         }
                       }
                        else if($i == 37)
                       {
                          if($b3 == "1977")
                         {
                             echo "<option value='1977' label='1977' selected='selected'>1977</option>";     
                         }
                         else
                         {
                            echo "<option value='1977' label='1977'>1977</option>";
                         }
                       }
                       else if($i == 38)
                       {
                          if($b3 == "1976")
                         {
                             echo "<option value='1976' label='1976' selected='selected'>1976</option>";     
                         }
                         else
                         {
                            echo "<option value='1976' label='1976'>1976</option>";
                         }
                       }
                       else if($i == 39)
                       {
                          if($b3 == "1975")
                         {
                             echo "<option value='1975' label='1975' selected='selected'>1975</option>";     
                         }
                         else
                         {
                            echo "<option value='1975' label='1975'>1975</option>";
                         }
                       }
                       else if($i == 40)
                       {
                          if($b3 == "1974")
                         {
                             echo "<option value='1974' label='1974' selected='selected'>1974</option>";     
                         }
                         else
                         {
                            echo "<option value='1974' label='1974'>1974</option>";
                         }
                       }
                       else if($i == 41)
                       {
                          if($b3 == "1973")
                         {
                             echo "<option value='1973' label='1973' selected='selected'>1973</option>";     
                         }
                         else
                         {
                            echo "<option value='1973' label='1973'>1973</option>";
                         }
                       }
                       
                       else if($i == 42)
                       {
                          if($b3 == "1972")
                         {
                             echo "<option value='1972' label='1972' selected='selected'>1972</option>";     
                         }
                         else
                         {
                            echo "<option value='1972' label='1972'>1972</option>";
                         }
                       }
                       else if($i == 43)
                       {
                          if($b3 == "1971")
                         {
                             echo "<option value='1971' label='1971' selected='selected'>1971</option>";     
                         }
                         else
                         {
                            echo "<option value='1971' label='1971'>1971</option>";
                         }
                       }
                       else if($i == 44)
                       {
                          if($b3 == "1970")
                         {
                             echo "<option value='1970' label='1970' selected='selected'>1970</option>";     
                         }
                         else
                         {
                            echo "<option value='1970' label='1970'>1970</option>";
                         }
                       }
                       else if($i == 45)
                       {
                          if($b3 == "1969")
                         {
                             echo "<option value='1969' label='1969' selected='selected'>1969</option>";     
                         }
                         else
                         {
                            echo "<option value='1969' label='1969'>1969</option>";
                         }
                       }
                       else if($i == 46)
                       {
                          if($b3 == "1968")
                         {
                             echo "<option value='1968' label='1968' selected='selected'>1968</option>";     
                         }
                         else
                         {
                            echo "<option value='1968' label='1968'>1968</option>";
                         }
                       }
                        else if($i == 47)
                       {
                          if($b3 == "1967")
                         {
                             echo "<option value='1967' label='1967' selected='selected'>1967</option>";     
                         }
                         else
                         {
                            echo "<option value='1967' label='1967'>1967</option>";
                         }
                       }
                       else if($i == 48)
                       {
                          if($b3 == "1966")
                         {
                             echo "<option value='1966' label='1966' selected='selected'>1966</option>";     
                         }
                         else
                         {
                            echo "<option value='1966' label='1966'>1966</option>";
                         }
                       } 
                       
                       else
                       {
                          if($b3 == "1965")
                         {
                             echo "<option value='1965' label='1965' selected='selected'>1965</option>";     
                         }
                         else
                         {
                            echo "<option value='1965' label='1965'>1965</option>";
                         }
                       }        
                      $i++;
                     }              
                                   echo "</select><br/><br/><input type='submit' name='submit' id='submit' value='Update' style='color:white;font-size:14px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
                              </div>
			</div>
</div>		
   &nbsp; <a href='#openModal12$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Delete</a>		
                                               <div id='openModal12$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Are you confirm to delete $name?</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_student_delete_script.php'>
  			<input type='hidden' name='st_id1' value='$id'>
				<input type='submit' name='submit' id='submit' value='Confirm' style='color:white;font-size:16px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>
  &nbsp; <a href='#openModal123$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Update Picture</a>		
                                               <div id='openModal123$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Update $name's Picture</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_student_image_update_script.php' enctype='multipart/form-data'>
  			<input type='hidden' name='st_id1' value='$id'>
                          &nbsp; <label for='file'><b>Picture -</b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type='file' name='image' style='font-size:12px;'><br/><br/>
				<input type='submit' name='submit' id='submit' value='Update' style='color:white;font-size:14px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>
           &nbsp; <a href='#openModal125$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Send Message</a>		
                                               <div id='openModal125$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Send message to $name</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                       <form method='POST' action='user_send_message_script.php'>
  			<input type='hidden' name='st_id2' value='$id'>
                                     <input type='text' name='title2' id='title2' style='color:#444;font-size:14px;width:330px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;' placeholder='Title'><br/><br/>
                           <textarea rows='10' cols='44' name='status2' id='status2' style='-moz-border-radius:5px;border-radius:5px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Description ..'></textarea><br/><br/>
				<input type='submit' name='submit' id='submit' value='Send' style='color:white;font-size:16px;font-weight:bold;border-width:0px;border-style:solid;border-color:#2284a1;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#1A6981;'>
			</form>
				</p>
			</div>
</div>	
     &nbsp; <a href='#openModal127$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Attendance</a>		
                                               <div id='openModal127$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Attendance Record of $name</h3>
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                <b>Delivered - </b> $total2<br/><br/>
                                <b>Attended - </b> $total4<br/><br/>
                                <b>Percentage - </b> $perc %<br/><br/>
				</p>
			</div>
</div>
   &nbsp; <a href='#openModal129$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Marks</a>		
                                               <div id='openModal129$id' class='modalDialog'>
						<div>
                               <div style='height:400px;overflow-y:scroll;overflow-x:hidden;padding:5px;'>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>Marks Record of $name</h3>";
                                 $qu4 = "SELECT * from user_record WHERE st_id = '$id' ORDER by id DESC";
                                 $res4 = mysql_query($qu4);
				echo "<p><hr style='border:0px;height:1px;background:#444;'/><br/>";
                                echo "<table border='1'><tr height='30px'>
                                     
                                    <td width='280px' style='font-size:10px;padding:5px;'>
                                      <b>Title</b>
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Subject</b>
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Category</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Date</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Total</b>
                                    </td>
                                    <td width='50px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>Obtained</b>
                                    </td>                                    
                                    <td width='30px' style='font-size:10px;padding:5px;' valign='top'>
                                      <b>%</b>
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
                                                                 echo "<tr height='30px'>
                                     
                                    <td width='280px' style='font-size:10px;padding:5px;'>
                                      $title
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
                                      $subject
                                    </td>
                                    <td width='70px' style='font-size:10px;padding:5px;' valign='top'>
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
                                echo "</table>";
				echo "</p>
                              </div>
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
<a href="user_view_student.php?curpage=<?php echo ($page-1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>prev</a>
<?php
}
else
{
echo "&nbsp;";
}
if($startrow+showmax<$total)
{?>
<a href="user_view_student.php?curpage=<?php echo ($page+1); ?>" style='background-color:#5898b4;padding:4px;color:#ffffff;text-decoration:none;'>next</a>
<?php
}
echo "</td>
                                       </tr>
                                       </table>";
                                                                ?> 
                                </td>
                                 <td width='2%'>&nbsp;</td>
                                  <td width='26%' valign='top'>
                                  <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Student Record Search
                              </td>
                              </tr>
                              <tr>
                               <?php
                                 $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                 include 'dbconnect.php';
                                 $qu2 = "SELECT class,section from users WHERE id = '$user'";
                                 $res2 = mysql_query($qu2);
                                 $show2 = mysql_fetch_array($res2);
                                 $class1 = $show2['class'];
                                 $section1 = $show2['section'];
                                 ?>
                                <td height='150px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="user_search_student.php" enctype="multipart/form-data" onsubmit="return validate()">
                               <input type='hidden' name='class1' value='<?php echo $class1; ?>'>
                               <input type='hidden' name='section1' value='<?php echo $section1; ?>'>
                                &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Roll Number - </span> &nbsp;<select name="rollno1" style='font-size:12px;color:#444;'>
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
                        <option value="32">32</option>
  			<option value="33">33</option>
  			<option value="34">34</option>
  			<option value="35">35</option>
  			<option value="36">36</option>
  			<option value="37">37</option>
  			<option value="38">38</option>
  			<option value="39">39</option>
  			<option value="40">40</option>
  			<option value="41">41</option>
  			<option value="42">42</option>
  			<option value="43">43</option>
  			<option value="44">44</option>
  			<option value="45">45</option>
  			<option value="46">46</option>
  			<option value="47">47</option>
  			<option value="48">48</option>
  			<option value="49">49</option>
  			<option value="50">50</option>
  			<option value="51">51</option>
  			<option value="52">52</option>
  			<option value="53">53</option>
  			<option value="54">54</option>
  			<option value="55">55</option>
  			<option value="56">56</option>
  			<option value="57">57</option>
  			<option value="58">58</option>
  			<option value="59">59</option>
  			<option value="60">60</option>
  			<option value="61">61</option>
  			<option value="62">62</option>
                        <option value="63">63</option>
  			<option value="64">64</option>
  			<option value="65">65</option>
  			<option value="66">66</option>
  			<option value="67">67</option>
  			<option value="68">68</option>
  			<option value="69">69</option>
  			<option value="70">70</option>
  			<option value="71">71</option>
  			<option value="72">72</option>
  			<option value="73">73</option>
  			<option value="74">74</option>
  			<option value="75">75</option>
  			<option value="76">76</option>
  			<option value="77">77</option>
  			<option value="78">78</option>
  			<option value="79">79</option>
  			<option value="80">80</option>
  			<option value="81">81</option>
  			<option value="82">82</option>
  			<option value="83">83</option>
  			<option value="84">84</option>
  			<option value="85">85</option>
  			<option value="86">86</option>
  			<option value="87">87</option>
  			<option value="88">88</option>
  			<option value="89">89</option>
  			<option value="90">90</option>
  			<option value="91">91</option>
  			<option value="92">92</option>
  			<option value="93">93</option>
                        <option value="94">94</option>
  			<option value="95">95</option>
  			<option value="96">96</option>
  			<option value="97">97</option>
  			<option value="98">98</option>
  			<option value="99">99</option>
  			<option value="100">100</option>
  			<option value="101">101</option>
  			<option value="102">102</option>
  			<option value="103">103</option>
  			<option value="104">104</option>
  			<option value="105">105</option>
  			<option value="106">106</option>
  			<option value="107">107</option>
  			<option value="108">108</option>
  			<option value="109">109</option>
  			<option value="110">110</option>
  			<option value="111">111</option>
  			<option value="112">112</option>
  			<option value="113">113</option>
  			<option value="114">114</option>
  			<option value="115">115</option>
  			<option value="116">116</option>
  			<option value="117">117</option>
  			<option value="118">118</option>
  			<option value="119">119</option>
  			<option value="120">120</option>
  			<option value="121">121</option>
  			<option value="122">122</option>
  			<option value="123">123</option>
  			<option value="124">124</option>
                        <option value="125">125</option>
  			<option value="126">126</option>
  			<option value="127">127</option>
  			<option value="128">128</option>
  			<option value="129">129</option>
  			<option value="130">130</option>
  			<option value="131">131</option>
  			<option value="132">132</option>
  			<option value="133">133</option>
  			<option value="134">134</option>
  			<option value="135">135</option>
  			<option value="136">136</option>
  			<option value="137">137</option>
  			<option value="138">138</option>
  			<option value="139">139</option>
  			<option value="140">140</option>
  			<option value="141">141</option>
  			<option value="142">142</option>
  			<option value="143">143</option>
  			<option value="144">144</option>
  			<option value="145">145</option>
  			<option value="146">146</option>
  			<option value="147">147</option>
  			<option value="148">148</option>
  			<option value="149">149</option>
  			<option value="150">150</option>
  			<option value="151">151</option>
  			<option value="152">152</option>
  			<option value="153">153</option>
  			<option value="154">154</option>
  			<option value="155">155</option>


  		</select><br/><br/>
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $class1." &nbsp; ".$section1; ?><br/><br/><br/>
                        <input type='submit' name='submit1' id='submit1' value='Search' style="color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 

                               </form>
                                </td>
                                 </tr>
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
