<?php
require 'libs/Smarty.class.php';
$smarty=new Smarty;
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
$smarty->display('vip_reg.html');

?>