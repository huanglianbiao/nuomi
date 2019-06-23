<?php
include('admin/db.php');
$order=new db('vip_order');
$vip=new db('vip_data');
$user=$_COOKIE['user'];
$row=$vip->find("select id from vip_data where user='$user'");
$data['vip_id']=$row['id'];

if(!empty($_POST)){
	$data['all_money']=$_POST['all_money'];
	unset($_POST['all_money']);
	$data['vip_list']=serialize($_POST);
}
$data['order_list']=$_COOKIE['confirm'];

//清空购物车中医购买的商品
$car_list=unserialize($_COOKIE['car_list']);
foreach(unserialize($_COOKIE['confirm']) as $k=>$v){
	$buy_id[]=$v['id'];
}
foreach($car_list as $k=>$v){
	if(in_array($v['id'],$buy_id)){
		unset($car_list[$k]);
	}
}
setcookie('car_list',serialize($car_list),time()+3600000);


$data['order_num']=time().rand(0,999);
$data['send_time']=time();
$re=$order->add($data);

if($re){
	echo "<script>location.replace('shop_success.php')</script>";
}
?>