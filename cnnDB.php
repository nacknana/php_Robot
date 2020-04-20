<?
$host="us-cdbr-iron-east-01.cleardb.net";
$username="b7a3f8ae50a891";
$password="efe2cf2b";
$db="heroku_e0367369f43acad";
$tbUser = "user";
$tbWeapon = "weapon";




mysql_connect($host,$username,$password) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้ ") ; 
mysql_select_db($db) or die("ไม่สามารถเลือกฐานข้อมูลได้");
mysql_query("set names UTF-8");
?>
