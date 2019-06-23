<?php
/* Smarty version 3.1.30, created on 2018-08-22 17:21:13
  from "P:\wamp\www\baidu_nuomi\admin\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b7d7f692ad932_40692244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61613bb5f143b31bb780fa356b82ba7623cb317' => 
    array (
      0 => 'P:\\wamp\\www\\baidu_nuomi\\admin\\templates\\login.html',
      1 => 1474276978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d7f692ad932_40692244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.1.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body class="animated bounceInLeft">
<div class="container">
   <div class="row">
   	<div class="col-lg-6 col-lg-offset-3">
   		<form class="form-horizontal" role="form" action="login_post.php" method="post">
		<div class="form-group">
			<label for="use" class="col-lg-3 control-label">用户名</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="use" name="user"  placeholder="用户名">
			</div>
		</div>
		<div class="form-group">
			<label for="pwd" class="col-lg-3 control-label">密码</label>
			<div class="col-lg-8">
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="密码">
			</div>
		</div>
		<div class="form-group">
			<label for="code" class="col-lg-3 control-label">验证码</label>
			<div class="col-lg-8">
				<input type="text" class="form-control" id="code" name="code"><img src="code.php" id="code_img">
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-offset-3 col-lg-5">
				<div class="checkbox">
					<label class="text-warning">
						<input type="checkbox" > 请记住我
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-offset-3 col-lg-5">
				<input type="submit" class="btn btn-primary" value="登录">
			</div>
		</div>
	</form>
   	</div>
	
 </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$('#code_img').click(function(){
	console.log($(this).attr('src','code.php?Math.random()'));
})
<?php echo '</script'; ?>
>



</body>
</html>
<?php }
}
