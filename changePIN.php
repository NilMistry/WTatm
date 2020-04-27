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
<title>ATM System-Change PIN</title>
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
	    Registration&nbsp;<a href="registration.php" id="header_right_img"><img src="shadow/next.png" /></a>

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
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>    	
    <div class="cleaner"></div>
</div> 
<!--Form-->
<div>
<form method="post" action="index.html" id="atm_reg">
<table border="0" align="center">
<caption align="left">Change PIN</caption>
             
				<div class="cleaner_h10"></div>
<tr>
<td><label for="Adhar No">Old PIN:</label></td>
<td><input type="number" required="required"/></td>
</tr>
<tr>
<td><label for="pan_no">New PIN:</label></td>
<td><input type="number" id="author" required="required"/></td>
</tr> 
				<div class="cleaner_h10"></div>		

<tr>
<td colspan="2"><center><input type="submit" value="Change PIN" id="atm_reg_btn"/</center></td>
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
        <li><a href="about.html">About</a></li>
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
