<?php
session_start();
 if(isset($_POST["submit"]))
{
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["uid"];
$d=$_POST["pass"];
$e=$_POST["email"];
$f=$_POST["phn"];
$g=$_POST["add"];
$gen=$_POST["gender"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
$dob=$year."-".$month."-".$date;
$con=mysql_connect("localhost","root","") or die("Error in database connection");
mysql_select_db("userdatabase");
$q="insert into register values('$a','$b','$gen','$dob','$c','$d','$e','$f','$g')";
mysql_query($q,$con) or die("error in query".mysql_error());
$p= "<font color='red'>Register Succesfully</font>";
mysql_close($con);
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
-->
</style>
<style type="text/css">
<!--
.style4 {color: #AA0000}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style15 {color: #003399}
.style17 {
	color: #FF0000;
	font-weight: bold;
}
.style18 {color: #990000}
.style19 {font-family: Arial, Helvetica, sans-serif}
.style19 {font-family: Arial, Helvetica, sans-serif}
.style20 {font-family: Arial, Helvetica, sans-serif}
.style20 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<script type="text/javascript">
function abc()
{
	x=document.form1.fname.value
	if(x=="" || x==" " || x== null)
	{
		alert("FirstName Not entered");
		return false;
	}
	y=document.form1.lname.value
	if(y=="" || y==" " || y== null)
	{
		alert("LastName Not entered");
		return false;
	}
   chosen = ""
    len =2
    for (i = 0; i<len; i++)
    {
        if (document.form1.gender[i].checked)
        {
            chosen = document.form1.gender[i].value
        }
    }	
	if (chosen == "")
        {
            alert("Please choose gender")
            return false;
        }
	if(document.form1.uid.value=="")
	{
		alert("User ID Not entered");
		return false;
	}
	if(document.form1.pass.value=="")
	{
		alert("Password Not entered");
		return false;
	}
	if(document.form1.pass.value.length< 5)
	{
		alert("Please Enter Password more than 5 character");
		return false;
	}
	var x=document.forms["form1"]["email"].value
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Not a valid e-mail address");
	  return false;
  	  }
	if(document.form1.phn.value=="")
	{
		alert("Phone number Not entered");
		return false;
	}
	if(document.form1.add.value=="")
	{
		alert("Address Not entered");
		return false;
	}
}
</script>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="357" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+91-9872089188</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right">
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
	print "&nbsp; <a href='signout.php?page=new.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div>    </td>
  </tr>
  <tr>
    <td height="222" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1007" height="233" /></div></td>
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
    <th height="27" colspan="7" scope="col"><table width="100%" height="537" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="16%" height="19" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
        <td rowspan="17" ><form id="form1" name="form1" method="post" action="new.php" >
            <p><strong>Create Your Account </strong></p>
          <p>Your account gives you opporunity to buy moble phone and other accessories. If you already have Account, you can <a href="sig.php">Sign In here</a></p>
          <p align="center" class="style2 style17 style18">FILL THE FORM CAREFULLY</p>
          <table width="61%" border="0" align="center">
              <tr>
                <td width="19%">UserID</td>
                <td width="30%"><input type="text" name="uid" id="uid" /></td>
                <td width="19%"><input type="submit" name="check" id="check" value="Check Availability" /></td>
                <td width="32%"><?php
						if(isset($_POST["check"]))
						{
							$n=$_POST["uid"];
							$c=mysql_connect("localhost","root","");
							mysql_select_db("userdatabase");
							$q="select user_id from register where user_id='$n'";
							$r=mysql_query($q,$c);
							$an=mysql_fetch_array($r);
							if(empty($an[0]))
							{
							print " Available";
							}
							else 
							{
							print "Not Available";
							}
							mysql_close($c);
						}
					?></td>
              </tr>
              <tr>
                <td>Password</td>
                <td colspan="3"><input type="password" name="pass" id="pass" /></td>
              </tr>
              <tr>
                <td colspan="4"><div align="left"><span class="style4">Personal Profile</span></div></td>
              </tr>
              <tr>
                <td>FirstName</td>
                <td colspan="3"><label>
                  <input type="text" name="fname" id="fname" />
                </label></td>
              </tr>
              <tr>
                <td>LastName</td>
                <td colspan="3"><label>
                  <input type="text" name="lname" id="lname" />
                </label></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td colspan="3"><input name="gender" type="radio" id="male" value="male" />
                  Male
                  <input type="radio" name="gender" id="female" value="female" />
                  Female</td>
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td colspan="3"><select name="date" id="date">
                    <?php
                    for($i=1;$i<=31;$i++)
                    {
                   print "<option>$i</option>";
                    }
					?>
                  </select>
                    <select name="month" id="month">
                      <?php
                    for($i=1;$i<=12;$i++)
                    {
                   print "<option>$i</option>";
                    }
					?>
                    </select>
                    <select name="year" id="year">
                      <?php
                    for($i=1901;$i<=2010;$i++)
                    {
                   print "<option>$i</option>";
                    }
					?>
                    </select>                </td>
              </tr>
              <tr>
                <td>Email ID</td>
                <td colspan="3"><label>
                  <input type="text" name="email" id="email" />
                </label></td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td colspan="3"><label>
                  <input type="text" name="phn" id="phn" />
                </label></td>
              </tr>
              <tr>
                <td>Address</td>
                <td colspan="3"><label>
                  <textarea name="add" id="add" cols="45" rows="5"></textarea>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3"><label>
                  <input type="submit" name="submit" id="submit" value="Save"  onclick="return abc();"/>
                  </label>
                    <label>
                    <input type="submit" name="reset" id="reset" value="Cancel" />
                  </label></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="3"><?php
				  if(isset($_POST["submit"]))
				  {
				  print $p;
				  }
                  ?></td>
              </tr>
            </table>
        </form></td>
      </tr>
      <tr>
        <td><div align="left"><a href="detail2.php?cname=nokia" class="style15" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">NOKIA</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=samsung" style="text-decoration:none">SAMSUNG</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=sony ericson" style="text-decoration:none">SONY ERICSON</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=lg" style="text-decoration:none">LG</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=micromax" style="text-decoration:none">MICROMAX</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="detail2.php?cname=blackberry" class="style19" style="text-decoration:none">BLACKBERRY</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=htc" style="text-decoration:none">HTC</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="detail2.php?cname=apple" class="style19" style="text-decoration:none">APPLE</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="detail2.php?cname=karbonn" class="style19" style="text-decoration:none">KARBONN</a></div></td>
      </tr>
      <tr>
        <td><div align="left"><a href="detail2.php?cname=fly" class="style19" style="text-decoration:none">FLY</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=onida" style="text-decoration:none">ONIDA</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=motorola" style="text-decoration:none">MOTOROLA</a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style19"><a href="detail2.php?cname=dell" style="text-decoration:none">DELL</a></div></td>
      </tr>
      <tr>
        <td height="18"><div align="left" class="style19"><a href="acc.php" style="text-decoration:none">ACCESSORIES</a></div></td>
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
        <td colspan="6" scope="row"><div align="center" class="style20"></div></td>
      </tr>
    </table></th>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
