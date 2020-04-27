<?php
ob_start();
include('conn.php');
if(isset($_REQUEST['reg']))
{
	$fn=$_REQUEST['f_name'];
	$mn=$_REQUEST['m_name'];
	$ln=$_REQUEST['l_name'];
	$g=$_REQUEST['ab'];
	$d=$_REQUEST['db'];
	$e=$_REQUEST['email_id'];
	$p=$_REQUEST['psw'];
	$c=$_REQUEST['cfm_psw'];
	
	$sele="select * from atm_reg where email_id='$e'";
	$qwer=mysql_query($sele) or die(mysql_error());
	$frty=mysql_fetch_array($qwer);
	$emil=$frty['email_id'];
		if($e==$emil)
		{
			echo '<script type="text/javascript">
		alert("Email Id Already exist");
		</script>';
		}
		else
		{
	$ins="insert into atm_reg(f_name,m_name,l_name,gender,date_of_birth,email_id,psw,cfm_psw)values('$fn','$mn','$ln','$g','$d','$e','$p','$c')";
	mysql_query($ins);
	echo '<script type="text/javascript">
		alert("Add successfuly...");
		</script>';
		header("location:Login.php");
	}
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Java Script, CSS, HTML" />
<link href="atmstyle.css" rel="stylesheet" type="text/css" />

<!--<script language="javascript" type="text/javascript">//LINK & SCRIPT SECTION
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>-->
<title>ATM System-Registration</title>
</head>

<body>
<div id="atmheader_wrapper">
	<div id="atmheader">
    
    	<div id="site_title">
         <h1><img src="images/atmwhite.png" alt="logo" width="80" height="80" /><span>ATM System</span></h1>

        </div> 
    	<!-- end of site_title -->
        <div id="header_right">
	Login&nbsp;<a href="Login.php"><img src="shadow/next.png" /></a>
	<div class="cleaner"></div>
</div> 
<div id="atm_middle_wrapper">
	<div id="atm_middle">
    
    	<img src="images/a3.jpg" alt="Image 01" />
        <div id="middle_content">
        	<p>Please use your ATM card or Net Banking for all your purchase make better Digital India.<br />
            NO CHEQUES, No QUEUES.</p>
        </div>
    
     </div>
</div> 

<!--MENU-->
 <div id="atm_menu">
                
    <ul>
        <li><a href="index.html" class="current">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        
        <li><a href="contact.html">Contact</a></li>
    </ul>    	
    <div class="cleaner"></div>
</div> 
<!--Form-->
<div>
<form method="post" id="atm_reg" onSubmit="return valid()">
<table border="0" align="center">
<caption align="left">REGISTRATION</caption>
<tr>
<td>
<label for="First Name"> First Name:</label> 
</td>
<td><input type="text" name="f_name" value="Enter First Name" onFocus="if(this.value='Enter First Nmae')this.value=''" required="required"/>
</td>
</tr>
				<div class="cleaner_h10"></div>
<tr>
<td><label for="Middle name">Middle Name:</label></td>
<td><input type="text" name="m_name" value="Enter Middle Name" onFocus="if(this.value='Enter Middle Nmae')this.value=''" required="required"/></td>
</tr>
				<div class="cleaner_h10"></div> 
<tr>
<td> <label for="Last Name">Last Name:</label></td>
<td><input type="text" name="l_name" value="Enter Last Name" onFocus="if(this.value='Enter Last Nmae')this.value=''" required="required" /></td>
</tr>              
         		<div class="cleaner_h10"></div>
<tr>
<td><label for="Gender">Gender:</label></td>
<td>  Male<input type="radio" value="1" name="ab"/>Female<input type="radio" value="1" name="ab"/></td>
</tr>               
				 <div class="cleaner_h10"></div>
<tr>
<td><label for="Birth Date">Date Of Birth:</label></td>
<td> <input type="date" name="db" required="required"/></td>
</tr>               
				<div class="cleaner_h10"></div>		
<tr>
<td><label for="email">Email:</label></td>
<td><input type="text" name="email_id" required="required" name="email"/></td>
</tr>  
				<div class="cleaner_h10"></div>
<tr>
<td><label for="psw" >Password:</label></td>
<td><input type="password" name="psw" required="required"/></td>
</tr>
<tr>
<td><label for="comfirmpsw">Confirm Password:</label></td>
<td><input type="password" name="cfm_psw" required="required"/></td>
</tr>
	<div class="cleaner_h10"></div>

<tr>
<td colspan="2"><center><input type="submit" value="Register" id="atm_reg_btn" name="reg"/></center></td>
<td></td>
</tr>                 
</table>              
</form>
	
</div>
     
        
<!--ATM FOOTER-->
<div id="atmfooter_wrapper">

     <div id="atmfooter">
    
        Copyright © 2048 <a href="#">Company Name</a>
    <ul id="footer_left">
        <li><a href="index.html">Home</a></li>
        <li><a href="#.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul> 
<div id="footer_right">  
		<a href="#"><img src="images/facebook.png" alt="facebook" /></a>
 	    <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="images/linkedin.png" alt="linkin" /></a>
        <a href="#"><img src="images/myspace.png" alt="myspace" /></a>    
  <div class="cleaner"></div>
</div>  
     <!-- end of templatetooplate_footer -->
</div>         
</body>
</html>
