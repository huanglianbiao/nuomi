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
$order =new db('vip_order');
//分页  
$all=$order->select("select count(*) as n from vip_order");
$page_size=2;
$page=$_GET['page'];
$page=($page==''? 1:$page);
$smarty->assign('page', $page);
$start=($page-1)*$page_size;
//总页数
$all_page=ceil($all[0]['n']/$page_size);
$smarty->assign('all_page', $all_page);
//上一页
$prev_page=$page-1;
$smarty->assign('prev_page', $prev_page);
//下一页
$next_page=$page+1;
$smarty->assign('next_page', $next_page);



$vip_order=$order->select("select * from vip_order order by id desc limit $start,$page_size");
$smarty->assign('vip_order',$vip_order);

//取消
if(!empty($_GET['cid'])){
	$id=$_GET['cid'];
	$data['state']="-1";
	$re=$order->edit($data,"id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}
//发货
if(!empty($_GET['sid'])){
	$id=$_GET['sid'];
	$data['state']="1";
	$re=$order->edit($data,"id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}

//已发货
if(!empty($_GET['suid'])){
	$id=$_GET['suid'];
	$data['state']="2";
	$re=$order->edit($data,"id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}

//已签收
if(!empty($_GET['succ'])){
	$id=$_GET['succ'];
	$data['state']="3";
	$re=$order->edit($data,"id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}

$smarty->display('vip_order.html');	
?>