	<?php
session_start();
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
<table width="1002" height="430" align="center" cellpadding="0" cellspacing="0">
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
   <td height="233" colspan="8"><img src="image/bannerforsite.jpg" width="1000" height="233" /></td>
  </tr>

  <?php
  if(isset($_SESSION["uname"]))
	{
 print " <tr>";
 /*  print " <th width=11% height=27 scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=index.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786623.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=9% scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=mobiles.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786804.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=15% scope=col><span class=style11><strong><a href=showacc.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540787021.png  border=0/></a></strong></span></th>";
print"    <th width=22% scope=col><div align=center class=style11><strong><a href=showbyprice.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787137.png border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=showbyword.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext542181746.png  border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=sig.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787428.png  border=0/></a></strong></div></th>";
print "    <th width=15% scope=col><div align=center class=style11><a href=feedback.php style=color:#D40000;TEXT-DECORATION: NONE><img src=image/cooltext540787500.png  border=0></a></strong></div></th>";*/
 print "  <th width='150' scope='col'><a href='index.php'><img src='image/homenew.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope='col'><a href='mobiles.php'><img src='image/brands.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope='col'><a href='showacc.php'><img src='image/accessories.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope='col'><a href='showbyprice.php'><img src='image/search-by-price.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='160' scope='col'><a href='showbyword.php'><img src='image/keyword.png' width='160' height='35' border='0'/></a></th>";
print "  <th width='120' scope='col'><a href='sig.php'><img src='image/myaccount.png' width='120' height='35' border='0'/></a></th>";
print "  <th width='120' scope='col'><a href='feedback.php'><img src='image/feedback.png' width='120' height='35' border='0'/></a></th>";
 print" </tr>";
  }
  elseif(isset($_SESSION["admin"]))
	{
	print "<tr>";
   /* print "<th width=11% height=27 scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=adminpanel.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541423208.png border=0/></a></strong></div>
    </div></th>";
print " <th width=9% scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=addcompany.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541416046.png  border=0/></a></strong></div>
    </div></th>";
  print "  <th width=15% scope=col><span class=style11><strong><a href=addproduct.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541416241.png  border=0/></a></strong></span></th>";
print" <th width=22% scope=col><div align=center class=style11><strong><a href=adminsignup.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416649.png  border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=showfeedback.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416261.png  border=0/></a></strong></div></th>";
   print " <th width=14% scope=col><div align=center class=style11><strong><a href=showquery.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416560.png  border=0/></a></strong></div></th>";
print"    <th width=15% scope=col><div align=center class=style11><strong><a href=addresslocation.php style=color:#D40000;TEXT-DECORATION: NONE><a href=location.php style=color:#D40000;TEXT-DECORATION: NONE><img src=image/cooltext541416506.png  border=0/></a></strong></div></th>";
print  "</tr>";*/
print" <td width='150' height='38'><a href='adminpanel.php'><img src='image/adminpanel.png' width='150' height='35' border='0' /></a></td>";
   print" <td width='150' height='38'><a href='addcompany.php'><img src='image/addbrand.png' width='150' height='35' border='0' /></a></td>";
  print"  <td width='150' height='38'><a href='addproduct.php'><img src='image/addprod.png' width='150' height='35' border='0' /></a></td>";
 print"   <td width='150' height='38'><a href='adminsignup.php'><img src='image/ned.png' width='150' height='35' border='0' /></a></td>";
  print" <td width='150' height='38'><a href='showfeedback.php'><img src='image/v_feed.png' width='150' height='35' border='0'/></a></td>";
print"    <td width='150' height='38'><a href='showquery.php'><img src='image/v_query.png' alt='1' width='150' height='35' border='0'/></a></td>";
 print"   <th width='150' scope='col'><a href='addresslocation.php'><a href='location.php'><img src='image/addnewcity.png' width='150' height='35' border='0' /></a></a></th>";
print"  </tr>";
  }
  else
  {
 print " <tr>";
  /* print " <th width=11% height=27 scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=index.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786623.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=9% scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=mobiles.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786804.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=15% scope=col><span class=style11><strong><a href=showacc.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540787021.png  border=0/></a></strong></span></th>";
print"    <th width=22% scope=col><div align=center class=style11><strong><a href=showbyprice.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787137.png border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=showbyword.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext542181746.png  border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=sig.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787428.png  border=0/></a></strong></div></th>";
print "    <th width=15% scope=col><div align=center class=style11><a href=feedback.php style=color:#D40000;TEXT-DECORATION: NONE><img src=image/cooltext540787500.png  border=0></a></strong></div></th>";
 print" </tr>";*/
  print "  <th width='150' scope=col><a href='index.php'><img src='image/homenew.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope=col><a href='mobiles.php'><img src='image/brands.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope=col><a href='showacc.php'><img src='image/accessories.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='150' scope=col><a href='showbyprice.php'><img src='image/search-by-price.png' width='150' height='35' border='0'/></a></th>";
print "  <th width='160' scope=col><a href='showbyword.php'><img src='image/keyword.png' width='160' height='35' border='0'/></a></th>";
print "  <th width='120' scope=col><a href='sig.php'><img src='image/myaccount.png' width='120' height='35' border='0'/></a></th>";
print "  <th width='120' scope=col><a href='feedback.php'><img src='image/feedback.png' width='120' height='35' border='0'/></a></th>";
 print" </tr>";
  }
  ?>&nbsp;

  <tr>
    <td height="57" colspan="8"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" valign="top" scope="col" ><?php
$tn=$_GET["tname"];
      $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select * from addacc where type_of_accessory='$tn'";
	 $r1=mysql_query($q,$c);
	 if(mysql_num_rows($r1)==0)
	 {
		print	 "<font color='red' > <h4 align='center'>Accessories Not Available</h$></font>";
	}
	else
	{
	print "<table width=800px align='center' bgcolor='white'>";
	print "<tr>";
	print "<td bgcolor='#9AC2E5'>Name of Accessory </td>";
	print "<td  bgcolor='#9AC2E5'>Price </td>";
	print "<td  bgcolor='#9AC2E5'>Image </td>";
	if(isset($_SESSION["uname"]))
	{
	print "<td bgcolor='#9AC2E5'>Features</td>";
	}
	elseif(isset($_SESSION["admin"]))
	{
	  print "<td bgcolor='#9AC2E5'>Delete</td>";
	print "<td bgcolor='#9AC2E5'>Update</td>";
	}
	else 
	{
	print "<td bgcolor='#9AC2E5'>Features</td>";
	}
	
		print "</tr>";
	
	 while($ans1=mysql_fetch_array($r1))
	 {
	    print "<tr>";
		print "<td  ><h4>$ans1[2]</h4></td>";
	 	print "<td  >Rs. $ans1[3] /-</td>";
		print "<td ><a href=mobile/$ans1[4]><img src=mobile/$ans1[4] width=75px height=90px border=0></a></td>";
		if(isset($_SESSION["admin"]))
		{
		print "<td><a href=deleteacc.php?pid=$ans1[1]&tname=$tn style='text-decoration:none'>Delete</a></td>";
		print "<td><a href=updateacc.php?pid=$ans1[1]&tname=$tn style='text-decoration:none'>Update</a></td>";
		}
		else
		{
		print "<td><a href=accdetails.php?pid=$ans1[1] style='text-decoration:none'>Click here To See Detail</a></td>";
		}
		print "</tr>";
	 	}

	  print "</table>";
	  
}
?>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="57" colspan="8"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
