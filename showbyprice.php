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
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style16 {
	font-size: x-large;
	color: #CC0000;
}
.style17 {color: #990000}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="330" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="29" colspan="8" align="center" valign="middle"><div align="right">
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
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="233"  colspan="8" ><img src="image/bannerforsite.jpg" width="1005" /></td>
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
    <th colspan="7" scope="col"><table width="100%" height="495" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="16%" height="33" align="center" bgcolor="#A0A0A4"><span class="style4 style17">BRAND</span></td>
        <td width="84%" rowspan="17" valign="top" scope="col" ><p align="left" class="style5 style16 style17">Show All Product </p>
            <form action="showdetail.php" method="get" enctype="multipart/form-data" name="form1" id="form1">
              <table width="44%" border="0">
                <tr>
                  <td width="45%"><span class="style11">Enter Price Range</span></td>
                  <td width="55%"><label>
                    <input type="text" name="price" id="price" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Show" />
                  </label></td>
                </tr>
              </table>
            </form>
          </p>        </td>
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
    <th colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
