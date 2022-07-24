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
   if( document.mysignin.pswd.value == "" )
   {
     document.mysignin.pswd.focus() ;
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
		<span style="color:#13A7C7;font-size:22px;">Student</span><span style="color:#444;font-size:22px;"> / <span style="color:#13A7C7;font-size:22px;">Parents</span></span><span style="color:#444;font-size:22px;"> Panel</span><br/><br/>
   <div>&nbsp;<?php if(isset($_GET['status'])){ echo "<span style='color:red;font-size:12px;'>* Invalid Information</span>"; } ?></div>		
	 	<form name="mysignin" method="POST" action="student_login_script.php" onsubmit="return validate()">
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
                   &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Class - </span> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<select name="class" style='font-size:12px;color:#444;'>
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
               &nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Section - </span> &nbsp;&nbsp; &nbsp; &nbsp; <select name="section" style='font-size:12px;color:#444;'>
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

		&nbsp; <span style='font-size:12px;font-weight:bold;color:#444;'>Password - </span> &nbsp; &nbsp;&nbsp;<input type='password' name='pswd' id='pswd' style="color:#444;font-size:12px;font-weight:bold;width:180px;height:20px;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 2px;border-radius: 2px;padding-left:0.5em;" placeholder='Password'><br/><br/>
	&nbsp; <input type='submit' name='submit' id='submit' value='Sign in' style="color:white;font-size:16px;font-weight:bold;border-width:1px;border-style:solid;border-color:#444;-moz-border-radius: 5px;border-radius: 5px;padding:5px 5px 5px 5px;background:#444;"> 
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
