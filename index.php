

<script type="text/javascript">
function ll()
{
	onlinne('check.php');
	setInterval("onlinne('check.php')",6500);
	
	
}
var xhtml;
function onlinne(url)
{
	var ggo=0;
	document.getElementById("online").innerHTML="";
	if (window.XMLHttpRequest)
	{
		xhtml=new XMLHttpRequest;
		}
	else if(window.ActiveXObject)
	{xhtml=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	if(xhtml)
	{xhtml.onreadystatechange= processReqChange;
	xhtml.open("GET",  url + '?ggo=' + ggo, true); 
       xhtml.send(null);}
	   else
	   alert("no support");
}
function  processReqChange()
{
if (xhtml.readyState==4)
	{
		if(xhtml.status==200)
	{document.getElementById("online").innerHTML=xhtml.responseText;}
	else
	{}
	}
}
function vvalidate()
{
var x=document.forms["login"]["username"].value
var y=document.forms["login"]["password"].value

if((x==null||x=='')&&(y==null||y==''))
{alert("Please enter username and password"); return false;}
else if (x==null||x=='')
{alert("Please enter username");return false;}
else if (y==null||y=='')
{alert("Please enter password");return false;}
}
</script>
<?php
$ll=$_GET['ll'];
if($ll==1){$ll=0;
echo "<script type='text/javascript'>alert('Logged out successfully');</script>";}
$batch = $_REQUEST['batch'];$branch = $_REQUEST['branch'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cecherthala</title>
<style type="text/css">
<!--
#bg {
width: 100%;
height: 100%;
left: 0px;
top: 0px;
position: absolute;
z-index: 0;
}
#contents {
	width: 100%;
	height: 100%;
	left: 0px;
	top: 0px;
	z-index: 1;
	position: absolute;
}
.cherthala {
	font-size: 24pt;
	font-family: "Courier New", Courier, monospace;
	font-weight: bolder;
	color: #000;
	word-spacing: normal;
	position: static;
	letter-spacing: normal;
	text-align: center;
	/*vertical-align: middle;*/
	font-style: normal;
}
.we {
	font-family: "Poor Richard";
	font-size: large;
	font-style: normal;
	font-weight: 900;
	font-variant: normal;
	letter-spacing: normal;
	text-align: center;
	word-spacing: normal;
	width: auto;
	position: static;
	/*vertical-align: middle;*/
	color: #000064;
	
}
.login {
	font-family: "MS Serif", "New York", serif;
	font-size: 16px;
	font-style: normal;
	line-height: normal;
	font-weight: bold;
	text-align: center;
/*	vertical-align: middle;*/
	width: auto;
	position: static;
	letter-spacing: normal;
	word-spacing: normal;
	white-space: normal;
	padding: 0px;
	height: auto;
}
.regitser {
	font-family: "MS Serif", "New York", serif;
	font-size: 14px;
	font-style: normal;
	text-align: center;
/*	vertical-align: middle;*/
	position: static;
}
.middle {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
	font-style: normal;
	text-align: center;
/*	vertical-align: middle;*/
	
	position: static;
}
.we {
	font-family: Times New Roman, Times, serif;
}
.we strong {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.we {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
.we {
	font-family: Poor Richard;
}
.we strong {
	font-family: Poor Richard;
}
body {margin:0px;}

-->
</style>
</head>

<body bgcolor="#000000"><div id='bg'><img src='bgindex.jpg' width="100%" height="100%" /></div><div id="contents">
<span class="cherthala"><img src="cec.jpg" width="100%" height="140" /></span>
<table width="100%" border="0" cellspacing="0" bordercolor="#FFFFFF"cellpadding="0" height="82%">
  <tr>
    <td width="28%" height="323" valign="top">  <div align="center">
      <p class="we" ><strong><br /><br />Register Here</strong>.</p>
</div><form action='regattempt.php' method='post' name='reg' class='regitser' >
      <p>
        <p><strong>
          <select name="batch">
            <option value"batch">Select batch..</option>
            <option value="2011">2011-2015</option>
            <option value="2010">2010-2014</option>
            <option value="2009">2009-2013</option>
            <option value="2008">2008-2012</option>
            <option value="2007">2007-2011</option>
            <option value="2006">2006-2010</option>
            <option value="2005">2005-2009</option>
            <option value="2004">2004-2008</option>
            
            
          </SELECT>
          </strong> <br><br />
          <strong>
          <select name="branch" >
            <option value"branch">Select branch.</option>
            <option value="CS">CS</option>
            <option value="EC">EC</option>
          </SELECT>
          </strong>
        <p>
        <input type='hidden' name='check' value='1' >
        <input type="submit" value="Register"  style="color: #003C77"/>
        <p>       
    </form>
    </td>
    <td width="30%" valign="top">
    <div align="center">
      <p class="we">&nbsp;<br /><br />Login To Get Connected.</p>
</div><form action='login.php' method='POST' name='login' onsubmit='return vvalidate()'>
      <p class="login"><strong>Username&nbsp;:</strong>
        <input type='text' name='username' />
      </p>
<p class="login"><strong>&nbsp;Password  :</strong>
  <input type='password' name='password' />
  <br>
  
  </span><span class="regitser"><br /> 
    <input type='submit' class="regitser"  style="color: #003C77" value='Login' />
    </span>
<p class="login">
</form>
    </td>
    <td width="16%" align="center"  height="307" valign="top"><p><span class="we"><br /><br /><br />Members online</span></p>
      <div align="center" id="online"><font size="+6"><?php echo "<script type='text/javascript'>ll();</script>";
 ?>
  </font>
    </div>&nbsp;</td>
    <td width="16%" align="center" valign="top"><p><span class="we"><br /><br /><br />
    Birthdays today</span></p>
      <?php	

mysql_connect("localhost","root","");mysql_select_db("cecherthala");
$dobname=array();
	  $tday=date("j");$mday=date("n");$dd=$tday.'/'.$mday;
	 $zzz=0;
	$bbirth=mysql_query("SELECT fullname FROM userdata WHERE fordob='$dd'");
	 while($bb=mysql_fetch_assoc($bbirth))
	 {$dobname[]=array('fullname'=>$bb['fullname']);$zzz=1;}
	echo "<br><br>";
	if($zzz!=1)
	echo "Nil";
	foreach($dobname as $ddd)
		echo ($ddd['fullname']."<br>");
/*	 $ol=mysql_query("SELECT ip FROM online WHERE status='1'");


while($got=mysql_fetch_assoc($ol))
{ $gg=$got['ip'];
	$str = exec("ping -n 1 -w 3 $gg", $input, $result);
if ($result != 0)
{
mysql_query("UPDATE online SET status='0' WHERE ip='$gg'");
}
}
	*/mysql_close(); ?>&nbsp;</td>
  </tr>
  <tr>
    <td height="220" valign="top"  align="center"><p><span class="we"><br />
   <br /> 
    </span></p>
      <p><span class="we"><br />Coming soon</span></p>
    &nbsp;<div id="recents"><font size="+1" color="#FFFFFF">Character assassination</td>
    <td height="220" valign="bottom"><p align="center"><font color="#FF0000"><h2><center>
      </p>
      </center></h2></font>
      <p  align="center"><font color="#FF0000">        COLLEGE  OF ENGINEERING, CHERTHALA <br />
        (Under IHRD)<br />
        ALAPPUZHA  DISTRICT, KERALA<br />
        (Affiliated to Cochin University of Science  and Technology)</font></p></td>
<td width="32%" colspan="2"  align="center" valign="middle"><p><span class="we"><br />
    Recently Spoke</span></p>&nbsp;<div id="recents"><font size="+1" color="#FFFFFF"> <?php 
   
 
$file=fopen("recent.txt","r");
	while(!feof($file))
  {
  echo '<font color=white>'.fgets($file);
  }fclose($file);
	?>  </div> </td>
  </tr>
</table>
</div>
</body>
</html>