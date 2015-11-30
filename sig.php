<?php
session_start();

if(isset($_COOKIE["mycookie"]))
{
	$_SESSION["uname"]=$_COOKIE["mycookie"];
	header("location:welcome.php");
}
if(isset($_SESSION["uname"]))
{
	
	header("location:welcome.php");
}
   if(isset($_POST["submit"]))
   {
   	 $n=$_POST["uid"];
	 $p=$_POST["pass"];
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select user_id from register where user_id='$n' and password='$p'";
	 $q1="select username from admintable where username='$n'";
	 $r1=mysql_query($q1,$c);
	 $ans1=mysql_fetch_array($r1);
	 if(!empty($ans1[0]))
	 {
	 $_SESSION["admin"]=$n;
	 header("location:adminpanel.php");
	 }
	 $r=mysql_query($q,$c);
	 $ans=mysql_fetch_array($r);
	 if(empty($ans[0]))
	 {
	   $prt="<font color='red'>Wrong Username/Password</font>";
	 }
	 else 
	 {
	  if(isset($_POST["remember"]))
	 {
	 setcookie("mycookie",$n,time()+24*60*60*7);
	 }
		$_SESSION["uname"]=$n;
		if(isset($_SESSION["pid"]))
		{
 	 $id=$_SESSION["pid"];
	 header("location:shoppingcart.php");
		}
	elseif(isset($_SESSION["id"]))
		{
 	 $id=$_SESSION["id"];
	header("location:shoppingcart.php");
		}
	else
	{
	header("location:welcome.php");
	}	
   }
	
	   mysql_close($c);
	   
	 }
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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<style type="text/css">
<!--
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: large;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {color: #003399}
.style16 {
	color: #CC0000;
	font-weight: bold;
}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="324" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right">
      <?php
	if(!isset($_SESSION["uname"]))
	{
	print " Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none' >SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none'>Register</a>";
	}
	else 
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=sig.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="233" colspan="8"><img src="image/bannerforsite.jpg" width="1006" height="233" /></td>
  </tr>
  
 <tr  align="left">
    <th width="150" scope="col"><a href="index.php"><img src="image/homenew.png" width="150" height="35" border="0" /></a></th>
    <th width="150" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="150" height="35" border="0" /></a></th>
    <th width="160" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="160" height="35" border="0" /></a></th>
    <th width="120"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="120" height="35" border="0" /></a></th>
    <th width="120"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="120" height="35" border="0" /></a></th>
  </tr>
 <tr  align="left">
   <th colspan="7" scope="col"><table width="100%" height="376" border="0" align="center" cellpadding="0" cellspacing="0" >
     <tr>
       <td width="16%" height="36" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
       <td rowspan="17" valign="top" ><p align="center" class="style16">PLEASE REGISTER WITH US FOR PURCHASING ANY MOBILE OR ANY OTHER ACCESSORIES</p>
           <form id="form1" name="form1" method="post" action="">
        
             <table width="56%" height="288" border="0" align="center" >
               <tr>
                 <td colspan="2" align="center" bgcolor="#999999"><span class="style5">SIGN IN</span></td>
               </tr>
               <tr>
                 <td><span class="style6">User ID</span></td>
                 <td><label>
                   <input type="text" name="uid" id="uid" />
                 </label></td>
               </tr>
               <tr>
                 <td><span class="style6">Password</span></td>
                 <td><label>
                   <input type="password" name="pass" id="pass" />
                 </label></td>
               </tr>
               <tr>
                 <td colspan="2"><label>
                   <input type="checkbox" name="remember" id="remember" />
                   Remember Me</label></td>
               </tr>
               <tr>
                 <td colspan="2"><div align="left">
                     <input type="submit" name="submit" id="submit" value="Sign In" />
                     <input type="submit" name="reset" id="reset" value="Cancel" />
                 </div></td>
               </tr>
               <tr>
                 <td height="22">&nbsp;</td>
                 <td><?php
				  if(isset($_POST["submit"]))
				  {
				  print $prt;
				  }
                  ?></td>
               </tr>
               <tr>
                 <td colspan="2"><div align="left">New to MobileWorld? It's free and easy<a href="new.php" style="text-decoration:none"> <img src="image/sign4.jpg" alt="22" width="26%" height="9%" border="0" /></a></div></td>
               </tr>
               <tr>
                 <td colspan="2"><label></label>                 </td>
               </tr>
             </table>
           </form></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=nokia" class="style15" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">NOKIA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=samsung" style="text-decoration:none">SAMSUNG</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=sony ericson" style="text-decoration:none">SONY ERICSON</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=lg" style="text-decoration:none">LG</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=micromax" style="text-decoration:none">MICROMAX</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=blackberry" class="style17" style="text-decoration:none">BLACKBERRY</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=htc" style="text-decoration:none">HTC</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=apple" class="style17" style="text-decoration:none">APPLE</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=karbonn" class="style17" style="text-decoration:none">KARBONN</a></div></td>
     </tr>
     <tr>
       <td><div align="left"><a href="detail2.php?cname=fly" class="style17" style="text-decoration:none">FLY</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=onida" style="text-decoration:none">ONIDA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=motorola" style="text-decoration:none">MOTOROLA</a></div></td>
     </tr>
     <tr>
       <td><div align="left" class="style17"><a href="detail2.php?cname=dell" style="text-decoration:none">DELL</a></div></td>
     </tr>
     <tr>
       <td height="20"><div align="left" class="style17"><a href="showacc.php" style="text-decoration:none">ACCESSORIES</a></div></td>
     </tr>
   </table></th>
  </tr>
 <tr  align="left">
   <th colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
     <tr bgcolor="#FFFFFF">
       <td colspan="6"><marquee direction="left" behavior="alternate">
         <img src="image/1.jpg" alt="1" width="155" height="100" /><img src="image/3.jpg" alt="1" width="155" height="100" /> <img src="image/4.jpg" alt="1" width="155" height="100" /> <img src="image/5.jpg" alt="1" width="155" height="100" /><img src="image/8.jpg" alt="1" width="155" height="100" /> <img src="image/9.jpg" alt="1" width="155" height="100" /> <img src="image/10.jpg" alt="1" width="155" height="100" /> <img src="image/11.jpg" alt="1" width="155" height="100" /> <img src="image/15.jpg" alt="1" width="155" height="100" /><img src="image/17.jpg" alt="1" width="155" height="100" /> <img src="image/18.jpg" alt="11" width="155" height="100" />
       </marquee></td>
     </tr>
     <tr>
       <td colspan="6">&nbsp;</td>
     </tr>
     <tr>
       <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
       <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Conditions</a></div></td>
       <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
       <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
     </tr>
     <tr>
       <td colspan="6" scope="row"><div align="center" class="style18"></div></td>
     </tr>
   </table></th>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
