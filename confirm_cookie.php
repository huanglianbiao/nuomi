<?php
if(!empty($_GET['id']) && !empty($_GET['op']) && !empty($_GET['num'])){
	$id=$_GET['id'];
	$op=$_GET['op'];
	$num=$_GET['num'];
	
	foreach($id as $k=>$v){
		$arr['id']=$v;
		$arr['op']=$op[$k];
		$arr['num']=$num[$k];
		$arr['s']=0;
		$list[]=$arr;
	}
	setcookie('confirm',serialize($list),time()+3600);
	echo 1;
}
	
?>