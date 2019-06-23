$(document).ready(function(){
	$('.sm_img li').click(function(){
		$(this).find('img').css('border','2px solid #FF318C');
		$(this).siblings().find('img').css('border','2px solid #fff');
		var _src=$(this).children("img").attr("src");
		$('.la_img img').attr('src',_src);		
	});
	
 //
//选择口味
$('.click_c').click(function(){
	$(this).css({'color':'#FF318C','border':'1px solid #FF318C'}).siblings().css({'color':'#666','border':'1px solid #CCCBD9'});
})

//收藏
$('.icon-heart').click(function(){
	$(this).addClass('sc');
	var id=$(this).attr('c-id');
	$.get('show.php',{coll_id:id},function(data){
		
	})
})

//图片显示
$('.prev').click(function(){
	var left_px = parseInt($('.sm_img').css('left'));
	var left_px_max = -($('.sm_img').children().length-5)*81.5;
	left_px-=81.5;
	
	if(left_px<left_px_max){
		left_px = left_px_max;
	}
	$('.sm_img').animate({'left':left_px+'px'},100);
});

$('.next').click(function(){
	var left_px= parseInt($('.sm_img').css('left'));
	var left_px_max = ($('.sm_img').children().length-5)*81.5;
	
	left_px +=81.5;
	if(left_px>0){
		left_px =0 ;
	}
	console.log(left_px)
	$('.sm_img').animate({'left':left_px+'px'},100);
})

//购物车
$('.gcar').click(function(){
	var g_img=$('.add_car').attr('src');
	//console.log(g_img);
	var g_title=$('p.title').text();
	var g_price=$('td.sd_price').text();															
	$('.af_right').append('<dl class="in_car"><dd><img src="'+g_img+'" class="img_car"/></dd><dd><p class="car_title">'+g_title+'</p><p class="car_pirce">'+g_price+'</p></dd></dl>');
	addpaly(event);
})	
function addpaly(event){
		//设置落脚点
		var offset = $(".g_car").offset();
		//console.log(offset);
		//获取当前点击js对象
		var _this = $(event.target);
		var src = $('.add_car').attr('src');
		//创建图片img
		var flyer = $('<img src="'+src+'" width="50" height="50" style="border-radius:50%;z-index:5555">')
		flyer.fly({
			start:{
				left:event.clientX,
				top:event.clientY
			},
			end:{
				left:offset.left,
				top:410,
				width:20,
				height:20
			},
			onEnd:function(){
				flyer.fadeOut("slow",function(){
					$(this).remove();
				})
			}
		
		})
};



//选项卡
$('.sel li').click(function(){
	var i=$(this).index();
	$(this).css('background-color',"#FF318C").siblings().css('background-color',"#fff");
	$(this).children().css('color',"#fff");
	$(this).siblings().children().css('color','#000');
	$('.sel_down').eq(i).show().siblings().hide();
})

//评价
$('.num1').append($('.one').val()+'%');
$('.num2').append($('.two').val()+'%');
$('.num3').append($('.three').val()+'%');


//选项卡2
$('.sel2 li').click(function(){
	var i=$(this).index();
	$(this).children().css({'color':'#FF318C','border-bottom':'1px solid #FF318C'});
	$(this).siblings().children().css({'color':'#666','border-bottom':'none'});
	$('.sel2_down').eq(i).show().siblings().hide();
})

//价格
setInterval(function(){
	$('.sd_price').text((Number($('#dprice').val())*Number($('.num').val())).toFixed(2));
},10)

//加入购物车
$('.gcar').click(function(){
	var id=$(this).attr('car-id');
	var n=1;
	$.get('add_car.php',{id:id,n:n},function(data){
		if(data==0){
		alert('请先登录！！');location.replace("vip_login.php");
		}
	})
})


})
