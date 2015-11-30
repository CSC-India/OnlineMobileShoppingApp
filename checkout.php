<?php
session_start();
	if(!isset($_SESSION["uname"]))
		{
			$id=$_SESSION["id"];
			header("location:sig.php");
		}
		if(isset($_POST["submit"]))
		{
		$u=$_SESSION["uname"];
		$sid=$_SESSION["sid"];
		$pmode=$_POST["pay_mode"];
		if(pay_mode=="dd_cheq")
		{
		$no=0;
		}
		else
		{
		$no=$_POST["dd_cheqno"];
		}
		$add=$_POST["shipping"];
		$con=mysql_connect("localhost","root","") or die("Error in database connection");
		mysql_select_db("userdatabase");
		$q="insert into ordertable(username,payment_mode,dd_cheqno,sessionid,shipping_address) values('$u','$pmode','$no','$sid','$add')";
		mysql_query($q,$con) or die("error in query".mysql_error());
		header("location:thanks.php");
		mysql_close($con);
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
.style13 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: x-large;
	color: #990000;
}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="337" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right">
	<?php
	if(isset($_SESSION["uname"]))
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	elseif(isset($_SESSION["admin"]))
	{
	print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	else
	{
	print " Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none' >SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none'>Register</a>";
	}
	?></div></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1000" height="233" /></div></td>
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
      <tr>
        <td height="29" valign="top" scope="col" ><p align="center" class="style13">FINALISE ORDER </p>
            <form id="form1" name="form1" method="post" action="">
              <table width="68%" border="0">
                <tr>
                  <td colspan="2"><span class="style15">Payment Mode</span></td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    <input type="radio" name="pay_mode" value="cash" id="pay_mode_0" />
                    Cash On Delivery</label></td>
                </tr>
                <tr>
                  <td width="20%"><label></label></td>
                  <td width="80%"><label>
                    <input type="radio" name="pay_mode" value="dd_cheq" id="pay_mode_1" />
Demand Draft/Cheque No
<input type="text" name="dd_cheqno" id="dd_cheqno" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="radio" name="pay_mode" value="acc" id="pay_mode_2" />
                    Transfer Money in Our Acoount 140920016111</td>
                </tr>
                <tr>
                  <td colspan="2">Shipping Address</td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    <textarea name="shipping" id="shipping" cols="45" rows="5"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    <input type="submit" name="submit" id="submit" value="Order" />
                  </label></td>
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
        <td width="7%"><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
        <td width="11%"><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
        <td width="21%"><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
        <td width="24%"><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
        <td width="21%"><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
        <td width="16%"><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
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
