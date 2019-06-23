<?php
/* Smarty version 3.1.30, created on 2017-03-26 11:37:03
  from "G:\wamp\www\baidu_nuomi\admin\templates\goods_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d78bbf3f28c0_95571983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fc9cf2d662425f4175c106eff293fcdf3648a2' => 
    array (
      0 => 'G:\\wamp\\www\\baidu_nuomi\\admin\\templates\\goods_form.html',
      1 => 1475581674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d78bbf3f28c0_95571983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form animated fadeInUp" id="noz">	
<h3>增加/编辑</h3>
<form  method="post" enctype="multipart/form-data" id="myform">
<div class="ed_sort">
	顶级分类：<select name="sort_id" id="ssel" onchange="fun(this.value)">	
  				<option value="0">顶级分类</option>
	  			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tsl']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
	  				<?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['ed_list']->value['sort_id']) {?>
	  					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option> 					
	  				<?php } else { ?>
	 					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	  				<?php }?>
	  			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  			</select>&nbsp;&nbsp;
  	二级分类：<select name="sort_id2" id="ssel2">
  				<option value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['sort_id2'];?>
"><?php echo $_smarty_tpl->tpl_vars['sort_goods']->value[$_smarty_tpl->tpl_vars['ed_list']->value['sort_id2']];?>
</option>
  			 </select>
  </div>

 <table>
	<input type="hidden" name="hid" id="hid" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
" />
	<tr><td>标题：</td><td><input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['title'];?>
"></td></tr>
	<tr><td>商品介绍：</td>
		<td>
			<textarea class="form-control" name="about"><?php echo $_smarty_tpl->tpl_vars['ed_list']->value['about'];?>
</textarea>
		</td>
	</tr>
	<tr><td>内容：</td>
		<td>
			<textarea class="ckeditor" id="editor_content" name="content" rows="200"><?php echo $_smarty_tpl->tpl_vars['ed_list']->value['content'];?>
</textarea>
		</td>
	</tr>
    <tr><td>价格：</td><td><input type="text" class="form-control" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['price'];?>
"></td></tr>
    <tr><td>图片：</td>
    	<td class="txt_left">
    		<p><button class="btn btn-md" id="padd">增加</button></p>
    		<?php if ($_smarty_tpl->tpl_vars['ed_list']->value['id'] != '') {?>
    			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'i', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
    				<figure class="goods_photo">
    					<img src="/upload/goods/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
?<?php echo rand(1,9999);?>
" class="ed_img"/><br />
    					<input type="hidden" name="old_photos[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
    					<figcaption><span class="btn btn-md del_photo" data-url="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" >删除</span></figcaption>
    				</figure>
    					
    				
    			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    		<?php }?>
    		<input type="file" class="form-control bb" name="photos[]" id="photos">
    		
    		<div id="photos_box"></div>
    	</td>
    </tr>
    <tr><td>库存 / 销量：</td>
    	<td class="txt_left">
    		<input type="number" min="0" class="form-control num" name="have_num" id="have_num" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['have_num'];?>
">&nbsp;
    		<input type="number" min="0" class="form-control num" name="sale_num" id="sale_num" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['sale_num'];?>
">
    	</td>
    </tr>
    <tr><td>交易时间：</td><td><input type="text" class="form-control" id="send_time" name="send_time" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['send_time'];?>
"></td></tr>
    <tr><td>商品选项：</td>
    	<td class="txt_left">
    		<p><button class="btn btn-md" id="tadd">增加</button></p>
    		<?php if ($_smarty_tpl->tpl_vars['ed_list']->value['id'] > 0) {?>
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select_option']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>  	    			  	    				
    				<p> 项目<input type="text" class="form-control num s1" name="op1[]" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">&nbsp;
    					价格<input type="number" min="0" class="form-control num s2" name="op2[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">&nbsp;<button class="btn btn-md tdel">删除</button>
    				</p>
    		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    		<?php } else { ?>
    			项目<input type="text" class="form-control num s1" name="op1[]" value="">&nbsp;价格<input type="number" min="0" class="form-control num s2" name="op2[]" value="">&nbsp;
    		<?php }?>
    		<div class="add_del"></div>
    	</td>
    </tr>
    <tr><td>商品标号：</td><td><input type="text" class="form-control" id="goods_code" name="goods_code" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['goods_code'];?>
"></td></tr>
    <tr><td>打折：</td><td><input type="text" class="form-control" id="discount" name="discount" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['discount'];?>
"></td></tr>
    <tr><td>收藏 / 评论：</td>
    	<td class="txt_left"><input type="number" min="0" class="form-control num" id="collect_num" name="collect_num" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['collect_num'];?>
">&nbsp;
    						 <input type="number" min="0" class="form-control num" id="ping_num" name="ping_num" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['ping_num'];?>
">
    	</td>
    </tr> 
    <tr><td></td>
    	<td><input type="button" value="保存" class="btn btn-success btn-xs"/>&nbsp;
    		<input type="button" value="返回" id="return" class="btn btn-inverse btn-xs"/>
    	</td>
    </tr>
 </table>	
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//编辑器
$(document).ready(function(){  
    CKEDITOR.replace('editor_content');//括号里面必须是多文本框的id名 
 
});


//编辑/增肌一、二级分类
function fun(sid){
	//console.log(sid)
	$('#ssel2').html("");
	var url='goods_post.php?sid='+sid; 
	$.get(url,function(data){
		var data=eval('('+data+')');
		for(n in data){
			var ht=$('#ssel2').html();
			var name=data[n]['name'];
			var id=data[n]['id'];
			//console.log($(this))
			$('#ssel2').html(ht+"<option value="+id+">"+name+"</option>");
		};
	});
};
//返回按钮
$('#return').click(function(){
	$.get('goods.php',function(data){
		$('#admin_show').html(data);
	})
});

//图片动态增删
$('#padd').click(function(){
	$('#photos_box').before('<div class="mdd"><input type="file" class="form-control pp" id="photos" name="photos[]">&nbsp;<button class="btn btn-md pdel">删除</button></div>')
	return false;
})
setInterval(function(){
		$('.pdel').click(function(){
			$(this).parent().remove();
		});
},100)

//选项动态增删
$('#tadd').click(function(){
	$('.add_del').before('<p>项目<input type="text" class="form-control num s1" name="op1[]">&nbsp;价格<input type="number" min="0" class="form-control num s2" name="op2[]">&nbsp;<button class="btn btn-md tdel">删除</button></p>');
	return false;
})
setInterval(function(){
		$('.tdel').click(function(){
			$(this).parent().remove();
		});
},100)


//保存
$('.btn-success').click(function(){	
	$("#editor_content").val(CKEDITOR.instances.editor_content.getData());
$("#myform").ajaxSubmit({
url:"goods_post.php",
type:"POST",
success:function(data){
	//console.log(data);
     if(data==1){
		$.get('goods.php',function(data){
			$('#admin_show').html(data);
			})
	}else{
		alert('增加失败！');
		return false;
	}
},
error:function(msg){
  alert("error:"+msg);
    }
 });

});

//图片删除

$('.del_photo').click(function(){
	var id =<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
;
	var index=$(this).attr('data-url');
	var fig=$(this).parent().parent();
	$.get('photo_delete.php',{id:id,index:index},function(data){
		if(data==1){
			fig.remove();
		}else{
			return false;
		}
				
	})
	return false;
})



<?php echo '</script'; ?>
><?php }
}
