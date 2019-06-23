<?php
include('admin/db.php');
require 'libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
include('header.php');

//查vip的id
$vip=new db('vip_data');
$user=$_COOKIE['user'];
$row=$vip->find("select id from vip_data where user='$user'");
$vip_id=$row['id'];

//查vip订单
$order=new db('vip_order');
$order_list=$order->find("select * from vip_order where vip_id='$vip_id' order by send_time desc limit 1");
$smarty->assign('order_list',$order_list);


$smarty->display('shop_success.html');
?>