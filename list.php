<?php
include('admin/db.php');
require 'libs/Smarty.class.php'	;
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');

$id=$_GET['id'];
$smarty->assign('sort_id',$id);

$sort=new db('goods_sort');
$goods=new db('goods');
//一级分类
$sort1=$sort->find("select * from goods_sort where id='$id'");
$sort1_name=$sort1['name'];
$smarty->assign('sort1_name',$sort1_name);

//二级分类
$sort2=$sort->select("select * from goods_sort where pid='$id'");
$smarty->assign('sort2',$sort2);

$where='where 1';
$where .=" and sort_id='$id'";

//二级分类筛选
if(!empty($_GET['sort_id2'])){
	$sort_id2=$_GET['sort_id2'];
	$where .=" and sort_id2='$sort_id2'";
	$smarty->assign('sort_id2',$sort_id2);
}

//价格筛选
if(!empty($_GET['price'])){
	$price=$_GET['price'];
	switch($price){
		case 1:$where .=" and price<100";break;
		case 2:$where .=" and price>100 and price<200";break;
		case 3:$where .=" and price>200 and price<300";break;
	}
	$smarty->assign('price',$price);
}

//排序
$order='';
if(!empty($_GET['ord'])){
	$ord=$_GET['ord'];
	switch($ord){
	case 1 :$order=" order by price asc";break;
	case 2 :$order=" order by price desc";break;
	case 3 :$order=" order by sale_num desc";break;
	}
	$smarty->assign('ord',$ord);
}

unset($url);
//分页地址;
$url = "id=$id&sort_id2=$sort_id2&price=$price";
$smarty->assign('url',$url);

//分页  
$all=$goods->select("select count(*) as n from goods $where");
$page_size=5;
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

//商品
$goods_list=$goods->select("select * from goods  $where $order limit $start,$page_size");
foreach($goods_list as $k=>$v){
	$goods_list[$k]['photos']=unserialize($v['photos']);
}
$smarty->assign('goods_list',$goods_list);


$smarty->display('list.html');
?>