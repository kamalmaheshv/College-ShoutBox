<?php session_start(); ?>
<script type="text/javascript">


function ll()
{
	onlinne('check1.php');
	setInterval("onlinne('check1.php')",9000);

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

function recur()
{
ttt=0;
setInterval("gettime('getdate.php',ttt)",3000);

}
var req;var doesNotSupport=true;
function gettime(url,ttt) 
{     if (window.XMLHttpRequest) { 
        req = new XMLHttpRequest; 
    } else if (window.ActiveXObject) { 
        req = new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
     
     req.open("GET", url + '?ttt=' + ttt,true); 
       req.onreadystatechange = function(){
		   if (req.readyState == 4){
			   numbers.result.value=req.responseText;
		   }
	   }   
	   
      
       req.send(null); 
    }  
       


</script>


<?php

mysql_connect("localhost","root","");mysql_select_db("cecherthala");
$did=0;
$user=$_SESSION['fullname'];
	$bach=$_SESSION['batch'];$brch=$_SESSION['branch'];
$_SESSION['dyna']="4thyearec";$_SESSION['nn']=8;
?>


<script type="text/javascript" src="script.js">

</script>
<?php


if(!isset($_SESSION['username'],$_SESSION['batch'],$_SESSION['branch'],$_SESSION['dob'],$_SESSION['collegeid'],$_SESSION['fullname'],$_SESSION['alumni']))
die("<h2> <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;please login to view the page");
				

function protect($v)
{
$v = mysql_real_escape_string($v);
$v = htmlentities($v,ENT_QUOTES);
$v = trim($v);

return($v);
}
$msg=$_POST['msg'];
$msg = protect($msg);
if(!empty($msg))
{
	{  $time=time();
	
	
	
	for($i=0;$i<90;++$i)
	{$msg1[$i]=$msg[$i];}
	for($i=90;$i<180;++$i)
	$msg2[($i-90)]=$msg[$i];
	
	for($i=180;$msg[$i]!=NULL;++$i)
	$msg3[($i-180)]=$msg[$i];
	
	$msg11=implode("",$msg1);
	if(!empty($msg2))
	$msg22=implode("",$msg2);
	if(!empty($msg3))
	$msg33=implode("",$msg3);
	$msg11=$msg11."\r";
	$msg22=$msg22."\r";
	$msg33=$msg33."\r";
	
	$fmsg=$msg11.$msg22.$msg33;$fg=0;
	$previous = mysql_query("SELECT message FROM 4thyearec WHERE message='$fmsg' ORDER BY msgid DESC LIMIT 0 , 6");
	while($p=mysql_fetch_assoc($previous))
	{$fg=1;}
	if($fg==0)
	{mysql_query("INSERT INTO `4thyearec` VALUES ('' ,'$user','$fmsg','$time','0')");
	mysql_query("UPDATE notify SET time = '$time' WHERE notify.sl = 8");
	$file=fopen("recent.txt","w");
	$val=$user.'<sup>&nbsp;&nbsp;&nbsp;to&nbsp;Fourth year EC&nbsp;&nbsp;</sup><br><br>'.$fmsg;
	fputs($file,$val);
	fclose($file);}

}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><style='text-align:center;color:red;'></style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fourthyear ec</title>

<style type="text/css">
<!--
.center1 {
	text-align: left;
	vertical-align: top;
	position: static;
	overflow: visible;
	padding-right: 15px;
	max-width: 70px;
	width: auto;
	top: 2px;
}
.logout {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
	background-color: #FF9;
	text-align: right;
	vertical-align: middle;
	position: static;
	color: #F0F;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#ECECFF" onLoad="MM_preloadImages('logoff2.jpg')" >
<table width="100%" border="0" cellspacing="2"  height="100%">
  <tr>
    <td height="20" align="left" colspan="2">
    
    <FORM name="numbers">
          
     
<input type="text" id="result" name="result" size="22" style=" background-color: #ECECFF;
 font-family:'Comic Sans MS', cursive ; text-align: left; font-weight:bolder;border: 1px  #FFF;
letter-spacing: 1.5px; text-shadow:#999; color:#F00" disabled="disabled" /> 
&nbsp;&nbsp;
<INPUT TYPE="button" VALUE="<- Click when notified"  onClick="history.go(0)"><label for="result"></label>  
<?php  echo "<script type='text/javascript'  >recur();</script>" ;echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello ".$_SESSION['fullname']; echo("!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");?> <a href="logdout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('logout','','logoff2.jpg',1)"><img src="logoff.jpg" name="logout" width="70" height="57" border="0" id="logout"  align="right"/></a>&nbsp;&nbsp;
   <a href="qwerty.php"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('college','','cec11.jpg',1)"><img src="cec1.jpg" name="college" width="68" height="56" border="0" id="college"  align="right"/></a> </form></td>
  </tr>
  <tr>
    <td width="52%" height="600"  align="left" cellpadding="5"  class="center1">
      <?php 
$perpage=9;$start=$_GET['start'];
if(!$start)
$start=0;
$count=mysql_num_rows(mysql_query("SELECT * FROM 4thyearec"));
	$q = mysql_query("SELECT * 
FROM 4thyearec
ORDER BY msgid DESC 
LIMIT $start , $perpage");
	$speak=array();
	
	while($r=mysql_fetch_assoc($q))
	{
	$speak[]=array('fullname'=>$r['username'],'msgid'=>$r['msgid'],'datetime'=>$r['datetime'],'message'=>$r['message'],'comment'=>$r['comment']);}
			foreach($speak as $s)
		{$on=$s['datetime'];
			$s['datetime']=date('d M Y',$s['datetime']);
		$nnow=time();$diff=$nnow-$on;
		$show="";
		$ff=0;
    if($diff >= 31556926)
	{
     $show = $show.floor($diff/31556926)." year ago";
      $diff = ($diff%31556926);
    }
    if($diff >= 86400 && $ff!=1)
	{$ff=1;
     
	 if(floor($diff/86400)==1)
	 $show = $show.floor($diff/86400)." day ago";
	 else
	 $show = $show.floor($diff/86400)." days ago";
      
	  $diff = ($diff%86400);
    }
    if($diff >= 3600 && $ff!=1)
	{$ff=1;
	if(floor($diff/3600)!=1)
      $show = $show.floor($diff/3600)." hrs ago";
      else
	    $show = $show.floor($diff/3600)." hr ago";

      $diff = ($diff%3600);
    }
    if($diff >= 60 && $ff!=1)
	{$ff=1;
	if(floor($diff/60)!=1)
      $show = $show.floor($diff/60)." mins ago";
      else
	  $show = $show.floor($diff/60)." min ago";
	  $diff = ($diff%60);
    }
	if($ff!=1)
    $show = $show.floor($diff)." secs ago";
   
		
		
echo $s['fullname'].":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$s['message']."<sub><br><br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on&nbsp;&nbsp; ".$s['datetime']."  , ".$show."</sub><br/><hr align=left  width=680 size=2>";
			}
			$prev=$start-$perpage;
			$next=$start+$perpage;
			echo "page:";
	if(!($start<=0))		
	echo "<a href='4thyearec.php?start=$prev'>|prev|&nbsp;</a>";
	
	$j=1;
	for($z=0;$z<$count;$z=$z+$perpage,++$j)
	echo "<a href='4thyearec.php?start=$z'>|$j|&nbsp;</a>";
	if(!($start>=$count-$perpage))
	echo "<a href='4thyearec.php?start=$next'>&nbsp;|next|</a>";?>    <br />
    &nbsp;</td>
    <td width="36%" height="100%" align="left" valign="top"><p>&nbsp;</p>
      <p>Speak:      (type ur text and hit speak)</p>
    <form method="post" name="speak" onSubmit="return limit()" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        
          <span class="center1">
          <textarea name="msg" cols="60" rows="8" style="top:auto"></textarea><br /><br />
        </span><span class="center1">
          <input type="submit" value="Speak" />
        </span>
</form><?php if(($bach!='2008')||($brch!='EC'))
	  print_r("Sorry You Cannot Speak here.. Batch/Branch mismatches...<br> ");?>
      <table width="100%" height="270" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="43" valign="top"> &nbsp;&nbsp;&nbsp;&nbsp;Online now<hr /></td>
          <td rowspan="2"  align="center" valign="top"> <?php	  $dobname=array();
	  $tday=date("j");$mday=date("n");$dd=$tday.'/'.$mday;
	 $zzz=0;
	$bbirth=mysql_query("SELECT fullname FROM userdata WHERE fordob='$dd' AND batch='2008' AND branch='EC'");
	 while($bb=mysql_fetch_assoc($bbirth))
	 {$dobname[]=array('fullname'=>$bb['fullname']);$zzz=1;}
	
	if($zzz==1)
	echo "Birthdays on ".$dd."/2011 : <hr width=78>";
	foreach($dobname as $ddd)
		echo ("<br>".$ddd['fullname']);
	 
	 ?>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><div  align="left"  id="online">&nbsp;<?php echo "<script type='text/javascript'>ll();</script>";mysql_close();
 ?></div>&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;
       
        
    </p></td>
  </tr>
</table>
</body>
</html>