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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<style type="text/css">
<!--
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
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
.style17 {	font-size: large;
	font-weight: bold;
}
.style18 {color: #7F7FFF}
.style22 {color: #666666}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-family: Arial, Helvetica, sans-serif}
.style25 {font-family: Arial, Helvetica, sans-serif}
.style25 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="987" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="right" valign="middle"><span class="style12">24x7 Customer service:+91-9872089188</span></td>
  </tr>
  <tr>
    <td height="23" colspan="8" align="right" ><?php
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
	?></td>
  </tr>
  <tr>
    <td height="237" colspan="8" align="center"><img src="image/bannerforsite.jpg" width="1000" height="233" /> </td>
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
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" height="598" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="16%" height="37" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
          <td rowspan="17" valign="top" ><p class="style17">About us</p>
              <hr />
              <div align="right" class="style18">Harish Kumar , Ravijot Singh and Parambir Singh, FOUNDER,MobileWorld</div>
            <strong align="left">Landscape of the Telecom market</strong>
              <p align="justify">In   the early days the Indian Mobile Retailing industry was highly   fragmented with no organized retail players. Mobile handsets were   expensive (an average price of Rs 6999 per handset), with the grey   market players dominating the market. There were no branded showrooms to   showcase an entire range of products.</p>
            <p>The MobileWorld format is a <strong>one stop mobile wesite</strong> that provides, multi brand handsets, accessories, connections, repairs, VAS etc all under one.Key thrust areas for the retail format are: Comprehensive Product   Range,    Competitive Prices and Handset Repairs.</p>
            <p>The MobileWorld has undertaken an extensive training program   to equip all its employees with in-depth knowledge of the products and   brands available at the store, thereby allowing them to provide the   right kind of guidance to the customer.</p>
            <p>The MobileWorld has categorized its mobile device offerings   into consumer segments keeping in mind the profiles and needs of   different consumers. <strong>Value for Money</strong> - Special offers, discounts and budget phones. </p>
            <p>All major handset brands like Nokia, Sony Ericsson, LG,   Samsung, Motorola, Fly, Sagem, HP, iMate, Dopod, HTC and Blackberry are   available here.</p></td>
        </tr>
        <tr>
          <td><div align="left"><a href="detail2.php?cname=nokia" class="style15" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">NOKIA</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=samsung" style="text-decoration:none">SAMSUNG</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=sony ericson" style="text-decoration:none">SONY ERICSON</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=lg" style="text-decoration:none">LG</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=micromax" style="text-decoration:none">MICROMAX</a></div></td>
        </tr>
        <tr>
          <td><div align="left"><a href="detail2.php?cname=blackberry" class="style23" style="text-decoration:none">BLACKBERRY</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=htc" style="text-decoration:none">HTC</a></div></td>
        </tr>
        <tr>
          <td><div align="left"><a href="detail2.php?cname=apple" class="style23" style="text-decoration:none">APPLE</a></div></td>
        </tr>
        <tr>
          <td><div align="left"><a href="detail2.php?cname=karbonn" class="style23" style="text-decoration:none">KARBONN</a></div></td>
        </tr>
        <tr>
          <td><div align="left"><a href="detail2.php?cname=fly" class="style23" style="text-decoration:none">FLY</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=onida" style="text-decoration:none">ONIDA</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=motorola" style="text-decoration:none">MOTOROLA</a></div></td>
        </tr>
        <tr>
          <td><div align="left" class="style23"><a href="detail2.php?cname=dell" style="text-decoration:none">DELL</a></div></td>
        </tr>
        <tr>
          <td height="241">&nbsp;</td>
        </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
          <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
          <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
          <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
          <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
          <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services </a></div></td>
        </tr>
        <tr>
          <td colspan="6" scope="row"><div align="center" class="style24"></div></td>
        </tr>
    </table></th>
  </tr>
<tr></tr>
</table>

<p>&nbsp;</p>
</body>
</html>
