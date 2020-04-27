<?php
include('conn.php');
if(isset($_REQUEST['login']))
{
$u=$_REQUEST['user_name'];
$p=$_REQUEST['password'];

$sel="select * from atm_reg where email_id='$u' and psw='$p'";
$r=mysql_query($sel);
if(mysql_num_rows($r)>0)
{
	$fty=mysql_fetch_array($r);
	$_SESSION['user']=$u;
	$_SESSION['logintime']=time();
	header("location:wel.php");
	
}
else
{
	echo '<script type="text/javascript">
		alert("Invalid username & password");
		</script>';
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Java Script, CSS, HTML" />
<link href="atmstyle.css" rel="stylesheet" type="text/css" />

<!--<script src="js/login.js" language="javascript" type="text/javascript" >//LINK & SCRIPT SECTION

</script>-->
<title>ATM System-Login</title>
</head>

<body>
<div id="atmheader_wrapper">
	<div id="atmheader">
    
    	<div id="site_title">
         <h1><img src="images/atmwhite.png" alt="logo" width="80" height="80" /><span>ATM System</span></h1>

        </div> 
    	<!-- end of site_title -->
        <div id="header_right">
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
        <li><a href="index.php" class="current">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        
        <li><a href="contact.php">Contact</a></li>
    </ul>    	

	<div class="cleaner"></div>
</div> 
<!--Login Form-->
<div>

<form method="post" id="atm_reg" onSubmit="return valid()">
<table border="0" align="center" >
<caption>LOGIN</caption>
<tr>
<td><label for="email">User Name:</label></td>
<td><input type="text" name="user_name"/></td>
</tr>
<div class="cleaner_h10"></div> 
<tr>
<td><label for="password">Password</label></td>
<td><input type="password" name="password"/></td>
</tr>
<div class="cleaner_h10"></div>
<tr>
<td colspan="2"><center><input type="submit" value="Login" id="atm_reg_btn" name="login"/></center></td>
<td></td>
</tr>
</table>
</form>
</div>

<div>
<marquee direction="left" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()">If you are not registered then first registered your self. To Register &nbsp;<a href="registration.php">Click Here...</a></marquee>
</div>
     
        
<!--ATM FOOTER-->
<div id="atmfooter_wrapper">

     <div id="atmfooter">
    
        Copyright © 2048 <a href="#">Company Name</a>
    <ul id="footer_left">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
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