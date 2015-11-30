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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style16 {
	font-size: xx-large;
	color: #CC0000;
}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1000" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></td>
  </tr>
  <tr>
    <td height="23" colspan="8" align="right" valign="middle">
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
	?></td>
  </tr>
  <tr>
    <td height="79" colspan="8"  valign="top"><img src="image/bannerforsite.jpg" width="1000" height="233" /></td>
  </tr>
  

    
  <tr  align="left">
    <th width="151" scope="col"><a href="index.php"><img src="image/homenew.png" width="150" height="35" border="0" /></a></th>
    <th width="151" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="150" height="35" border="0" /></a></th>
    <th width="151"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="150" height="35" border="0" /></a></th>
    <th width="151"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="150" height="35" border="0" /></a></th>
    <th width="161" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="160" height="35" border="0" /></a></th>
    <th width="121"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="120" height="35" border="0" /></a></th>
    <th width="121"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="120" height="35" border="0" /></a></th>
  </tr>
  <tr  align="left">
    <th colspan="7" scope="col"><table width="75%" height="0" align="center" cellpadding="4" cellspacing="5" >
      <tr>
        <td height="29" scope="col" ><p align="center" class="style5 style16">VARIOUS BRANDS </p>
            <table width="100%" height="1040" border="0">
              <tr>
                <td width="100%" height="1036" valign="top" ><?php
		  //$cname=$_SESSION["companyname"];
		$c=mysql_connect("localhost","root","") or die ("Error in connection");
		 mysql_select_db("userdatabase");
		 $q="select * from brandpic ";
		 $r1=mysql_query($q,$c);
	 
	$display = 4;
	$cols = 0;
	echo "<table bgcolor='white' align='center'>";
	while($fetched = mysql_fetch_array($r1))
	{
    if($cols == 0)
    {
        echo "<tr>\n";
    }
    // put what you would like to display within each cell here
    echo "<td><a href=detail1.php?cname=". rawurlencode($fetched[1]).">"."<img src=logo/" . $fetched['image'] . " width=200px height=198px border=0 ></a> </td>";
    $cols++;
    if($cols == $display)
    {
        echo "</tr>\n";
        $cols = 0;
    }
}
// added the following so it would display the correct html
if($cols != $display && $cols != 0){
    $neededtds = $display - $cols;
    for($i=0;$i<$neededtds;$i++){
        echo "<td></td>\n";
    }
     echo "</tr></table>";
    } else {
    echo "</table>";
    }
	
    ?></td>
              </tr>
          </table></td>
      </tr>
    </table></th>
  </tr>
</table>

<table width="75%" align="center" cellpadding="4" cellspacing="5">
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
</table>
<p>&nbsp;</p>
</body>
</html>
