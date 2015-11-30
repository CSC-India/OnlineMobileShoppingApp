<?php
$a=$_GET["pid"];
$c=mysql_connect("localhost","root","")or die("error in connection");
mysql_select_db("userdatabase");
$q="delete from feedback where Sno=$a";
mysql_query($q,$c);
header("location:showfeedback.php");
?>