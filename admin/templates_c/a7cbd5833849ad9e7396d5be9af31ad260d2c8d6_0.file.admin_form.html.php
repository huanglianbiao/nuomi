<?php
/* Smarty version 3.1.30, created on 2019-06-23 04:57:42
  from "P:\wamp\www\baidu_nuomi\admin\templates\admin_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0eeaa6814f37_49098912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7cbd5833849ad9e7396d5be9af31ad260d2c8d6' => 
    array (
      0 => 'P:\\wamp\\www\\baidu_nuomi\\admin\\templates\\admin_form.html',
      1 => 1475147738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0eeaa6814f37_49098912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form" id="noz">	
<h3>增加/编辑</h3>
<form id="myform" enctype="multipart/form-data">
 <table>			
	<input type="hidden" name="hid" id="hid" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['id'];?>
" />
	<tr><td>用户名：</td><td><input type="text" class="form-control" id="name" name="user" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['user'];?>
"></td></tr>
	<tr><td>头像：</td>
		<td>
			<input type="file" class="form-control" id="file" name="photo">
			<?php if ($_smarty_tpl->tpl_vars['ed_list']->value['photo'] != '') {?>
				<img src="/upload/admin/<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['photo'];?>
?<?php echo rand(1,999);?>
" class="ed_img"/>
				<input type="hidden" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['ed_list']->value['photo'];?>
">
			<?php }?>
		</td>
	</tr>
    <tr><td>密码：</td><td><input type="password" class="form-control" name="pwd" id="pwd"></td></tr>
    <tr><td>确认密码：</td><td><input type="password" class="form-control" id="pwd2"></td></tr>
    <tr><td></td><td><input type="button" value="保存" class="btn btn-success btn-xs"/>&nbsp;<input type="button" value="返回" id="return" class="btn btn-inverse btn-xs"/></td></tr>
</table>
</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
//返回按钮
$('#return').click(function(){
	$.get('admin.php',function(data){
		$("#admin_show").html(data);
	})
});

//保存
$('.btn-success').click(function(){
	$("#myform").ajaxSubmit({
        url:"admin_post.php",
        type:"POST",
        success:function(data){
        	//console.log(data)
          if(data==1){	
			$.get('admin.php',function(data){
				$('#admin_show').html(data);
			});
			}else{	
				alert('增加失败！');
				return false;
			}
       	 },
        error:function(msg){
          alert("error:"+msg);
        }
     });
	var hid=$('#hid').val();
	var user=$('#name').val();
	var photo=$('#photo').val();
	console.log($('#photo').val());
	return false;
	var pwd=$('#pwd').val();
	var pwd2=$('#pwd2').val();
	if(user==''||pwd==''){
		alert('用户名或密码不能为空！');
		return false;
	}
	if(pwd!=pwd2){
		alert('输入密码不一致！');
		return false;
	}
	
	$.post('admin_post.php',{hid:hid,user:user,photo:photo,pwd:pwd},function(data){
		document.write(data)
		if(data==1){			
			$.get('admin.php',function(data){
				$('#admin_show').html(data);
			});

		}else{	
			alert('增加失败！');
			return false;
		}
	});	
	
	
	
	
});

	
<?php echo '</script'; ?>
><?php }
}
