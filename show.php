<?php
include('admin/db.php');
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');
$goods=new db('goods');
$vip=new db('vip_data');

$user=$_COOKIE['user'];
$row=$vip->find("select * from vip_data where user='$user'");
$vip_id=$row['id'];

//商品详细
$goods_list=$goods->select("select * from goods");
foreach($goods_list as $k=>$v){
	$goods_list[$k]['photos']=unserialize($v['photos']);
}
foreach($sort_list as $k=>$v){
	$sort_name[$v['id']]=$v['name'];	
}
$smarty->assign('sort_name',$sort_name);

if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$goods_list=$goods->find("select * from goods where id='$id'");
	$smarty->assign('goods_list',$goods_list);
	$smarty->assign('photo',unserialize($goods_list['photos']));
	$photos=unserialize($goods_list['photos']);
	$smarty->assign('photos',$photos);
}

//收藏显示判断
$collect=new db('vip_collect');

$collect_list=$collect->select("select * from vip_collect");
$have=0;
foreach($collect_list as $vv){	
	if($vv['vip_id']==$vip_id && $vv['goods_id']==$goods_list['id']){
		$have=1;
	}	
}

$smarty->assign('have',$have);

//广告
$ad=new db('ad_list');
$ad_list=$ad->select("select * from ad_list where pid=9");
$smarty->assign('ad_list',$ad_list);

//评论
$com=new db('goods_comment');
$com_list=$com->select("select * from goods_comment");
$smarty->assign('com_list',$com_list);

//会员
$vip=new db('vip_data');
$vip_list=$vip->select("select * from vip_data");
foreach($vip_list as $k=>$v){
	$vip_name[$v['id']]=$v['ni_name'];	
}
$smarty->assign('vip_name',$vip_name);


//收藏
if(!empty($_GET['coll_id'])){
	$data['goods_id']=$_GET['coll_id'];
	$data['vip_id']=$vip_id;
	foreach($collect_list as $v){	
		if($v['vip_id']==$vip_id && $v['goods_id']==$data['goods_id']){
			exit;
		}	
	}	
	$data['send_time']=time();
	$collect->add($data);
	exit;
}

	
$smarty->display('show.html');

?>