<?php
session_start();
$a=$_GET["pid"];
$b=$_SESSION["companyname"];
$c=mysql_connect("localhost","root","")or die("error in connection");
mysql_select_db("userdatabase");
$q="delete from producttable where product_id=$a";
mysql_query($q,$c);
header("location:detail1.php?cname=$b");
?>