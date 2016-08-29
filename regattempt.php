<?php mysql_connect("localhost","391172_darkkamal","achilees2de47");

function protect($v)
{
$v = mysql_real_escape_string($v);
$v = htmlentities($v,ENT_QUOTES);
$v = trim($v);

return($v);
}
?>
<html>
<head>

<title>Registration</title>
<style type="text/css">
.regitser {line-height:0px;
	font-family: "MS Serif", "New York", serif;
	font-size: 14px;
	font-style: normal;
	text-align: left;
	vertical-align: top;
}
.cherthala {
	font-size: 24pt;
	font-family: "Comic Sans MS", cursive;
	font-weight: bolder;
	color: #900;
	word-spacing: normal;
	position: static;
	letter-spacing: normal;
	text-align: center;
	vertical-align: middle;
	font-style: normal;
}.red {
	color: #F00;
}

.help {	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
	font-style: italic;
}
.error {
	font-size: 14px;
	font-style: normal;
	font-weight: bolder;
	color: #F00;
	text-decoration: none;
	text-align: left;
	vertical-align: top;
	position: static;
	top: 2px;
}
</style>

</head>

<body bgcolor="#CFCFE7">
<table width="100%" height="100%" border="1" cellpadding="8" cellspacing="6">
  <tr>
    <td width="19%" class="cherthala">Register</td>
    <td width="81%"><p>&nbsp;</p>
    <p>&nbsp;</p>
    <span class="error">
    <?php 
	

$check=$_POST['check'];
if($check==1)
{$batch = $_REQUEST['batch'];$branch = $_REQUEST['branch'];

if(empty($batch)||empty($branch))
die(" Batch and Branch not selected <a href='index.php'>  go </a>");
if(($batch=="Select batch..")&&($branch=="Select branch."))
die("Please select batch and branch <a href='index.php'>go back</a>");
else if($batch=="Select batch..")
die("Please select batch.. <a href='index.php'>go back</a>");
else if($branch=="Select branch.")
die("Please select branch.. <a href='index.php'>go back</a>");
}
else
{$branch =$_POST['branch'];
	$batch=$_POST['batch'];$branch=protect($branch);$batch=protect($batch);}
if(empty($batch)||empty($branch))
die(" Batch and Branch not selected <a href='index.php'>  GO SELECT </a>");
	$username = $_POST ['username'];
	$fullname = $_POST ['fullname'];
	$passwd = $_POST ['passwd'];	
	
	$gender=$_REQUEST['gender'];
	$dobday=$_REQUEST['dobday'];
	$dobmonth=$_REQUEST['dobmonth'];
	$dobyear=$_REQUEST['dobyear'];
	$username=protect($username);$fullname=protect($fullname);$passwd=protect($passwd);$gender=protect($gender);$dobday=protect($dobday);$dobmonth=protect($dobmonth);$dobyear=protect($dobyear);
	$today=getdate();
$alumni=0;
if($gender==1)
$gender='male';
if($gender==2)
$gender='female';
if(($today['year']-$batch)>=4)
{    $alumni=1;
if(($today['year']-$batch)==4)
if((($today['mon'])-4)<=0)
$alumni=0;
}

	$connect=mysql_connect("localhost","391172_darkkamal","achilees2de47") or die(" couldnt connect");
  mysql_select_db("cecherthala_99k_cecherthala") or die("cudnt connect xampp");
$query = mysql_query("SELECT * FROM userdata WHERE username='$username'");
$no=0;
if(!empty($username))
{
if($rows = mysql_fetch_assoc($query))
{
echo " username already taken.. please choose another.... ";
$no=1;
}
else 
{if(!(ctype_lower($username)))
	{
		echo"<br> username modified(note: only lowercase allowed)";
     $username=strtolower($username);
	 $no=1;
	 }
	 
	 
} }
	
