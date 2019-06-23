<?php
include 'db.php';
$mysort =new db('goods_sort');
//编辑
if(!empty($_GET['ed_id'])){
	$id=$_GET['ed_id'];
	$arr=$mysort->find("select * from goods_sort where id='$id' limit 1");
	echo json_encode($arr);
	exit;
}
//删除
if(!empty($_GET['del_id'])){
	$id=$_GET['del_id'];
	$re=$mysort->delete("update goods_sort set ord=-1 where id='$id' limit 1");
	if($re){
		echo 1;
	}else{
		echo 0;
}
	exit;
}
if(isset($_POST['id'])){
	$id=$_POST['id'];
}
if(!empty($_POST['name'])){
	$name=$_POST['name'];
}
if(!empty($_POST['ord'])){
	$ord=$_POST['ord'];
}
$data['pid']=$id;
$data['name']=$name;
$data['ord']=$ord;
$hid=$_POST['hid'];
if($hid>0){
	$re=$mysort->edit($data,"id='$hid'");
}else{
	$re=$mysort->add($data);
}

if($re){
	echo 1;
}else{
	echo 0;
}
?>