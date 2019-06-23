<?php
session_start();
require 'libs/Smarty.class.php';
include('db.php');
$smarty=new Smarty;	
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
if($_SESSION['myname']==''){
	echo '<script>alert("请登录!");location.replace("login.php")</script>';
}
$user_name=$_SESSION['myname'];
$smarty->assign('user_name',$user_name);

$smarty->display('index.html');
?>