if((sizeof($username)<=25)&&(sizeof($fullname)<=25)&&(sizeof($passwd)<=25)&&(!empty($fullname))&&(!empty($passwd))&&(!empty($username))&&($dobday!=-1)&&($dobmonth!=-1)&&($dobyear!=-1)&&($no!=1))
																																																	{
	
$dob=$dobday.'-'.$dobmonth.'-'.$dobyear;	
$fordob=$dobday.'/'.$dobmonth;

mysql_query("INSERT INTO userdata VALUES('','$username','$passwd','$fullname','$batch','$branch','$dob','0','$alumni','$fordob','$gender')");	
die("<h4> Registered Successfully... go back and login.... <a href='index.php'>CLICK</a>");}
else
{
if($check==0)
{
	 
	
if(empty($username))
echo" <br> Username empty.. "; 
if(empty($passwd))
echo" <br> Password empty.. ";
 if(empty($fullname))
echo" <br> Fullname empty.. ";	
$data = explode('a',$fullname);
$sp=0;
for($i=0;$data[$i]!=NULL;++$i)
{
	if((($data[$i]<'A')||($data[$i]>'z'))||(($data[$i]>'Z')&&($data[$i]<'a')))
         $sp=1;	
}
if($sp==1)
echo" <br> Special characters and numbers not allowed in fullname.. ";
if($gender==-1)
echo "<br> Select gender ";
if(($dobday==-1)||($dobyear==-1)||($dobmonth==-1))
 echo"  <br> Date of birth empty.. ";
if((sizeof($username))>25)
echo"<br> Username maximum length exceeds 25..";
 if((sizeof($passwd))>25)
echo"<br> Password maximum length exceeds 25..";
 if((sizeof($fullname))>25)
echo"<br> Fullname maximum length exceeds 25..";


}}
	?>
    </span>

<form action='regattempt.php' method='POST' name='regf' >
  <p><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif">Username<span class="red">*</span></font><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif"><span class="help">(max 25)</span></font></font><font size="3" face="Georgia, Times New Roman, Times, serif"> &nbsp;:
  <input type='text' name='username' class='regitser' maxlength="25" value='<?php echo($username) ?>'/> 
    
    
    <span class="help">(lower case only for username)</span><br /><br>
    Fullname<span class="red">*</span></font><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif"><span class="help">(max 25)&nbsp;</span></font></font><font size="3" face="Georgia, Times New Roman, Times, serif">&nbsp;&nbsp;&nbsp;:
      <input type='Text' name='fullname' class='regitser' value='<?php echo($fullname) ?>' maxlength=25 />
      <br />
      <br />
      Password<span class="red">*</span></font><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif"><span class="help">(max 25)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font></font><font size="3" face="Georgia, Times New Roman, Times, serif">:
        </font><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif">
          <input type='password' class='regitser' id='pass' name='passwd' maxlength="25" />
        </font></font></font></p>
  <p><font size="3" face="Times New Roman, Times, serif"><font size="3" face="Georgia, Times New Roman, Times, serif">Gender<span class="red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
        <select name="gender" value="gender">
          
          <option value="-1">Select:</option>
      <option value="1">Male</option>
      <option value="2">Female</option></select><br>
    <br>
    Date Of Birth<span class="red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    </font>
    <select name="dobday" value="day">
      
      <option value="-1">Day:</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    
    <select name="dobmonth" value="month">
      <option value="-1">Month:</option>
      <option value="1">Jan</option>
      
      <option value="2">Feb</option>
      <option value="3">Mar</option>
      <option value="4">Apr</option>
      <option value="5">May</option>
      <option value="6">Jun</option>
      <option value="7">Jul</option>
      <option value="8">Aug</option>
      <option value="9">Sep</option>
      <option value="10">Oct</option>
      
      <option value="11">Nov</option>
      <option value="12">Dec</option></SELECT>
    <select name="dobyear" value="year">
      <option name="dobyear" value="-1">Year:</option>
      
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
    </select>
    <font size="3" face="Georgia, Times New Roman, Times, serif"> <br />
      <br />
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type='hidden' value='<?php echo($alumni)?>' name='alumni'><input type='hidden' value='<?php echo($batch)?>' name='batch'><input type='hidden' value='<?php echo($branch)?>' name='branch'>
      <input type='hidden' value='0' name='check'>
      <input type='submit' class="red" value='register' >
      <br>
      </font></font>
  </p>
</form>

	

	

&nbsp;</td>
  </tr>
</table>
</body>
</html>