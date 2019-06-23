<?php
/* Smarty version 3.1.30, created on 2017-03-26 11:28:40
  from "G:\wamp\www\baidu_nuomi\admin\templates\sort.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d789c8f2fe20_32285389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee8c8c51328fac330e2f03a71c97088da6f9cf7' => 
    array (
      0 => 'G:\\wamp\\www\\baidu_nuomi\\admin\\templates\\sort.html',
      1 => 1475026080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d789c8f2fe20_32285389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list animated fadeIn" id="list">
  	<h3>分类管理列表</h3>	
  	<div class="ed_sort">
  		顶级分类：<select name="" id="sel" >
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

  		</select>
  		&nbsp;&nbsp;分类名称：<input type="text" id="sname" /><input type="hidden" name="hid" id="hid" value="0"/>
  		&nbsp;&nbsp;排序：<input type="number" id="order" />&nbsp;&nbsp;<input type="button" id="btn" value="保存" />
  	</div>
    <table class="table table-hover">    	
    <thead>
	  <tr><th>ID</th><th>分类名称</th><th>排序</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_list']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
	  	<?php if ($_smarty_tpl->tpl_vars['i']->value['pid'] == 0) {?>
		  <tr <?php if ($_smarty_tpl->tpl_vars['i']->value['ord'] < 0) {?>  class="sdel" <?php }?>>
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
		  	<td class="sort1"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>	
		  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['ord'];?>
</td>
		  	<td>
		  		<a href="javascript:void(0)" edit-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
		  		<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
		  	</td>
		  </tr>
		  		<?php if ($_smarty_tpl->tpl_vars['i']->value['ord'] < 0) {?>
			  		<?php continue 1;?>	
			  	<?php }?>
			  		
			  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_list']->value, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
?>			  		
				  	<?php if ($_smarty_tpl->tpl_vars['j']->value['pid'] == $_smarty_tpl->tpl_vars['i']->value['id']) {?>
					 	<tr <?php if ($_smarty_tpl->tpl_vars['j']->value['ord'] < 0) {?>  class="sdel" <?php }?>>
						  	<td><?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
</td>
						  	<td class="sort2"><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</td>	
						  	<td><?php echo $_smarty_tpl->tpl_vars['j']->value['ord'];?>
</td>
						  	<td>
						  		<a href="javascript:void(0)" edit-id="<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" class="btn btn-info btn-xs edit">编辑</a>&nbsp;
						  		<a href="javascript:void(0)" del-id="<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" class="btn btn-danger btn-xs del btn btn-primary" >删除</a>
						  	</td>
					  </tr>				  	
				  	<?php }?>
			  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
	  	
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  
	  </tbody>
</table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

//保存
$('#btn').click(function(){
	var s_id=$('#sel option:checked').val();
	var sname=$('#sname').val();
	var ord=$('#order').val();
	var hid=$('#hid').val();
	if(sname==''){
		alert('请输入分类名称！');
		return false;
	}
	$.post('sort_post.php',{id:s_id,hid:hid,name:sname,ord:ord},function(data){
		if(data==1){
			$.get('sort.php',function(data){
				$('#admin_show').html(data);
			});
		}
	});
})

	
//编辑
$('.edit').click(function(){
	var ed_id=$(this).attr('edit-id');
	$.get('sort_post.php',{ed_id:ed_id},function(data){	
		var data=eval('('+data+')');
		$('#sname').val(data.name);
		$('#order').val(data.ord);
		$('#hid').val(data.id);
		$('#sel option').attr('selected',false);
		$('#sel option').each(function(){
			if($(this).val()==data.pid){
				$(this).attr('selected',true);
				
			}
		})
	})
});

//删除

$('.del').click(function () {	 
	var del_id=$(this).attr('del-id');
	$.get('sort_post.php',{del_id:del_id},function(data){	
		if(data==1){
			$.get('sort.php',function(data){
				$('#admin_show').html(data);
			});
		}
	});  
});

<?php echo '</script'; ?>
><?php }
}
