$(document).ready(function(){
//图片轮播
$(".prev,.next").hover(function(){
	$(this).stop(true,false).fadeTo("show",0.9);
},function(){
	$(this).stop(true,false).fadeTo("show",0.4);
});
$(".menu_mid").slide({
	mainCell:".img_box ul",
	effect:"fold",
	interTime:3000,
	delayTime:500,
	autoPlay:true,
	trigger:"click" 
});



var said=document.getElementsByClassName('aside_fl')[0];
window.onscroll=function(){
	if(scrollY>300){
		said.className='fix';
	}else{
		said.className='';
	}
}

//加入购物车
$('.shopping').click(function(){
	var id=$(this).attr('car-id');
	var n=1;
	$.get('add_car.php',{id:id,n:n},function(data){
		if(data==0){
		alert('请先登录！！');location.replace("vip_login.php");
		}
	})
})


});