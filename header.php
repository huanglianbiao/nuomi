<?php
//会员登录成功用户名
$user=$_COOKIE['user'];
$smarty->assign('user',$user);

$sort=new db('goods_sort');
$sort_list=$sort->select("select * from goods_sort");
$smarty->assign('sort_list',$sort_list);

$sort_list1=$sort->select("select * from goods_sort where pid=0 limit 8");
$smarty->assign('sort_list1',$sort_list1);

?>