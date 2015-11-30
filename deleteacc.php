<?php
$a=$_GET["pid"];
$b=$_GET["tname"];
$c=mysql_connect("localhost","root","")or die("error in connection");
mysql_select_db("userdatabase");
$q="delete from addacc where Sno=$a";
mysql_query($q,$c);
header("location:accdetail.php?tname=$b");
?>