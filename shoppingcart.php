<?php
session_start();
	if(!isset($_SESSION["uname"]))
		{
			$id=$_SESSION["id"];
			//$sid=$_SESSION["sid"];
			header("location:sig.php");
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
    <td colspan="8"><img src="image/bannerforsite.jpg" width="1008" height="233" /></td>
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
        <td height="29" valign="top" scope="col" ><p align="center" class="style13">SHOPPING LIST</p>
            <p>
              <?php
	if(isset($_SESSION["sid"]))
	{
	  $sid=$_SESSION["sid"];
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select * from shoppingtable where sessionid='$sid'";
	 $r1=mysql_query($q,$c);
	 $sumqty=0;
	 $sumprice=0;
	 if(mysql_num_rows($r1)==0)
	{
		 print " <font color='red'> <center><b>No item yet choosen for purchasing</b></center></font>";
	 }
	else
	{
	print "<table width=800px align='center' bgcolor='white'>";
	print "<tr>";
	print "<td  bgcolor='#9AC2E5'>Image </td>";
	print "<td bgcolor='#9AC2E5'>Name of Mobile </td>";
	print "<td  bgcolor='#9AC2E5'>Price </td>";
	print "<td  bgcolor='#9AC2E5'>Quantity </td>";
	print "<td  bgcolor='#9AC2E5'>Total Amount</td>";
	print "<td  bgcolor='#9AC2E5'>Delete/Remove </td>";
	print "</tr>";
	
	 while($ans1=mysql_fetch_array($r1))
	 {
	    print "<tr>";
		print "<td ><a href=mobile/$ans1[4]><img src=mobile/$ans1[4] width=75px height=90px border=0></a></td>";
		print "<td  ><h4>$ans1[2]</h4></td>";
	 	print "<td  >Rs. $ans1[5] /-</td>";
		print "<td  >$ans1[6]</td>";
		print "<td  >Rs. $ans1[7] /- </td>";
		print "<td><a href=deleteshopping.php?pid=$ans1[3] style='text-decoration:none'>Delete</a></td>";
		$sumqty=$sumqty+$ans1[6];
		$sumprice=$sumprice+$ans1[7];
		print "</tr>";
	 	 }
		print "<tr>";
		print "<td>&nbsp;</td>";
		print "<td>&nbsp;</td>";
		print "<td bgcolor='#9AC2E5'><b> Grand Total</b></td>";
		print "<td bgcolor='#9AC2E5'>$sumqty</td>";
		print "<td bgcolor='#9AC2E5'> Rs.$sumprice /-</td>";
		

	  print "</table>";
	}
	}
?>
            </p>
          <p>&nbsp; </p></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="4">&nbsp;</td>
        <td width="21%"><div align="right"><a href="mobiles.php"><img src="image/continue_shopping_icon.png" alt="1" width="158" height="41" border="0" /></a></div></td>
        <td width="16%"><a href="checkout.php"><img src="image/checkout_icon.jpg" alt="1" width="111" height="37" border="0" /></a></td>
      </tr>
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td width="7%"><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
        <td width="11%"><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
        <td width="21%"><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
        <td width="24%"><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
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
