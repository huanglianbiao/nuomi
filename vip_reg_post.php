<?php
include('admin/db.php');
$vip=new db('vip_data');
$pwd=$_POST['pwd'];
$_POST['pwd']=md5(md5($pwd).'hlb');

$re=$vip->add($_POST);
if($re){
	echo '<script>alert("恭喜您已成为本店的会员！！");location.replace("vip_login.php")</script>';
}else{
	echo '<script>location.replace("vip_login.php")</script>';
}
?>