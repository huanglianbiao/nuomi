<?php
/* Smarty version 3.1.30, created on 2017-03-26 11:28:50
  from "G:\wamp\www\baidu_nuomi\admin\templates\goods_comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d789d26a4d33_11928471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec255721cd110707010c6d6bb5369f38c6c0dddd' => 
    array (
      0 => 'G:\\wamp\\www\\baidu_nuomi\\admin\\templates\\goods_comment.html',
      1 => 1475739898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d789d26a4d33_11928471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list">
  	<h3>评论列表 </h3>	 	
    <table class="table table-hover">    	
    <thead>
	  <tr><th>ID</th><th>商品</th><th>评分</th><th>内容</th><th>评论时间</th><th>状态</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>	
	  <tr>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['goods_id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['score'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
</td>	  	
	  	<td><?php echo date('Y-m-d H:s',$_smarty_tpl->tpl_vars['i']->value['send_time']);?>
</td>
	  	<?php if ($_smarty_tpl->tpl_vars['i']->value['status'] == 0) {?>
	  		<td>未通过</td>
	  		<td>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs btn-primary chk" >审核</a>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs btn btn-primary" >删除</a>
	  	</td>
	  	<?php } else { ?>
	  		<td>已通过</td>
	  		<td>
	  		<span class="bton" >已审</span>
	  		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs btn-primary" >删除</a>
	  	</td>
	  	<?php }?>	  	
	  	</tr>
	  	<input type="hidden" id="back_page"/>
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
<?php echo '<script'; ?>
 type="text/javascript">
//审核
$('.chk').click(function(){
	var cid=$(this).attr('data-id');
	 $.confirm({
        title:'提示',
        content:'确定审核吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){          
 			$.get('goods_comment.php',{id:cid},function(data){
		if(data==1){
			var back_page=$('#back_page').val();
			$.get(back_page,function(data){
				$('#admin_show').html(data);
				});
		}else{
			alert('审核失败！');
		}
	});
        }
    });
});

//删除
$('.btn-danger').on('click', function () {	 
	var aa=$(this).parent().parent();
	var del_id=$(this).attr('data-id');
    $.confirm({
        title:'提示',
        content:'确定删除吗？',
        animation: 'rotateXR',
        closeAnimation: 'rotateX',
        confirm: function(){          
 			$.get('goods_comment.php',{del_id:del_id},function(data){
 				
			});
			aa.remove();
        }
    });
});

//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	$.get('goods_comment.php',{page:page},function(data){		
		$('#admin_show').html(data);
		$('#back_page').val('goods_comment.php?page='+page);
	})
})
<?php echo '</script'; ?>
><?php }
}
