<?php  session_start();$alu=$_SESSION['alumni'];
if($alu!=1)
$chk=$_SESSION['branch'].$_SESSION['batch'];
else
$chk=1;
$u=$_SESSION['username'];
$kk=$_GET['ggo'];


mysql_connect("localhost","root","");mysql_select_db("cecherthala");
$ol=mysql_query("SELECT username FROM online WHERE status='1' AND bb='$chk' AND username NOT LIKE '$u' ");
$flag=0;

while($got=mysql_fetch_assoc($ol))
{ $gg=$got['username'];
	$full=mysql_query("SELECT fullname FROM userdata WHERE username='$gg'");
	$nam=mysql_fetch_assoc($full);echo '<br>';
	echo($nam['fullname']);
$flag=1;
}



if($flag==0)
echo "<br> No one is online ";
mysql_close();
?>