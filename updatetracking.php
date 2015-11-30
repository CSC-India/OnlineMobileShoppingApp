<?php
session_start();

if(!isset($_SESSION["admin"]))
	{
		header("location:sig.php");
	}
	 if(isset($_POST["submit"]))
   {
     $on=$_POST["orderno"];
     $status=$_POST["status"];
    
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="insert into trackorder(orderno,status) values ('$on','$status')";
	 mysql_query($q,$c);
	 $prt="<font color='red'>Order Added</font>";
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
.style16 {color: #990000}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="900" height="370" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><?php
	if(isset($_SESSION["admin"]))
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
    <td height="233" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite1.jpg" width="900" height="233" /></div></td>
  </tr>
  
  <tr>
    <th width="15%" height="27" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="adminpanel.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/adminpanel.png" width="150" height="35" /></a></strong></div>
    </div></th>
    <th width="15%" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="addcompany.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/addbrand.png" width="150" height="35" /></a></strong></div>
    </div></th>
    <th width="16%" scope="col"><span class="style11"><strong><a href="addproduct.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/addprod.png" width="150" height="35" /></a></strong></span></th>
    <th width="15%" scope="col"><div align="center" class="style11"><strong><a href="adminsignup.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/ned.png" width="150" height="35" /></a></strong></div></th>
    <th width="16%" scope="col"><div align="center" class="style11"><strong><a href="showfeedback.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/v_feed.png" width="150" height="35" /></a></strong></div></th>
    <th width="23%" scope="col"><div align="left" class="style11"><strong><a href="showquery.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/v_query.png" width="150" height="35" /></a></strong></div></th>
  </tr>
  <tr>
    <th height="27" colspan="6" scope="col"><table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
      <?php
	   $c=mysql_connect("localhost","root","");
			  mysql_select_db("userdatabase");
			  $q="select * from ordertable";
			  $r=mysql_query($q,$c);
			if(mysql_num_rows($r)==0)
			{
				print "<h2>Currently No orders. Check after some time </h2>";
			}
	  		mysql_close($c);
	  
	  ?>
      <div id="showresults">
        <td height="29" valign="top" scope="col" ><h2 class="style16"> ORDER STATUS</h2>
            <form id="form1" name="form1" method="post" action="">
              <table width="500" border="0" cellspacing="0" cellpadding="5">
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
                      <option>You Product Item Ready for shipment</option>
                      <option>You Product Item is In Transit</option>
                      <option>You Product Item Delivered</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Update Status" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php if(isset($_POST["submit"]))
		  	{
				print $prt;
				}
			 ?>
                    &nbsp;</td>
                  
                </tr>
              </table>
            </form>
              </div>
          <p>&nbsp;</p></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="6" scope="col"><table width="75%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
        <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
        <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
        <td><div align="center" class="style3 style11"><a href="center.php" style="text-decoration:none">Services</a></div></td>
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

