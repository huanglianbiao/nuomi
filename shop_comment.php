<?php
include('admin/db.php');
require 'libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');

if(!empty($_GET['ord_id']) && !empty($_GET['goods_id'])){
	$ord_id=$_GET['ord_id'];
	$goods_id=$_GET['goods_id'];
	$smarty->assign('ord_id', $ord_id);
	$smarty->assign('goods_id', $goods_id);
}	





$smarty->display('shop_comment.html');
?>