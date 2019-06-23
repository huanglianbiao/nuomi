<?php
/* Smarty version 3.1.30, created on 2017-03-26 11:28:56
  from "G:\wamp\www\baidu_nuomi\admin\templates\vip_order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d789d8ac4f88_28610793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b65e82c6032366c8fd12240d287832e58d9f9d12' => 
    array (
      0 => 'G:\\wamp\\www\\baidu_nuomi\\admin\\templates\\vip_order.html',
      1 => 1475740714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d789d8ac4f88_28610793 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list_box">
<div class="list">
  	<h3>订单列表</h3>	 	
    <table class="table table-hover">    	
    <thead>
	  <tr><th>ID</th><th>用户名</th><th>订单号</th><th>下单时间</th><th>总金额</th><th>状态</th><th>是否支付</th><th>操作</th></tr>
	  </thead>
	  <tbody>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vip_order']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>	  
	  <tr>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['vip_id'];?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['order_num'];?>
</td>
	  	<td><?php echo date('Y-m-d H:s',$_smarty_tpl->tpl_vars['i']->value['send_time']);?>
</td>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['all_money'];?>
</td>
	  	<?php if ($_smarty_tpl->tpl_vars['i']->value['state'] == 0) {?>
	  		<td>未发货</td>
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == -1) {?>
	  			<td>已取消</td>
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == 1) {?>
	  		<td>已发货</td>		
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == 2) {?>
	  		<td>已签收</td>
	  		<?php } else { ?>
	  		<td class="gg">完成</td>
	  		
	  	<?php }?>
	  	<td><?php echo $_smarty_tpl->tpl_vars['i']->value['is_pay'];?>
</td>
	  	<?php if ($_smarty_tpl->tpl_vars['i']->value['state'] == 0) {?>
	  		<td>
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs send">发货</a>&nbsp;
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs ord_cancel">取消</a>&nbsp;
	  		</td>
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == -1) {?>
	  		<td>
	  			<span class="btn btn-xs">已取消</span>&nbsp;
	  		</td>
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == 1) {?>
	  		<td>
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs suc_send">已发货</a>&nbsp;
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs ord_cancel">取消</a>&nbsp;
	  		</td>
	  		<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['state'] == 2) {?>
	  		<td>
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-info btn-xs succ">已签收</a>&nbsp;
	  			<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-danger btn-xs ord_cancel">取消</a>&nbsp;
	  		</td>
	  		<?php } else { ?>
	  		<td>
	  			<span class="btn-xs gg">完成</span>&nbsp;
	  		</td>
	  	<?php }?>
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
	  <input type="hidden" id="back_page"/>
</table>
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//分页
$('.page').click(function(){
	var page=$(this).attr('page-data');
	//alert(page);
	$.get('vip_order.php',{page:page},function(data){		
		$('#admin_show').html(data);
		$('#back_page').val('vip_order.php?page='+page);
		
	})
})

var back_page=$('#back_page').val();
console.log(back_page);
//发货
$('.send').click(function(){	
	var sid=$(this).attr('data-id');
	$.confirm({
    title:'提示',
    content:'确定发货了吗？',
    animation: 'rotateXR',
    closeAnimation: 'rotateX',
    confirm: function(){          
		$.get('vip_order.php',{sid:sid},function(data){
		if(data==1){
			
			$.get(back_page,function(data){
				$('#admin_show').html(data);
			})
		}else{
			alert('失败！');
		};
	})
    }
});	
});
//已发货
$('.suc_send').click(function(){	
	var id=$(this).attr('data-id');	
	$.confirm({
    title:'提示',
    content:'确定已发货了吗？',
    animation: 'rotateXR',
    closeAnimation: 'rotateX',
    confirm: function(){          
		$.get('vip_order.php',{suid:id},function(data){
		if(data==1){
			$.get(back_page,function(data){
				$('#admin_show').html(data);
			})
		}else{
			alert('失败！');
		};
	})	
    }
});
});

//已签收
$('.succ').click(function(){	
	var id=$(this).attr('data-id');	
	$.confirm({
    title:'提示',
    content:'确定已签收了吗？',
    animation: 'rotateXR',
    closeAnimation: 'rotateX',
    confirm: function(){          
		$.get('vip_order.php',{succ:id},function(data){
		if(data==1){
			$.get(back_page,function(data){
				$('#admin_show').html(data);
			})
		}else{
			alert('失败！');
		};
	})	
    }
});	
});

//取消
$('.ord_cancel').on('click', function () {	
var id=$(this).attr('data-id');	
$.confirm({
    title:'提示',
    content:'确定删除吗？',
    animation: 'rotateXR',
    closeAnimation: 'rotateX',
    confirm: function(){          
		$.get('vip_order.php',{cid:id},function(data){
		if(data==1){
			$.get(back_page,function(data){
				$('#admin_show').html(data);
			})
		}else{
			alert('失败！');
		};
})
    }
});
});



<?php echo '</script'; ?>
><?php }
}
