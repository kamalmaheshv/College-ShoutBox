<?php session_start();
$curbt=$_SESSION['batch'];
$curbr=$_SESSION['branch'];
?>
<style type="text/css">
body {margin:0px;}
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
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="script.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>college</title>
</head>

<body>
<div id='bg'><img src='bgindex.jpg' width="100%" height="100%" /></div>
<div id="contents">
<?php 
   if(!isset($_SESSION['username']))
{die("<h3><br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;login to view page <a href=index.php> Go </a>");}?> <a href="logdout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('logout','','logoff2.jpg',1)"><img src="logoff.jpg" name="logout" width="70" height="57" border="0" id="logout"  align="right"/></a>&nbsp;&nbsp;
  
<?php 
   {echo" <font color='red'>&nbsp;&nbsp;&nbsp;&nbsp;<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello&nbsp;&nbsp;&nbsp;".$_SESSION['fullname'];?>
	   <?php 
	 echo "</h3><center><h4><br>";
	   
	   if($curbt=='2008'&&$curbr=='CS')
   {   echo "<br>2008-2012 CS BATCH&nbsp;<a href='4thyearcs.php' >&nbsp;View page</a>  <br> <br>";
		
	}
     if($curbt=='2008'&&$curbr=='EC')
   {   echo "<br>2008-2012 EC BATCH&nbsp;<a href='4thyearec.php' >&nbsp;View page</a>  <br> <br>";
	
	 
	   }  if($curbt=='2009'&&$curbr=='CS')
   {   echo "<br>2009-2013 CS BATCH&nbsp;<a href='3rdyearcs.php' >&nbsp;View page</a>  <br> <br>";
	
	 
	   }  if($curbt=='2009'&&$curbr=='EC')
   {   echo "<br>2009-2013 EC BATCH&nbsp;<a href='3rdyearec.php' >&nbsp;View page</a>  <br> <br>";
	
	 
	   }  if($curbt=='2010'&&$curbr=='CS')
   {   echo "<br>2010-2014 CS BATCH&nbsp;<a href='2ndyearcs.php' >&nbsp;View page</a>  <br> <br>";
	
	 
	   }  if($curbt=='2010'&&$curbr=='EC')
   {   echo "<br>2010-2014 EC BATCH&nbsp;<a href='2ndyearec.php' >&nbsp;View page</a>  <br> <br>";
	
	
	   }  if($curbt=='2011'&&$curbr=='CS')
   {   echo "<br>2011-2015 CS BATCH&nbsp;<a href='1styearcs.php' >&nbsp;View page</a>  <br> <br>";
	
	
	   }  if($curbt=='2011'&&$curbr=='EC')
   {   echo "<br>2011-2015 EC&nbsp;<a href='1styearec.php' >&nbsp;View page</a>  <br> <br>";
	
	
	   }
    if($_SESSION['alumni']=='1')
   {   echo "<br>Alumni page&nbsp;<a href='alumni.php' >&nbsp;View page</a>  <br> <br>";
	
	 
	   }
 
 echo"<br> Go for chat with &nbsp;<a href='everyone.php' >&nbsp;All in the college</a> </h4><br><br></font>";

   } 
  ?>
<table width="100%" border="0" bordercolor="#FFFFFF" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%" height="52" align="center"><font color="red">CUSAT   </font>   </td>
    <td width="37%" align="center"><font color="red">CEC NEWS </font></td>
    <td width="30%" align="center"><font color="red">PLACEMENT CELL </font></td>
  </tr>
  <tr>
    <td height="100%"  valign="top" align="center"><a href="http://results.cusat.ac.in/" target="_blank"><strong>CUSAT NEWS</strong></a>&nbsp;
      <p><div align="middle"><center><font color="black"> Vth Semester Examination Nov 2009 <br />Revaluation Results published on<br /> 16'th May, 2011<br /><br />B.Tech VIIth Semester Examination Nov 2010<br /> Results published on <br />10'th May, 2011.

</font></center></div>&nbsp;</p></td>
    <td  align="center" valign="top"><a href="http://www.cecherthala.ihrd.ac.in/" target="_blank"><strong>CEC WEBSITE</strong></a>
      <div  align="middle" height="280" width="200"><center>
       <br /><font  color="#FF0000" size="+1.5">S1S2 Combined Semester examinations
          on <br />01.06.2011</font>
          
          <font  color="#FF0000" size="+1.5"><br />
            Vacations for all other batches<br />till July 1st</font></p>
</center></div>&nbsp;</p>&nbsp;</td>
    <td  align="center" valign="top"><a href="http://www.cec4u.com/" target="_blank">TPC WEBSITE</font></a><p><div align="middle"><center>
      <p><font color="black">L & T Recruitment drive
        
        </font></p>
      <p><font color="black">SCHEDULE:<br />
        
        1) 24th May 2011 written test & Group Discussion<br />
        
        2) 25th May 2011 Interviews and final results</font></p>
    </center></marquee>&nbsp;</p>&nbsp;</td>
  </tr>
</table>
</div>
 

</body>
</html>