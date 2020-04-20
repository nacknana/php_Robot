<?
	include "cnnDB.php";
	
	$sql="select * from $tbUser where Username = '".trim($_POST["Username"])."' or Email = '".trim($_POST["Email"])."'";
		$Query = mysql_query($sql);
		$Result= mysql_fetch_array($Query);
		
		if($Result){
			if($Result["Username"] == trim($_POST["Username"])) {
				
				echo "Have this User";
			} 
			else if($Result["Email"] == trim($_POST["Email"])) {
				
				echo "Have this Email !!!";
			}
			
		}
		else{
			$sql= "insert into $tbUser (Username,Password,Name,Email) 
			values ('".$_POST["Username"]."',
					'".$_POST["Password"]."',
					'".$_POST["Name"]."',
					'".$_POST["Email"]."')";
			
			$Query = mysql_query($sql);
					
			echo "Register Success ";
		}

?>