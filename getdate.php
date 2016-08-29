<?php 
session_start();
$bt=$_SESSION['dyna'];$bn=$_SESSION['nn'];
$sesname=$_SESSION['fullname'];
$nowtime = $_GET['ttt'];

mysql_connect("localhost","root","");mysql_select_db("cecherthala");
	
$previ= mysql_query("SELECT username FROM $bt ORDER BY msgid DESC LIMIT 0 , 1");
	$pn=mysql_fetch_assoc($previ);$prevname=$pn['username'];



$nowtime=time();
$datatime = mysql_query("SELECT time FROM notify WHERE sl='$bn'");
	$p=mysql_fetch_assoc($datatime);
	$datattime=$p['time'];
$dif=$nowtime-$datattime;
if(($dif<=7)&&($prevname!=$sesname))
echo ("SOMEBODY SPOKE ");

 mysql_close();

?>