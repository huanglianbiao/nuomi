<?php
include('admin/db.php');
require 'libs/Smarty.class.php';
$vip=new db('vip_data');
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');

//通过会员名查会员相关信息
$user=$_COOKIE['user'];
$smarty->assign('user',$user);
$vip_list=$vip->find("select * from vip_data where user='$user'");
$vip_id=$vip_list['id'];
$smarty->assign('vip_list',$vip_list);

$goods=new db('goods');
//会员订单
$order=new db('vip_order');
$order_list=$order->select("select * from vip_order where vip_id='$vip_id' order by send_time desc");
foreach($order_list as $k=>$v){
	$order_list[$k]['order_list']=unserialize($v['order_list']);	
	foreach(unserialize($v['order_list']) as $k2=>$v2){
		$goods_id=$v2['id'];
		$order_list[$k]['order_list'][$k2]['id']=$goods->find("select id,title,photos,price from goods where id='$goods_id'");
		$order_list[$k]['order_list'][$k2]['id']['photos']=unserialize($order_list[$k]['order_list'][$k2]['id']['photos']);
	}
}
$smarty->assign('order_list',$order_list);

//删除订单
if(!empty($_GET['del_ord'])){
	$id=$_GET['del_ord'];
	$re=$order->delete("delete from vip_order where id='$id'");
	if($re){
		echo 1;
	}
	exit;
}

//收藏查询
$collect=new db('vip_collect');
$goods=new db('goods');
$collect_list=$collect->select("select * from vip_collect where vip_id='$vip_id'");
foreach($collect_list as $k=>$v){
	$id=$v['goods_id'];
	$collect_list[$k]['goods_id']=$goods->find("select title,photos,price from goods where id='$id'");
	$collect_list[$k]['goods_id']['photos']=unserialize($collect_list[$k]['goods_id']['photos']);
}
$smarty->assign('collect_list',$collect_list);

//取消收藏
if(!empty($_GET['cancel_id'])){
	$id=$_GET['cancel_id'];
	$re=$collect->delete("delete from vip_collect where id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}

//会员评价
$comment=new db('goods_comment');
$comm_list=$comment->select("select * from goods_comment where user_id='$vip_id'");
foreach($comm_list as $k=>$v){
	$id=$v['goods_id'];
	$comm_list[$k]['goods_id']=$goods->find("select title,photos,price from goods where id='$id'");
	$comm_list[$k]['goods_id']['photos']=unserialize($comm_list[$k]['goods_id']['photos']);
}
$smarty->assign('comm_list',$comm_list);


$smarty->display('order_list.html');
?>