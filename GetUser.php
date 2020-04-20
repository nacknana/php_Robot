<?
	include "cnnDB.php";
	
	$sql = "select * from $tbUser " ;
	$query = mysql_query($sql);
	$num_rows = mysql_num_rows($query);
	$a = 1;
	
	while ($a <= $num_rows){
		$result = mysql_fetch_array($query);
		echo $result[Username];
		
	$a++;}

?>