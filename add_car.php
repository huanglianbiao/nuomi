<?php
include('admin/db.php');
if(!empty($_COOKIE['user'])){
if(!empty($_COOKIE['car_list'])){
	$list=unserialize($_COOKIE['car_list']);
}
if(!empty($_GET['id']) && !empty($_GET['n'])){
	$id = $_GET['id'];
	$n = $_GET['n'];
	
	$have=0;
	foreach($list as $k=>$v){
		if($v['id']==$id){
			$list[$k]['n']+=$n;
			$have = 1;
			break;
		}		
	}
	if($have==0){
			$arr['id'] = $id;
			$arr['n'] = $n;
			$list[] = $arr;
	}	
	setcookie('car_list',serialize($list),time()+3600000);
	echo 1;
	exit;
}	

if(!empty($_GET['del_id'])){
	$del_id=$_GET['del_id'];
	if(is_array($del_id)){
		foreach($list as $k=>$v){
			if(in_array($v['id'],$del_id)){
				unset($list[$k]);
			}
		}
	}else{
		foreach($list as $k=>$v){
			if($v['id']==$del_id){
				unset($list[$k]);
				break;
			}
		}
	}
	setcookie('car_list',serialize($list),time()+3600000);
	echo 1;
}
}else{
	echo 0; 
}

?>