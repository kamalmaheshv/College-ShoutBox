<?php session_start();$uu=$_SESSION['username'];

mysql_connect("localhost","root","");mysql_select_db("cecherthala");
mysql_query("UPDATE online SET status='0' WHERE username='$uu'");
unset($_SESSION['username']);unset($_SESSION['batch']);unset($_SESSION['branch']);
unset($_SESSION['dob']);unset($_SESSION['alumni']);unset($_SESSION['collegeid']);unset($_SESSION['fullname']);
if(!isset($_SESSION['username'],$_SESSION['batch'],$_SESSION['branch'],$_SESSION['dob'],$_SESSION['collegeid'],$_SESSION['fullname'],$_SESSION['alumni'])){
header('Location: index.php?ll=1');



}
else 
echo" session error";
?>