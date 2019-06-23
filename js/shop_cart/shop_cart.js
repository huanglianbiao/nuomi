window.onload=function(){
//总计
function all(){
	var zong=0;
	$('.cks:checked').each(function(){		
		zong +=Number($(this).parent().siblings().find('.res').val());		
	})
	$('.zong').val(zong.toFixed(2));	
}
//减
$('.less').click(function(){
	var val=Number($(this).next().val())-1;
	val=val<1? 1:val;
	$(this).next().val(val);	
	var price=Number($(this).parent().prev().children('#price').val());
	$(this).parent().siblings().children('.res').val((val*price).toFixed(2));	
	$(this).parent().siblings().find('.cks').attr('checked',true);
	$(this).parent().parent().css('background-color','#eee');	
	all();
	all_checked();
});
//加
$('.add').click(function(){
	var val=Number($(this).prev().val())+1;
	var i=$(this).index();
	$(this).prev().val(val);
	var price=Number($(this).parent().prev().children('#price').val());
	$(this).parent().siblings().children('.res').val((val*price).toFixed(2))
	$(this).parent().siblings().find('.cks').attr('checked',true);
	$(this).parent().parent().css('background-color','#eee');
	all();
	all_checked();
});
//全选
$('#all_sel').click(function(){
	if(this.checked){
		$('.cks').attr('checked',this.checked);
		$('.cks').parent().parent().css('background-color','#eee');
		all();
	}else{
		$('.cks').attr('checked',this.checked);
		$('.cks').parent().parent().css('background-color','#fff');		
		all();
	}
})
function all_checked(){
	if($('.cks:checked').length==$('.cks').length){
		$('#all_sel').attr('checked',true);
	}else{
		$('#all_sel').attr('checked',false);
	}
}
//单选
$('.cks').click(function(){
	if(this.checked){
		all_checked();
		all();
		$(this).parent().parent().css('background-color','#eee');
	}else{
		all_checked();
		all();
		$(this).parent().parent().css('background-color','#fff');
	}	
})	
//删除
$('.del').click(function(){
	var del_id=$(this).attr('del-id');
	$.get('add_car.php',{del_id:del_id},function(data){
		//console.log(data)
	})
	$(this).parent().parent().remove();
	$(this).parent().siblings().children('.cks').attr('checked',false);
	all();
})


//删除选中的
$('.del_ck').click(function(){
	var len=$('.cks:checked').length;
	var del_id=new Array();
	for(var i=0;i<len;i++){
		del_id[i]=$('.cks:checked').eq(i).attr('del-id');
	}
	$.get('add_car.php',{del_id:del_id},function(data){
		//console.log(data)
	})
	$('.cks:checked').parent().parent().remove();
})
		
	
}
