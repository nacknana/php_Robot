<?
	include "cnnDB.php";
		
	$sql = "select * from $tbUser where Username = '".mysql_real_escape_string($_POST["Username"])."' and Password = '".mysql_real_escape_string($_POST["password"])."'";
	$query = mysql_query($sql);
	$result = mysql_fetch_array($query);
	$num_rows = mysql_num_rows($query);
	$a = 1;
	
	if (!$result){
		echo "Username or Password Incorrect!";	
	}
	else{
		echo $result["Name"];
	}
?>