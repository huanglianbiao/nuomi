$(document).ready(function(){
//左
$('.dd span').click(function(){
	$(this).css('color','#FF318C');
	$(this).parent().children('.down').toggle();
	$(this).parent().siblings().find('span').css('color','#666');
});



//右顶部点击
$('.ld_menu li').click(function(){
	
	$(this).children().css({'color':'#fff','background-color':'#FF5C89'});
	$(this).siblings().children().css({'color':'#666','background-color':'#fff'});
})

//删除订单
$('.del').click(function(){
	$(this).parent().parent().remove();
})

//左右选项

//我的订单
$('.myli1').click(function(){
	var i=$(this).index();
	$('.li_down1').eq(i).show();
	$('.li_down1').eq(i).siblings('.li_down1').hide();
	$('.li_down1').eq(i).parent().siblings('.li_down_box').children().hide();
});

//我的评价
$('.myli2').click(function(){
	var i=$(this).index();
	$('.li_down2').eq(i).show();
	$('.li_down2').eq(i).siblings('.li_down2').hide();
	$('.li_down2').eq(i).parent().siblings('.li_down_box').children().hide();
})

//我的收藏
$('.myli3').click(function(){
	var i=$(this).index();
	$('.li_down3').eq(i).show();
	$('.li_down3').eq(i).siblings('.li_down3').hide();
	$('.li_down3').eq(i).parent().siblings('.li_down_box').children().hide();
})

//我的账户
$('.myli4').click(function(){
	var i=$(this).index();
	$('.li_down4').eq(i).show();
	$('.li_down4').eq(i).siblings('.li_down4').hide();
	$('.li_down4').eq(i).parent().siblings('.li_down_box').children().hide();
})

$('.sel2 li').click(function(){
	var i=$(this).index();
	$(this).children().css({'color':'#FF318C','border-bottom':'1px solid #FF318C'});
	$(this).siblings().children().css({'color':'#666','border-bottom':'none'});
	$('.sel2_down').eq(i).show().siblings().hide();
})

//订单删除
$('.del_ord').click(function(){
	var del_ord=$(this).attr('del_ord');
	if(confirm("确定删除该订单吗？？")){
		$.get('order_list.php',{del_ord:del_ord},function(data){
			if(data==1){
				window.location.replace('order_list.php');
			}
		})
	}else{
		return false;
	}	
})

//小计
$('.sall').each(function(){
	var p=Number($(this).siblings('.sprice').text());
	var n=Number($(this).siblings('.num').text());
	$(this).text((p*n).toFixed(2))
})

//取消收藏
$('.collect').click(function(){
	var cancel_id=$(this).attr('cancel-id');
	if(confirm('您确认取消收藏吗？')){
		$.get('order_list.php',{cancel_id:cancel_id},function(data){
			if(data==1){
				window.location.replace('order_list.php');
			}else{
				alert('取消出错！！');
			}
		})
	}else{
		return false;
	}
})

//省市县三级联动
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
}
Gid('s_county').setAttribute('onchange','showArea()');





})