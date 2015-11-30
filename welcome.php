<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="image/favicon.ico">
<title>MobileWorld-Best Mobile Phone Deals, Buy Mobile Phones, Cell Accessories</title>
<style type="text/css">
<!--
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style17 {color: #990000}
.style19 {
	font-size: xx-large;
	color: #3366FF;
}
.style21 {color: #E81126; font-size: large;}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="326" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="29" colspan="8" align="center" valign="middle"><div align="right">
       <?php
	if(!isset($_SESSION["uname"]))
	{
	print "<font color=gray> Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none; color:gray'>SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none;color:gray'>Register</a></font>";
	}
	else 
	{
	print "<span class='style22'>Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php?page=index.php' style='text-decoration:none;color:gray'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none;color:gray'>Signout</a></span>";
	
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1007" height="233" /></div></td>
  </tr>
  
 <tr  align="left">
    <th width="150" height="35" scope="col"><a href="index.php"><img src="image/homenew.png" width="150" height="35" border="0" /></a></th>
    <th width="150" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="150" height="35" border="0" /></a></th>
    <th width="160" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="160" height="35" border="0" /></a></th>
    <th width="120"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="120" height="35" border="0" /></a></th>
    <th width="120"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="120" height="35" border="0" /></a></th>
  </tr>
 <tr  align="left">
   <th height="35" colspan="7" scope="col"><table width="100%" height="490" border="0" align="center" cellpadding="0" cellspacing="0" >
     <tr>
       <td width="13%" height="28" align="center" bgcolor="#A0A0A4"><span class="style4 style17">BRAND</span></td>
       <td width="87%" rowspan="17" valign="top" scope="col" ><div align="left"><span class="style19"> Welcome
         <?php
	if(isset($_SESSION["uname"]))
	{
	$a=$_SESSION["uname"];
	print $a;
	}
	?>
           </span><br />
         </div>
           <div>
             <p>&nbsp;</p>
             <p class="style21">For security reasons please update your account  password every week.</p>
           </div>
         <br />
           <div>1.To change your account password please <a href="changepassword.php">Click here.</a></div>
         <br/>
           <div>2.To Check Your Order Status please <a href="checkorder.php">Click here.</a></div>
         <br/>
           <div>3.To Update Your Profile please <a href="updateprofile.php">Click here.</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=nokia" class="style15" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">NOKIA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=samsung" style="text-decoration:none">SAMSUNG</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=sony ericson" style="text-decoration:none">SONY ERICSON</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=lg" style="text-decoration:none">LG</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=micromax" style="text-decoration:none">MICROMAX</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=blackberry" class="style11" style="text-decoration:none">BLACKBERRY</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=htc" style="text-decoration:none">HTC</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=apple" class="style11" style="text-decoration:none">APPLE</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=karbonn" class="style11" style="text-decoration:none">KARBONN</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=fly" class="style11" style="text-decoration:none">FLY</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=onida" style="text-decoration:none">ONIDA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=motorola" style="text-decoration:none">MOTOROLA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style11"><a href="detail2.php?cname=dell" style="text-decoration:none">DELL</a></div></td>
     </tr>
     <tr>
       <td height="20"><div align="left" class="style11"><a href="showacc.php" style="text-decoration:none">ACCESSORIES</a></div></td>
     </tr>
   </table></th>
  </tr>
 <tr  align="left">
   <th height="35" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td colspan="6">&nbsp;</td>
     </tr>
     <tr>
       <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
       <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
       <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
       <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
     </tr>
     <tr>
       <td colspan="6" scope="row"><div align="center" class="style11"></div></td>
     </tr>
   </table></th>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
