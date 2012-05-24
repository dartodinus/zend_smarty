<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 04:48:14
         compiled from "D:\WEBSERVER\www\zend_smarty\application\modules\admin\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299914fbda16e056411-21829070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a406e0d810d482fb1efd6f18f789a6b5fb62b10f' => 
    array (
      0 => 'D:\\WEBSERVER\\www\\zend_smarty\\application\\modules\\admin\\views\\templates\\layout.tpl',
      1 => 1337761597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299914fbda16e056411-21829070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbda16e07c258_47106720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbda16e07c258_47106720')) {function content_4fbda16e07c258_47106720($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<div id="header">
		<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
    
    <div id="content">
		<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

    </div>
    
    <div id="footer">
    	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</body>
</html><?php }} ?>