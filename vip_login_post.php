<?php
include('admin/db.php');
$vip=new db('vip_data');
$user=$_POST['user'];
$pwd=md5(md5($_POST['pwd']).'hlb');
if($user==''){
	echo '<script>alert("请输入用户名!");location.replace("vip_login.php")</script>';
	exit;
}
if($pwd==''){
	echo '<script>alert("请输入密码!");location.replace("vip_login.php")</script>';
	exit;
}

$re=$vip->find("select * from vip_data where user='$user' and pwd='$pwd'");
if($re['user']==$user){
	setcookie('user',$user,time()+36000);
	echo '<script>location.replace("index.php")</script>';
}else{
	echo '<script>alert("用户名或密码不正确！！");location.replace("vip_login.php")</script>';
}

?>