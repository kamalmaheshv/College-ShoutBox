<?php session_start();

mysql_connect("localhost","root","");mysql_select_db("cecherthala");
$did=0;$user=$_SESSION['fullname'];
function protect($v)
{
$v = mysql_real_escape_string($v);
$v = htmlentities($v,ENT_QUOTES);
$v = trim($v);

return($v);
}
	$bach=$_SESSION['batch'];$brch=$_SESSION['branch'];
$_SESSION['dyna']="allspeak";$_SESSION['nn']=0;
function createDropdown($arr, $frm)
{
echo '<select name="'.$frm.'" id="'.$frm.'"><option value="">Select one…</option>';	
foreach ($arr as $key => $value) 
{ 
	echo '<option value="'.$value.'">'.$value.'</option>';
}	 
echo '</select>';
}

$fun = mysql_query("SELECT fullname 
FROM userdata
WHERE fullname NOT LIKE '$user' ORDER BY fullname ASC ");
	$name=array();
	$previousact = mysql_query("SELECT source,action,target FROM actions ORDER BY id DESC LIMIT 0 , 1");
	while($pact=mysql_fetch_assoc($previousact))
	{$prevactsrc=$pact['source'];$prevactact=$pact['action'];$prevacttgt=$pact['target'];}
	
	while($r=mysql_fetch_assoc($fun))
	{
	$name[]=$r['fullname'];
	
	}
	
$action = array ('Smile on','Send a flower to','Cheer up post by','Hate post by','Give a kick on');
	  
	  	  
	  $aname=$_REQUEST['name'];$act=$_REQUEST['action'];$did=$_POST['did'];$src=$_SESSION['fullname'];
	 $aname=protect($aname);$act=protect($act);$src=protect($src);
	 $actrpt=0;
	  $acterror=1;
	  for($ii=0;$ii<=4;++$ii)
	  {if($action[$ii]==$act)
		  $acterror=0;
		  }
	  
	  $srcchk=mysql_query("SELECT fullname FROM userdata WHERE fullname='$src'");
	  $srcerror=1;
	  while($gsrctchk=mysql_fetch_assoc($srcchk))
	  {
		  $srcerror=0;
		  }
		  $tgtchk=mysql_query("SELECT fullname FROM userdata WHERE fullname='$aname'");
	  $tgterror=1;
	  while($gtgtchk=mysql_fetch_assoc($tgtchk))
	  {
		  $tgterror=0;
		  }
		  
	  if((strcmp($prevactsrc,$src)==0)&&(strcmp($prevactact,$act)==0)&&(strcmp($prevacttgt,$aname)==0))
	  $actrpt=1;
	
if($did==1)
{if(($actrpt!=1)&&($act!=NULL)&&($aname!=NULL)&&($srcerror==0)&&($tgterror==0)&&($acterror==0))
{
	mysql_query("INSERT INTO actions (
source ,
action ,
target ,
id
)
VALUES (
'$src', '$act', '$aname', NULL
);");}}
?>

<script type="text/javascript">


function recur()
{
ttt=0;
setInterval("gettime('getdate.php',ttt)",2000);

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


if(!isset($_SESSION['username'],$_SESSION['batch'],$_SESSION['branch'],$_SESSION['dob'],$_SESSION['collegeid'],$_SESSION['fullname'],$_SESSION['alumni']))
die("<h2><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;please login to view the page ");
					


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
	$previous = mysql_query("SELECT message FROM allspeak WHERE message='$fmsg' ORDER BY msgid DESC LIMIT 0 , 6");
	while($p=mysql_fetch_assoc($previous))
	{$fg=1;}
	if($fg==0)
	{mysql_query("INSERT INTO `allspeak` VALUES ('' ,'$user','$fmsg','$time','0')");
	mysql_query("UPDATE notify SET time = '$time' WHERE notify.sl = 0");
	$file=fopen("recent.txt","w");
	$val=$user.'<sup>&nbsp;&nbsp;&nbsp;to&nbsp;all&nbsp;&nbsp;</sup><br><br>'.$fmsg;
	fputs($file,$val);
	fclose($file);}

}


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="script.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CE CHERTHALA EVERYONE</title>
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
-->
</style>


</head>

<body bgcolor="#ECECFF" onLoad="MM_preloadImages('logoff2.jpg')" >
<table width="100%" border="0"  height="100%">
  <tr>
 <td height="20" align="left" colspan="2">
    
    <FORM name="numbers">
      <input type="text" id="result" name="result" size="22"  style=" background-color: #ECECFF;
 font-family:'Comic Sans MS', cursive ; text-align: left; font-weight:bolder;border: 1px  #FFF;
letter-spacing: 1.5px; text-shadow:#999; color:#F00" disabled="disabled" />
      &nbsp;&nbsp;
<INPUT TYPE="button" VALUE="<- Click when notified"  onClick="history.go(0)"><label for="result"></label>  
<?php  echo "<script type='text/javascript'>recur();</script>" ;echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello ".$_SESSION['fullname']; echo("!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");?> <a href="logdout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('logout','','logoff2.jpg',1)"><img src="logoff.jpg" name="logout" width="70" height="57" border="0" id="logout"  align="right"/></a>&nbsp;&nbsp;
    <a href="qwerty.php"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('college','','cec11.jpg',1)"><img src="cec1.jpg" name="college" width="68" height="56" border="0" id="college"  align="right"/></a></form></td>
  </tr>
  <tr>
    <td width="52%" height="600"  align="left" cellpadding="5"  class="center1"><br />
      <?php 
	  
	  
$perpage=9;$start=$_GET['start'];
if(!$start)
$start=0;
$count=mysql_num_rows(mysql_query("SELECT * FROM allspeak"));
	$q = mysql_query("SELECT * 
FROM allspeak
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
	echo "<a href='everyone.php?start=$prev'>|prev|&nbsp;</a>";
	
	$j=1;
	for($z=0;$z<$count;$z=$z+$perpage,++$j)
	echo "<a href='everyone.php?start=$z'>|$j|&nbsp;</a>";
	if(!($start>=$count-$perpage))
	echo "<a href='everyone.php?start=$next'>&nbsp;|next|</a>";?>    
    &nbsp;  <br /> </td>
    <td width="36%" height="100%" align="left" valign="top"><p>
      <p>Speak:
        
        (type ur text and hit speak)          
      <form method="post" name="speak" onSubmit="return limit()" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        
          <span class="center1">
          <textarea name="msg" cols="60" rows="8"  style="top:auto"></textarea><br /><br />
        </span><span class="center1">
          <input type="submit" value="Speak" />   </span>
</form>
      <form id="form1" name="form1" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">	<label  for="action">Select action:&nbsp;&nbsp;</label>
<?php createDropdown($action, 'action'); ?>
<label for="name">&nbsp;&nbsp;whom?:&nbsp;&nbsp;</label>
<?php createDropdown($name, 'name'); ?>
&nbsp;<input type='hidden' name='did' value='1'/>
&nbsp;
<input name="do" type="submit" value="do"  />
      </form>
      <?php $perpage1=7;$start1=$_GET['start1'];
if(!$start1)
$start1=0;
$count1=mysql_num_rows(mysql_query("SELECT * FROM actions"));
	$q1 = mysql_query("SELECT * 
FROM actions ORDER BY id DESC
LIMIT $start1 , $perpage1");
	$speak1=array();
	
	while($r1=mysql_fetch_assoc($q1))
	{
	$speak1[]=array('source'=>$r1['source'],'action'=>$r1['action'],'target'=>$r1['target']);}
		foreach($speak1 as $s1)
		{if($s1['action']=='Smile on') $s1['action']='recieved a smile from :-)';
			if($s1['action']=='Send a flower to') $s1['action']='recieved a flower from';
			if($s1['action']=='Cheer up post by') $s1['action']='\'I like ur post\' says';
			if($s1['action']=='Hate post by') $s1['action']='\'I hate ur post\' says';
			if($s1['action']=='Give a kick on') $s1['action']='got a kick from';
echo $s1['target'].'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>'.$s1['action'].'&nbsp;&nbsp;'.$s1['source'].'</sup><br><br>';
			
			}
			$prev1=$start1-$perpage1;
			$next1=$start1+$perpage1;
			echo "page:";
	if(!($start1<=0))		
	echo "<a href='everyone.php?start1=$prev1'>|prev|&nbsp;</a>";
	
	$j1=1;
	for($z1=0;$z1<$count1;$z1=$z1+$perpage1,++$j1)
	echo "<a href='everyone.php?start1=$z1'>|$j1|&nbsp;</a>";
	if(!($start1>=$count1-$perpage1))
	echo "<a href='everyone.php?start1=$next1'>&nbsp;|next|</a>";
	mysql_close();?>    
      
    
    </td>
  </tr>
</table>
</body>
</html>