<?php

session_start();
   if(isset($_POST["submit"]))
   {
     $n=$_POST["sname"];
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="insert into storetable(state_name) values('$n')";
	 mysql_query($q,$c);
	 $prt="<font color='red'>State added Successfully</font>";
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
.style14 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="904" height="390" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="23" colspan="7" align="center" valign="middle"><div align="right">
      <?php
	if(isset($_SESSION["admin"]))
	{
print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	else 
	{
	header("location:sig.php");
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="233" colspan="7" align="center" valign="top"><div align="left"><img src="image/bannerforsite1.jpg" width="900" height="233" /></div></td>
  </tr>
  
  <tr align="left">
    <td width="150" height="35"><a href="adminpanel.php"><img src="image/adminpanel.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="addcompany.php"><img src="image/addbrand.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="addproduct.php"><img src="image/addprod.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="adminsignup.php"><img src="image/ned.png" width="150" height="35" border="0" /></a></td>
   <td width="150" height="35"><a href="showfeedback.php"><img src="image/v_feed.png" width="150" height="35" border="0" /></a></td>
    <td width="152" height="35"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="150" height="35" border="0"/></a></td>
  </tr>
  <tr align="left">
    <td height="35" colspan="6"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p class="style14">&nbsp;</p>
            <p class="style14">ADD NEW STORE IN INDIA </p>
          <form id="form1" name="form1" method="post" action="">
              <table width="35%" border="0">
                <tr>
                  <td width="25%">Enter State</td>
                  <td width="75%"><label>
                    <input type="text" name="sname" id="sname" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Save" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php
		   if(isset($_POST["submit"]))
 		  {
		  print $prt;
		  }
		  ?>
                  </td>
                </tr>
              </table>
          </form></td>
      </tr>
    </table></td>
  </tr>
  <tr align="left">
    <td height="35" colspan="6"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
    </table></td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
