<?php
include('admin/db.php');
$vip=new db('vip_data');

$user=$_COOKIE['user'];
//查当前会员id
$user_id=$vip->find("select id from vip_data where user='$user'");
$id=$user_id['id'];

$ROOT=$_SERVER['DOCUMENT_ROOT'].'/upload/vip/';
if(is_dir($ROOT.'/'.date('Ym')) ==false){
    mkdir($ROOT.'/'.date('Ym'));
}

if(empty($_POST['old_photo'])){
	$photo=date('Ym').'/'.date('YmdHis',time()).rand(0,999).'.jpg';
}else{
	$photo=$_POST['old_photo'];
}

$url=$ROOT.$photo;
move_uploaded_file($_FILES['photo']['tmp_name'],$url);

$_POST['photo']=$photo;	

if(empty($_POST['pwd'])){
	$pwd=$_POST['old_pwd'];
}else{
	$pwd=md5(md5($_POST['pwd']).'hlb');
}

$_POST['pwd']=$pwd;
unset($_POST['old_photo']);
unset($_POST['old_pwd']);

print_r($_POST);
exit;

$re=$vip->edit($_POST,"id='$id'");

if($re){
	echo "<script>location.replace('order_list.php')</script>";
}else{
	echo "<script>alert('修改失败！！')</script>";
	
}		
	
?>