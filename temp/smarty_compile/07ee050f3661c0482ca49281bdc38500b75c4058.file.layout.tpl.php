<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 04:46:18
         compiled from "D:\WEBSERVER\www\zend_smarty\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144fbda0fa3bdd42-89782945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07ee050f3661c0482ca49281bdc38500b75c4058' => 
    array (
      0 => 'D:\\WEBSERVER\\www\\zend_smarty\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1337761597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144fbda0fa3bdd42-89782945',
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
  'unifunc' => 'content_4fbda0fa3e49d7_73759243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbda0fa3e49d7_73759243')) {function content_4fbda0fa3e49d7_73759243($_smarty_tpl) {?><!DOCTYPE html>
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