<?php

session_start();
	
	$c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select * from trackorder ";
	 $r1=mysql_query($q,$c);
	 while ($ans1=mysql_fetch_array($r1))
	 {
	 $orderno=$ans1[1];
	 $status=$ans1[2];
	 }
	 mysql_close($c);
	 
   
     if(isset($_POST["submit"]))
   	{
	
     $o=$_POST["orderno"];
     $s=$_POST["status"];
	  $c=mysql_connect("localhost","root","") or die ("Error in connection");
	  mysql_select_db("userdatabase");
	 $q="select * from trackorder where orderno=$o";
	 $r1=mysql_query($q,$c) or die ("Error in query");;
	 if(mysql_num_rows($r1)==0)
	 {
	 	 $q="insert into trackorder(orderno,status) values($o,'$s')";
	 }
	 else
	 {
		 $q="update trackorder set status='$s' where orderno=$o";
	 }
	  mysql_query($q,$c) or die ("Error in query2" . mysql_error());
	 $prt="<font color='red'>Order updated Successfully</font>";
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
<table width="902" height="392" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="7" align="center" valign="middle"><div align="right">
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
    <td height="233"  colspan="7"  ><img src="image/bannerforsite1.jpg" width="900" height="233" /></td>
  </tr>
  <tr align="left">
    <td width="150" height="35"><a href="adminpanel.php"><img src="image/adminpanel.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="addsompany.php"><img src="image/addbrand.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="addproduct.php"><img src="image/addprod.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="adminsignup.php"><img src="image/ned.png" width="150" height="35" border="0" /></a></td>
   <td width="150" height="35"><a href="showfeedback.php"><img src="image/v_feed.png" width="150" height="35" border="0" /></a></td>
    <td width="150" height="35"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="150" height="35" border="0"/></a></td>
  </tr>
  <tr align="left">
    <td height="35" colspan="6"><table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
            <p class="style14 style15">UPDATE PRODUCT </p>
          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table width="56%" border="0">
                <tr>
                  <td>Order No.</td>
                  <td><label>
                    <select name="orderno" id="orderno">
                      <?php
			  $c=mysql_connect("localhost","root","");
			  mysql_select_db("userdatabase");
			  $q="select orderno from ordertable";
			  $r=mysql_query($q,$c);
			  while($ans=mysql_fetch_array($r))
			  {
			  print "<option>$ans[0]</option>";
			  }
			  mysql_close($c);
			  ?>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td><label>
                    <select name="status" id="status">
                      <option>Money not received</option>
                      <option>Your Product Item Ready for shipment</option>
                      <option>Your Product Item is In Transit</option>
                      <option>Your Product Item Delivered</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Update" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php
            if(isset($_POST["submit"]))
			{
			print "$prt";
			}
			?>
                  </td>
                </tr>
              </table>
          </form>
          <p class="style14 style15">&nbsp;</p>
          <p class="style14 style15">&nbsp;</p></td>
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
