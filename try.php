
<?php
session_start();
	if(isset($_COOKIE["mycookie"]))
	{
	$_SESSION["uname"]=$_COOKIE["mycookie"];
	header("location:welcome.php");
	}
	if(isset($_SESSION["uname"]))
	{
	header("location:welcome.php");
	}
   if(isset($_POST["submit"]))
   {
     $n=$_POST["uid"];
	 $p=$_POST["pass"];
	 $c=mysql_connect("localhost","root","") or die ("Error in connection");
	 mysql_select_db("userdatabase");
	 $q="select user_id from register where user_id='$n' and password='$p'";
	 $q1="select username from admintable where username='$n'";
	 $r1=mysql_query($q1,$c);
	 $ans1=mysql_fetch_array($r1);
	 if(!empty($ans1[0]))
	 {
	 $_SESSION["admin"]=$n;
	 header("location:adminpanel.php");
	 }
	 $r=mysql_query($q,$c);
	 $ans=mysql_fetch_array($r);
	 if(empty($ans[0]))
	 {
	   $prt="<font color='red'>Wrong Username/Password</font>";
	 }
	 else 
	 {
	 if(isset($_POST["remember"]))
	 {
	 setcookie("mycookie",$n,time()+24*60*60*7);
	 }
	 	$_SESSION["uname"]=$n;
	   if(isset($_SESSION["id"]))
		{
 	 	  $sid=$_SESSION["sid"];
	 header("location:shoppingcart.php?sid=$sid");
		}
	else
	{
	header("location:welcome.php");
	}	
	   mysql_close($c);
	 
	 }
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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {color: #003399}
.style17 {color: #E2C280}
.style18 {color: #990000}
.style20 {font-size: medium}
.style22 {color: #666666}
-->
</style>
<script language="JavaScript">
var Rollpic1 = "image/adf.jpg";
var Rollpic2 = "image/preBookNow.jpg";
var Rollpic3 = "image/preBookNowNokia.jpg";
var Rollpic4 = "image/adf.jpg";
var PicNumber=1;
var NumberOfPictures=4;
var HowLongBetweenPic=3;
function SwitchPic(counter){

	if(counter < HowLongBetweenPic){
	
		counter++;
		window.status="Switch picture at 5 : "+counter+" PicNumber: "+PicNumber+" ";
		document.roll.src = eval("Rollpic" + PicNumber);
		CallSwitchPic=window.setTimeout("SwitchPic("+counter+")",1500); 
		
		}
		
		else{
			if(PicNumber < NumberOfPictures){
				PicNumber++;
				SwitchPic(0);
			}
		else{
				PicNumber=1;
				SwitchPic(0);
				}
	}
}
</script>	
</head>

<body background="image/b1.jpg" onload="SwitchPic(0)">
<table width="1002"  align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="right" valign="middle"> <span class="style22">24x7 Customer service:+91-9872089188</span></td>
  </tr>
  <tr>
    <td height="27" colspan="7" align="right" valign="middle">      
      
        <?php
	if(!isset($_SESSION["uname"]))
	{
	print "<font color=gray> Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none; color:gray'>SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none;color:gray'>Register</a></font>";
	}
	else 
	{
	print "<span class='style22'>Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php?page=index.php' style='text-decoration:none;color:gray'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none;color:gray'>Signout</a></span>";
	
	}
	?>    </td>
  </tr>
  <tr>
    <td height="222" colspan="7" align="center" valign="top"><img src="image/bannerforsite.jpg" width="1000" height="233" /></td>
  </tr>
  
  <tr>
    <td height="26" colspan="7" align="right" scope="col" >
  <form id="form2" name="form2" method="get" action="http://www.google.com/search">
	   
	      <input type="text" name="q" id="q" />
	      <input type="submit" name="submit3" id="submit3" value="Google Search" />
    </form>	</td>
  </tr>
  <tr>
    <th width="150" height="27" scope="col"><a href="index.php"><img src="image/homenew.png" width="150" height="35" border="0" /></a></th>
    <th width="150" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="150" height="35" border="0" /></a></th>
    <th width="150"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="150" height="35" border="0" /></a> </th>
    <th width="160" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="160" height="35" border="0" /></a></th>
    <th width="120"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="120" height="35" border="0" /></a></th>
    <th width="120" align="left"  scope="col"><a href="feedback.php"><img src="image/feedback.png" width="120" height="35" border="0" /></a></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="15%" height="22" valign="middle" bgcolor="#A0A0A4"><span class="style4">BRAND</span></th>
        <td width="58%" rowspan="17" valign="top" scope="col"><a href="mobiles.php" ><img src="image/preBookNow.jpg" alt="e"  name="roll" width="99%" height="64%"  border="0" id="roll"/></a>
            <p align="justify" class="style11">The one device you always carry around is now getting smaller and better. All the latest and popular GSM mobiles, CDMA mobiles and PDA's are categorized according to their brands and features. Mobile accessories including Bluetooth devices, Chargers, Carry Cases, Data cables etc are also listed out suiting your requirements. </p>
          <p align="justify" class="style11">A directory of mobile websites, this is a good site to have on your favorites list. It will keep you from needing to add the mobile Yellow Pages,Froogle, and other handy websites to your favorites. </p></td>
        <th width="27%" rowspan="17" valign="top" scope="col" ><form id="form1" name="form1" method="post" action="">
            <div align="center" class="style1 style2 style13 style5 style18" >SIGN IN</div>
          <form id="form1" name="form1" method="post" action="">
              <table width="100%" height="104" border="0">
                <tr>
                  <td width="36%"><div align="left"><span class="style11">User ID</span></div></td>
                  <td width="64%"><label>
                    <input type="text" name="uid" id="uid" />
                  </label></td>
                </tr>
                <tr>
                  <td><div align="left"><span class="style11">Password</span></div></td>
                  <td><label>
                    <input type="password" name="pass" id="pass" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2"><label>
                    <input type="checkbox" name="remember" id="remember" />
                    Remember Me</label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="submit" id="submit" value="Sign In" /></td>
                </tr>
                <tr>
                  <td colspan="2"><?php
				  if(isset($_POST["submit"]))
				  {
				  print $prt;
				  }
                  ?></td>
                </tr>
              </table>
            <table width="100%" height="75" border="0">
                <tr>
                  <td ><p class="style11">New to Mobileworld? It's free and easy</p>
                      <label></label></td>
                </tr>
                <tr>
                  <td><div align="center"><a href="new.php"><img src="image/sign4.jpg" alt="e" width="129" height="37" border="0" /></a></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
          </form></th>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=nokia" class="style15" style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">NOKIA</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=samsung" style="text-decoration:none">SAMSUNG</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=sony ericson" style="text-decoration:none">SONY ERICSON</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=lg" style="text-decoration:none">LG</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=micromax" style="text-decoration:none">MICROMAX</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=blackberry" class="style11" style="text-decoration:none">BLACKBERRY</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=htc" style="text-decoration:none">HTC</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=apple" class="style11" style="text-decoration:none">APPLE</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=karbonn" class="style11" style="text-decoration:none">KARBONN</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=fly" class="style11" style="text-decoration:none">FLY</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=onida" style="text-decoration:none">ONIDA</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=motorola" style="text-decoration:none">MOTOROLA</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=dell" style="text-decoration:none">DELL</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="showacc.php" style="text-decoration:none">ACCESSORIES</a></div></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <th height="108" colspan="6" scope="col"><a href="mobiles.php" class="style17" style="text-decoration:none">
          <marquee direction="left" behavior="alternate" >
          <img src="image/1.jpg" alt="g" width="140" height="100" border="0" /><img src="image/3.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/4.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/5.jpg" alt="g" width="140" height="100" border="0" /><img src="image/8.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/9.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/10.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/11.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/15.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/17.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/18.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/9300.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/9780.jpg" alt="g" width="140" height="100" border="0" /> <img src="image/9800.jpg" alt="g" width="140" height="100" border="0" />
          </marquee>
        </a></th>
      </tr>
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
        <td colspan="6" scope="row">&nbsp;</td>
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
