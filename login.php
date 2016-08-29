<?php session_start();$connect=mysql_connect("localhost","root","") or die(" couldnt connect");
function redirect($url,$permanent = false)
{
	
	header('Location: '.$url);
	exit();
}
function protect($v)
{
$v = mysql_real_escape_string($v);
$v = htmlentities($v,ENT_QUOTES);
$v = trim($v);

return($v);
}

					
$username = $_POST ['username'];$passwd = $_POST ['password'];
if((empty($username))&&(empty($passwd)))
die("<h3><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are not logged in ..&nbsp;&nbsp;<a href='index.php'>Login page</a>");
$username=protect($username);$passwd=protect($passwd);

if($username&&$passwd)
{

mysql_select_db("cecherthala") or die("cudnt connect xampp");
$query = mysql_query("SELECT * FROM userdata WHERE username='$username'");
if($rows = mysql_fetch_assoc($query))
{
$dbusername = $rows['username'];
$dbpasswd = $rows['passwd'];
$dbalumni = $rows['alumni'];
$dbbatch = $rows['batch'];
$dbbranch = $rows['branch'];
$dbdob = $rows['dob'];
$dbfullname = $rows['fullname'];
$dbcollegeid = $rows['collegeid'];


}
if(($username==$dbusername)&&($passwd!=$dbpasswd))
die("<h3><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; username or password incorrect&nbsp;&nbsp;<a href='index.php'>Login page</a>");
if($username!=$dbusername)
die("<h3><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No such user&nbsp;&nbsp;<a href='index.php'>Login page</a>");
if($dbusername==$username&&$dbpasswd==$passwd)
{$_SESSION['username']=$dbusername;
$_SESSION['alumni']=$dbalumni;
$_SESSION['batch']=$dbbatch;
$_SESSION['branch']=$dbbranch;
$_SESSION['fullname']=$dbfullname;
$_SESSION['collegeid']=$dbcollegeid;
$_SESSION['dob']=$dbdob;
 $_SESSION['refresh']=0;

 $ip=$_SERVER['REMOTE_ADDR'];
 $quer = mysql_query("SELECT * FROM online WHERE username='$username'");
 if($que=mysql_fetch_assoc($quer))
 mysql_query("UPDATE online SET ip='$ip',status='1' WHERE username='$username'");
 else
 {
if($dbalumni!=1)
 mysql_query("INSERT INTO online VALUES('','$username','$ip','1','$dbbranch$dbbatch')");
 else
  mysql_query("INSERT INTO online VALUES('','$username','$ip','1','1')");
 }
 if(isset($_SESSION['username']))
	        { 
			redirect("college.php");
			
}

}
else
die("You are not logged in ..<a href='index.php'>Login page</a>");
if(!(isset($_SESSION['username'])))
{die(" please login <a href='index.php'>Login page</a>");}


}

mysql_close();
?>