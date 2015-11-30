<?php

session_start();
	$u=$_SESSION["uname"];
	$c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select * from register where user_id='$u'";
	 $r1=mysql_query($q,$c);
	 while ($ans1=mysql_fetch_array($r1))
	 {
	 $fname=$ans1[0];
	 $lname=$ans1[1];
	 $email=$ans1[6];
	 $phn=$ans1[7];
	 $add=$ans1[8];
	 }
	 mysql_close($c);
	 
   
     if(isset($_POST["submit"]))
   {
     
     $fn=$_POST["fname"];
	 $ln=$_POST["lname"];
     $email=$_POST["email"];
	 $phn=$_POST["phn"];
	 $add=$_POST["add"];
	 $u=$_SESSION["uname"];
	 $q="update register set firstname='$fn',lastname='$ln',email_id='$email',phone_number='$phn',address='$add' where user_id='$u'";
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 mysql_query($q,$c);
	 $prt="<font color='red'>Profile updated Successfully</font>";
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
<table width="1041" height="335" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="7" align="center" valign="middle"><div align="right">
      <?php
	if(isset($_SESSION["uname"]))
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
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
    <td height="79" colspan="7" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1000" height="233" /></div></td>
  </tr>
   <tr>
    <th width="15%" height="27" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="index.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/homenew.png" width="150" height="35" /></a></strong></div>
    </div></th>
    <th width="15%" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="mobiles.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/brands.png" width="150" height="35" /></a></strong></div>
    </div></th>
    <th width="15%" scope="col"><span class="style11"><strong><a href="showacc.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/accessories.png" width="150" height="35" /></a></strong></span></th>
    <th width="15%" scope="col"><div align="center" class="style11"><strong><a href="showbyprice.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/search-by-price.png" width="150" height="35" /></a></strong></div></th>
    <th width="15%" scope="col"><div align="center" class="style11"><strong><a href="showbyword.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/keyword.png" width="160" height="35" /></a></strong></div></th>
    <th width="11%" scope="col"><div align="center" class="style11"><strong><a href="sig.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/myaccount.png" width="120" height="35" /></a></strong></div></th>
    <th width="14%" scope="col"><div align="center" class="style11"><strong><a href="feedback.php" style="color:#D40000;TEXT-DECORATION: NONE"><strong><a href="feedback.php" style="color:#D40000;TEXT-DECORATION: NONE"><img src="image/feedback.png" width="120" height="35" /></a></strong></div></th>
  </tr>
   <tr>
     <th height="27" colspan="7" scope="col"><table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
       <tr>
         <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
             <p class="style14 style15">UPDATE PROFILE </p>
           <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
               <table width="54%" border="0">
                 <tr>
                   <td>FirstName</td>
                   <td colspan="3"><label>
                     <input name="fname" type="text" id="fname" value="<?php print $fname; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>LastName</td>
                   <td colspan="3"><label>
                     <input name="lname" type="text" id="lname" value="<?php print $lname; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Email ID</td>
                   <td colspan="3"><label>
                     <input name="email" type="text" id="email" value="<?php print $email; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Phone Number</td>
                   <td colspan="3"><label>
                     <input name="phn" type="text" id="phn" value="<?php print $phn; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Address</td>
                   <td colspan="3"><label>
                     <textarea name="add" id="add" cols="45" rows="5"><?php print $add; ?></textarea>
                   </label></td>
                 </tr>
                 <tr>
                   <td></td>
                   <td><label>
                     <input type="submit" name="submit" id="submit" value="Update" />
                     <a href="welcome.php">
                       <input type="button" name="button" id="button" value="Cancel" />
                     </a> </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><?php
            if(isset($_POST["submit"]))
			{
			print "$prt";
			}
			?>                   </td>
                 </tr>
               </table>
           </form>
           <br />
             <center>
               <a href="welcome.php" >Click Here</a> to go back to homepage
             </center></td>
       </tr>
     </table></th>
   </tr>
   <tr>
     <th height="27" colspan="7" scope="col"><table width="75%" align="center" cellpadding="0" cellspacing="0">
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
