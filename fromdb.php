 <?php 
 $start = $_GET['start'];

mysql_connect("localhost","root","");mysql_select_db("cecherthala");


	$q = mysql_query("SELECT * FROM allspeak ORDER BY msgid DESC LIMIT 0 ,1");
$speak = array();
	
	while($r=mysql_fetch_assoc($q))
	{
	$speak[]=array('fullname'=>$r['username'],'msgid'=>$r['msgid'],'datetime'=>$r['datetime'],'message'=>$r['message'],'comment'=>$r['comment']);}
		foreach($speak as $s)
		{
echo '<font color=white>'.$s['fullname'].'&nbsp;&nbsp;&nbsp;&nbsp;<sup> to all</sup><hr width=50><br>'.$s['message'];
			}
			
	
mysql_close();	?>  