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
$mysort =new db('goods_sort');
//查顶级分类
$top_sort_list=$mysort->select("select * from goods_sort where pid=0 and ord>=0 order by ord desc");
$smarty->assign('tsl', $top_sort_list);
//
$sort_list=$mysort->select("select * from goods_sort order by ord desc");
$smarty->assign('sort_list', $sort_list);



$smarty->display('sort.html');	
?>
