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
  <link rel="stylesheet" href="css/box.css">
  <script type="text/javascript">

function validate()
{
   if( document.myuser.name.value == "" )
   {
     document.myuser.name.focus() ;
     return false;
   }
   if( document.myuser.fname.value == "" )
   {
     document.myuser.fname.focus() ;
     return false;
   }
   if( document.myuser.mname.value == "" )
   {
     document.myuser.mname.focus() ;
     return false;
   }
   if( document.myuser.address.value == "" )
   {
     document.myuser.address.focus() ;
     return false;
   }
   if( document.myuser.phn.value == "" )
   {
     document.myuser.phn.focus() ;
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
<div id="page12">
                <table border='0' width='900px' align='center'>
                <tr>
                <td>
 
		<table border="0">
			<tr>
                        <td width="570px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Create New Student Record
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
                                <td height='260px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> 
                               <form name="myuser" method="POST" action="user_create_student_script.php" enctype="multipart/form-data" onsubmit="return validate()">
                               <input type='hidden' name='class' value='<?php echo $class1; ?>'>
                               <input type='hidden' name='section' value='<?php echo $section1; ?>'>
                                       <input type='text' name='name' id='name' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Name'><br/><br/>
					<input type='text' name='fname' id='fname' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Father Name'><br/><br/>
					<input type='text' name='mname' id='mname' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Mother Name'><br/><br/>
					<input type='text' name='address' id='address' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Address'><br/><br/>
					<input type='text' name='phn' id='phn' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Phone Number'><br/><br/>
                                       <input type='password' name='pswd' id='pswd' style="color:#444;font-size:12px;font-weight:bold;width:300px;height:25px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Password'><br/><br/>
                              &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Roll Number - </span> &nbsp;<select name="rollno" style='font-size:12px;color:#444;'>
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
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $class1." &nbsp; ".$section1; ?><br/><br/>
                                &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Date of Birth -</span>&nbsp; <select name="day" style='font-size:12px;color:#444;'>
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
    &nbsp; <label for="file"><b>Picture -</b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type='file' name='image' style='font-size:12px;'> &nbsp; (optional)<br/><br/>
	<input type='submit' name='submit' id='submit' value='Create' style="color:white;font-size:12px;font-weight:bold;border-width:1px;border-style :solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                               </table>   
                            
		      	</td>
                    <td width='4%'>&nbsp;</td>
                    <td>
                      <td width="260px" height="405px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Important Announcements
                              </td>
                              </tr>
                              <tr>
                                <td height='405px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                                <?php
                                                                $user = $_SESSION['user_management_user_login_now_nigvideo_burr'];
                                                                include 'dbconnect.php';
                                                                $qu="SELECT * from admin_notice ORDER by id DESC LIMIT 3";
                                                                $show=mysql_query($qu);
                                                                if(mysql_num_rows($show) > 0)
                                                                {
                                                                $row=mysql_fetch_array($show);
                                                                
                                                                do
                                                                {
                                                                $id = $row['id'];
                                                                $title = $row['title'];
                                                                $notice = $row['notice'];				   
								$date = $row['c_date'];
                                                                 
                                                                  echo "
     <table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:10px;'>
                                      <tr>
            
            <td valign='top' style='padding:5px;color:444;'>
               <span style='color:#444;text-decoration:none;'>$title</span><br/><br/><br/><a href='#openModal$id' style='background-color:#13A7C7;padding:3px;color:#ffffff;text-decoration:none;'>Details</a> &nbsp; $date
                       <div id='openModal$id' class='modalDialog'>
						<div>
				<a href='#close' title='Close' class='close'>X</a>
				<br/><h3>$title</h3>$date
				<p><hr style='border:0px;height:1px;background:#444;'/><br/>
                                      $notice
				</p>
			</div>
</div>		
              </td>
                                       </tr>
                                       </table><br/>";
							
						
                               }
                                while($row=mysql_fetch_array($show));
                              echo "<table width='90%' align='center' border='0' bgcolor='#ffffff' style='color:#444;font-size:12px;'>
                                      <tr>
            <td valign='top' width='100%' style='padding:5px;font-size:12px;color:#444;'> 
                <a href='user_announcements.php' style='color:#13A7C7;text-decoration:none;font-size:11px;'>View all announcements</a>
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
                   </td>
			</tr>
			</table>
                  
                       </td>
                        
                         </tr>
                          </table>
</div>
</body>
</html>
