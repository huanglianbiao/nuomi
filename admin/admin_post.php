<?php
include('db.php');
$mydb=new db('admin');
//编辑id
if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$arr=$mydb->find("select * from admin where id='$id'");
	echo json_encode($arr);
	exit;
}
//删除id
if(!empty($_GET['del_id'])){
	$del_id=$_GET['del_id'];
	$re=$mydb->delete("delete from admin where id='$del_id' limit 1");
	exit;
}
//增加编辑共用
if(!empty($_POST['user'])){
	$user=$_POST['user'];
}
if(!empty($_POST['photo'])){
	$photo=$_POST['photo'];
}
if(!empty($_POST['pwd'])){
	$pwd=md5(md5($_POST['pwd']).'hlb');
}
if(!empty($_POST['hid'])){
	$hid=$_POST['hid'];
}
//图片 
$ext=null;
switch($_FILES['photo']['type']){
	case 'image/jpeg':$ext='.jpg';break;
	case 'image/gif':$ext='.gif';break;
	case 'image/png':$ext='.png';break;
	default:$ext='.jpg';
}
if(!empty($_FILES['photo']['size'])){
	
}

$hid=$_POST['hid'];
$data['user']=$user;
$data['photo']=$photo;
$data['pwd']=$pwd;
$data['stime']=time();
$root=$_SERVER['DOCUMENT_ROOT'].'/upload/admin/';
mkdir($root.'/'.date('Ym',time()));
if(!empty($_POST['old_photo'])){
	$photo=$_POST['old_photo'];
}else{
	$photo=date('Ym').'/'.date('YmdHis',time()).rand(0,1000).$ext;
}
$url=$root.$photo;

move_uploaded_file($_FILES['photo']['tmp_name'],$url);	
$data['photo']=$photo;

if($hid>0){
	$re=$mydb->edit($data,"id='$hid'");
}else{
	$re=$mydb->add($data);
}
if($re){
	echo 1;
}else{
	echo 0;
}
?>