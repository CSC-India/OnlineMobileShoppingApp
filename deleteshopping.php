<?php
session_start();
$a=$_GET["pid"];
$sid=$_SESSION["sid"];
$c=mysql_connect("localhost","root","")or die("error in connection");
mysql_select_db("userdatabase");
$q="delete from shoppingtable where product_id=$a and sessionid='$sid'";
mysql_query($q,$c);
header("location:shoppingcart.php");
?>