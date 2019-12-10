<?php
//用于返回和记录pv和uv的
if($_SERVER["REQUEST_METHOD"]=="GET"&&$_GET["website"]!=null){
	include_once("mysql");//引入数据库
	$sql="SELECT PV,UV,IP FROM PV_UV WHERE website=\"".$_GET["website"]."\";";//查询pv uv ip
	$result=mysqli_query($conn,$sql);
	$res=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$PUI=['PV'=>$res["PV"],'UV'=>$res["UV"],"IP"=>$res["IP"]];
	$ip=$_SERVER["REMOTE_ADDR"];//用户ip
	$PV=$PUI["PV"]++; 
	$UV=$PUI["UV"]; 
	$IP=$PUI["IP"];
	$ADD="INSERT INTO PV_UV (PV,UV,IP) VALUES('$PV','$UV',''$IP');";
}else{
	echo "您正在进行的是非法访问，将进行强制退出!";
	return false;
	echo "<script>setTimeOut(function(){window.close();},2000)</script>";
}
?>