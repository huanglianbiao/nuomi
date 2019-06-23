<?php
include('admin/db.php');
require 'libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');	
//查会员相关信息
$vip=new db('vip_data');
if(!empty($_COOKIE['user'])){
	$user=$_COOKIE['user'];
	$vip_data=$vip->find("select * from vip_data where user='$user'");
	$smarty->assign('vip_data',$vip_data);
}

$goods=new db('goods');
//确认订单
$order_list=unserialize($_COOKIE['confirm']);
foreach($order_list as $k =>$v){
	$id=$v['id'];
	$goods_list[]=$goods->find("select id,title,photos,about,price from goods where id='$id'");
}
$smarty->assign('order_list',$order_list);

foreach($goods_list as $k=>$v){
	$goods_list[$k]['photos']=unserialize($v['photos']);
}
$smarty->assign('goods_list',$goods_list);	



$smarty->display('confirm_order.html');
?>	
