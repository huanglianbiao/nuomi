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
$comment =new db('goods_comment');
//审核
if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$data['status']="1";
	$re=$comment->edit($data,"id='$id'");
	if($re){
		echo 1;
	}else{
		echo 0;
	}
	exit;
}
//删除
if(!empty($_GET['del_id'])){
	$id=$_GET['del_id'];
	$re=$comment->delete("delete from goods_comment where id='$id' limit 1");
	if($re){
		echo 1;
	}else{
		echo 0;
}
	exit;
}
//分页  
$all=$comment->select("select count(*) as n from goods_comment");
$page_size=3;
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


$comment_list=$comment->select("select * from goods_comment limit $start,$page_size");
$smarty->assign('comment', $comment_list);

$smarty->display('goods_comment.html');	
?>
