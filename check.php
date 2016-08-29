<?php 
$kk=$_GET['ggo'];


mysql_connect("localhost","root","");mysql_select_db("cecherthala");
$ol=mysql_query("SELECT username FROM online WHERE status='1'");
$flag=0;

while($got=mysql_fetch_assoc($ol))
{ $gg=$got['username'];
	$full=mysql_query("SELECT fullname FROM userdata WHERE username='$gg' LIMIT 0,5");
	$nam=mysql_fetch_assoc($full);
	echo '<br>';
	echo($nam['fullname']);
$flag=1;
}



if($flag==0)
echo "<br> No one is online ";
mysql_close();
?>