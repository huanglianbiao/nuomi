<?php
include('admin/db.php');
require 'libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');

$goods=new db('goods');

//加入购物车
foreach(unserialize($_COOKIE['car_list']) as $v){
	$id=$v['id'];
	$goods_list[]=$goods->find("select id,title,about,price,photos from goods where id='$id'");
	$n[]=$v['n'];
}
foreach($goods_list as $k=>$v){
	$goods_list[$k]['photos']=unserialize($v['photos']);
}
$smarty->assign('goods_list',$goods_list);
$smarty->assign('n',$n);


$smarty->display('shop_cart.html');
?>