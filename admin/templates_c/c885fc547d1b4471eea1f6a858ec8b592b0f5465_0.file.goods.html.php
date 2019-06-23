<?php
/* Smarty version 3.1.30, created on 2016-10-13 19:06:01
  from "D:\wamp\www\baidu_nuomi\admin\templates\goods.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff6a99adca92_22088579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c885fc547d1b4471eea1f6a858ec8b592b0f5465' => 
    array (
      0 => 'D:\\wamp\\www\\baidu_nuomi\\admin\\templates\\goods.html',
      1 => 1476328423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff6a99adca92_22088579 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="list_box">
<div class="list">
  	<h3>商品列表 <span id="add_user">增加商品</span></h3>	 	
    <div class="ed_sort">
  		顶级分类：<select name="" id="sel" onchange="fun(this.value)">
  			<option value="0">顶级分类</option>
  			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tsl']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
  				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
  			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  		</select>&nbsp;&nbsp;
  		二级分类：<select name="" id="sel2">
  					<option value="0">二级分类</option>
  				 </select>
  		&nbsp;&nbsp;商品名称：<input type="text" id="sname" placeholder="请输入商品名称" /><input type="hidden" name="hid" id="hid" value="0"/>
  		&nbsp;&nbsp;<input type="button" id="btn" value="搜索" />
  	</div>
    <table class="table table-hover">    	
    <thead>
	  <tr><th>ID</th><th>顶级分类</th><th>二级分类</th><th>标题</th><th>单价(元)</th><th>库存(件)</th><th>销量(件)</th><th>上架时间</th><th>商品标号</th><th>打折</th><th>收藏(次)</th><th>评论(人)</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
		  <tr>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['sort_goods']->value[$_smarty_tpl->tpl_vars['i']->value['sort_id']];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['sort_goods']->value[$_smarty_tpl->tpl_vars['i']->value['sort_id2']];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['have_num'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sale_num'];?>
</td>
		  	<td><?php echo date('Y-m-d H:s:i',$_smarty_tpl->tpl_vars['i']->value['send_time']);?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['goods_code'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['discount'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['collect_num'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ping_num'];?>
</td>
		  	<td>
		  		<a href="javascript:void(0)" edit-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
		  		<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
		  	</td>
		  </tr>	
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  	  <tr id="bb">
	   	   <td colspan="12">
	  		<ul class="pagination pagination-sm">
	  			<li><a href="javascript:void(0)" class="page" page-data="1">首页</a></li>
	  			<?php if ($_smarty_tpl->tpl_vars['prev_page']->value < 1) {?>
			   		<li><a href="javascript:void(0)">&laquo;</a></li>
			    <?php } else { ?>
			    	<li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['prev_page']->value;?>
">&laquo;</a></li>
			    <?php }?>
			    <?php
$__section_sn_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sn']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn'] : false;
$__section_sn_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_page']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sn_0_total = $__section_sn_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sn'] = new Smarty_Variable(array());
if ($__section_sn_0_total != 0) {
for ($__section_sn_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] = 0; $__section_sn_0_iteration <= $__section_sn_0_total; $__section_sn_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']++){
?>
			    	<?php if ($_smarty_tpl->tpl_vars['page']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1) {?>
			    		<li><a href="javascript:void(0)" class="page" id="bg_color" page-data="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
</a></li>
			    		<?php } else { ?>
			    		<li><a href="javascript:void(0)" class="page" page-data="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sn']->value['index'] : null)+1;?>
</a></li>
			   		<?php }?>
			    
			    <?php
}
}
if ($__section_sn_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sn'] = $__section_sn_0_saved;
}
?>
			    	<?php if ($_smarty_tpl->tpl_vars['next_page']->value > $_smarty_tpl->tpl_vars['all_page']->value) {?>
			   		<li><a href="javascript:void(0)">&raquo;</a></li>
			    <?php } else { ?>
			    	<li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">&raquo;</a></li>
			    <?php }?>
			    <li><a href="javascript:void(0)" class="page" page-data="<?php echo $_smarty_tpl->tpl_vars['all_page']->value;?>
">末页</a></li>
			</ul>
	  	  </td>
	   </tr>
	  </tbody>
</table>
</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
//二级分类搜索
function fun(sid){
	$('#sel2').html("")
	var url='goods_post.php?sid='+sid; 
	$.get(url,function(data){
		var data=eval('('+data+')');
		for(n in data){
			var ht=$('#sel2').html();
			var name=data[n]['name'];
			var id=data[n]['id'];
			console.log($(this))
			$('#sel2').html(ht+"<option value="+id+">"+name+"</option>");
		};
	});
};

//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	$.get('goods.php',{page:page},function(data){
		$('#list_box').html(data);
	})
})


//编辑
$('.edit').click(function(){
	var ed_id=$(this).attr('edit-id');
	$.get('goods_form.php',{id:ed_id},function(data){
		//document.write(data);
		$('#list_box').html(data);
	})
	 
});

//增加
$('#add_user').click(function(){
	$("input:not(input[type='button'])").val('');
	$.get('goods_form.php',function(data){
		$('#list_box').html(data);
	})
	return false;
});

//删除
$('.del').on('click', function () {	 
	var aa=$(this).parent().parent();
	var del_id=$(this).attr('del-id');
    $.confirm({
        title:'提示',
        content:'确定删除吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){          
 			$.get('goods_post.php',{del_id:del_id},function(data){						
			});
			aa.remove();
        }
    });
});
<?php echo '</script'; ?>
><?php }
}
