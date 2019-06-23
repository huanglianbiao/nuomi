$(document).ready(function(){
var pro=['1分  失望','2分 不满','3分 一般','4分 满意','5分 惊喜'];

/*$('.icon-star').mousemove(function(){
	var i=$(this).parent().index();
	$(this).css('color','#FF42C0');
	$(this).parent().prevAll().children('.icon-star').css('color','#FF42C0');
	$(this).parent().nextAll().children('.icon-star').css('color','#ddd');
	$('.minute').html(pro[i]);

	
})*/


$('.icon-star').click(function(){
var i=$(this).parent().index();
$(this).css('color','#FF42C0');
$(this).parent().prevAll().children('.icon-star').css('color','#FF42C0');
$(this).parent().nextAll().children('.icon-star').css('color','#ddd');
$(this).parent().parent().siblings('.minute').html(pro[i]);

})


	
	
})
