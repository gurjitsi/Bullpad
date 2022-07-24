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
   if( document.myuser.title.value == "" )
   {
     document.myuser.title.focus() ;
     return false;
   }
   if( document.myuser.status.value == "" )
   {
     document.myuser.status.focus() ;
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
                
                        <td width="370px" height="300px" valign="top" valign='top'>
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                New Notice
                              </td>
                              </tr>
                              <tr>
                                <td height='300px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="admin_create_notice_script.php" onsubmit="return validate()">
                                       <input type='text' name='title' id='title' style="color:#444;font-size:14px;width:330px;height:30px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 3px;border-radius: 3px;padding-left:0.5em;" placeholder='Title'><br/><br/>
                           <textarea rows='10' cols='44' name='status' id='status' style='-moz-border-radius:5px;border-radius:5px;border:1px solid #444;color:#444;font-size:12px;' placeholder='Description ..'></textarea><br/><br/>
						<input type='submit' name='submit' id='submit' value='Done' style="color:white;font-size:14px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
				</form>
                                </td>
                                 </tr>
                               </table>   
                      
                  
                       </td>
                         
                         <td width="270px" height="300px" valign="top">
		             
                            <table border='0' width='100%'>
                             <tr>
                              <td height='20px' style='color:#ffffff;background-color:#444;padding:5px;text-align:center;font-size:12px;font-weight:bold;'>
                                Record Search
                              </td>
                              </tr>
                              <tr>
                                <td height='300px' bgcolor="#f2f2f2" valign='top' style='padding:10px;color:#444;font-size:12px;'> <br/><br/>
                               <form name="myuser" method="POST" action="admin_search_student.php" enctype="multipart/form-data" onsubmit="return validate()">
                                &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Roll Number - </span> &nbsp;<select name="rollno" style='font-size:12px;color:#444;'>
                        <option value="null">No matter</option>
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
                    &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class- </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="class" style='font-size:12px;color:#444;'>
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
</div>
</body>
</html>	
