<?php

session_start();
	if(isset($_POST["buy"]))
		{
		$u=$_SESSION["uname"];
		$i=$_SESSION["pid"];
		$an=$_SESSION["aname"];
		$p=$_SESSION["price"];
		$qt=$_POST["qty"];
		$tt=$qt*$p;
		$img=$_SESSION["image"];
		$sid=session_id();
		$_SESSION["sid"]=$sid;
		 $c=mysql_connect("localhost","root","") or die ("Error in connection");
		mysql_select_db("userdatabase");
		$q="insert into shoppingtable(username,product_name,product_id,image,priceperqty,qty,totalprice,sessionid) values 	('$u','$an',$i,'$img','$p',$qt,$tt,'$sid')";
		mysql_query($q,$c);
		header("location:shoppingcart.php");
		}
	if(isset($_GET["pid"]))
		{
	  $p=$_GET["pid"];
      $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select * from addacc where Sno=$p";
	 $r1=mysql_query($q,$c);
	 while($ans1=mysql_fetch_array($r1))
	 {
	
	 	$image=$ans1[4];
	 	$aname=$ans1[2];
	    $price=$ans1[3];
	 	$features=$ans1[5];
   	 }
		 $_SESSION["pid"]=$p;
		 $_SESSION["aname"]=$aname;
		 $_SESSION["image"]=$image;
		 $_SESSION["price"]=$price;
    	mysql_close($c);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="image/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
.style14 {
	color: #990000;
	font-weight: bold;
}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="334" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="24" colspan="8" align="center" valign="middle"><div align="right"> <?php
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
	?></div></td>
  </tr>
  <tr>
    <td  colspan="8"><img src="image/bannerforsite.jpg" width="1008" height="233" /></td>
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
    <th height="27" colspan="7" scope="col"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr bgcolor="#FFFFFF">
        <td height="29" valign="top" scope="col" ><p class="style14 style15">&nbsp;</p>
            <form id="form1" name="form1" method="post" action="accdetails.php">
              <table width="507" border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td width="190">&nbsp;</td>
                  <td width="297"><?php print "<img src=mobile/$image  >" ?></td>
                </tr>
                <tr>
                  <td>Name of Accessory</td>
                  <td><?php print $aname; ?></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td><?php print "Rs. $price /-" ?></td>
                </tr>
                <tr>
                  <td valign="top">Features</td>
                  <td><?php print $features; ?></td>
                </tr>
                <tr>
                  <td>Quantity to be Purchase</td>
                  <td><label>
                    <input name="qty" type="text" id="qty" value="1" size="5" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" value="Buy Now" name="buy" /></td>
                </tr>
              </table>
            </form></td>
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
