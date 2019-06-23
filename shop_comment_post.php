<?php
include('admin/db.php');
//会员id
$vip=new db('vip_data');
$comment=new db('goods_comment');

$user=$_COOKIE['user'];
$vip_list=$vip->find("select * from vip_data where user='$user'");
$vip_id=$vip_list['id'];

if(!empty($_POST['goods_id']) && !empty($_POST['ord_id']) && !empty($_POST['content'])){
	$goods_id=$_POST['goods_id'];
	$ord_id=$_POST['ord_id'];
	$content=$_POST['content'];
}
//评论
$comm['goods_id']=$goods_id;
$comm['user_id']=$vip_id;
$comm['content']=$content;
$comm['send_time']=time();
$re=$comment->add($comm);
if($re){
	//会员订单
	$order=new db('vip_order');
	$order_list=$order->find("select * from vip_order where id='$ord_id'");
	$ord_list=unserialize($order_list['order_list']);
	
	//修改评论状态值
	foreach($ord_list as $k => $v){
		if($ord_list[$k]['id']==$goods_id){
			$ord_list[$k]['s']=1;
		}
	}
	$data['order_list']=serialize($ord_list);
	$re2=$order->edit($data,"id='$ord_id'");
	if($re2){
		echo "<script>location.replace('order_list.php')</script>";
	}else{
		exit;
	}	
}else{
	exit;
}


?>