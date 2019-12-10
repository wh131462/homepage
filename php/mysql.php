<?php
require_once("sql.php");
// 连接数据库
	global $conn;
	$conn= new mysqli($host,$sql_username,$sql_password,$sql_database);
	mysqli_set_charset($conn,"utf8");
	if($conn->connect_error){
		die("连接失败".$conn->connect_error);
	}
	// echo "<script>console.log('Connect complete.')</script>";
/*
//表结构
"CREATE TABLE PV_UV(
id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
website VARCHAR(30) NOT NULL,
PV VARCHAR(50) NOT NULL,
UV VARCHAR(50) NOT NULL,
IP VARCHAR(50) NOT NULL,
timestamp TIMESTAMP
)";
"CREATE TABLE IP(
id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
website VARCHAR(30) NOT NULL,
IP VARCHAR(50) NOT NULL,
timestamp TIMESTAMP
)";
//注释结束
*/
$conn->query("use PV_UV;");
function closeSql(){
	global $conn;
	$conn->close();
}
?>