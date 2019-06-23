<?php
require 'libs/Smarty.class.php'	;
include('admin/db.php');
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');
$ad=new db('ad_list');
$goods=new db('goods');
$sort=new db('goods_sort');
//轮播图
$ad_list1=$ad->select("select * from ad_list where pid=1");
$smarty->assign('ad_list1', $ad_list1);

//轮播图右侧广告
$ad2=$ad->find("select * from ad_list where pid=7");
$smarty->assign('ad2', $ad2);

//商品
$goods_list=$goods->select("select * from goods");
foreach($goods_list as $k=>$v){
		
	$goods_list[$k]['photos']=unserialize($v['photos']);
}

$smarty->assign('goods_list',$goods_list);
//一级分类
$sort1=$sort->select("select * from goods_sort where pid=0");
$smarty->assign('sort1',$sort1);

//二级分类
$sort2=$goods->select("select * from goods_sort where pid>0");
$smarty->assign('sort2',$sort2);

$smarty->display('index.html');
?>