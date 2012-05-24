<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 04:57:04
         compiled from "D:\WEBSERVER\www\zend_smarty\application\modules\default\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83064fbda380260289-43131823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e616933ef8f186ff801bdef3db3c7c1408fbf1a' => 
    array (
      0 => 'D:\\WEBSERVER\\www\\zend_smarty\\application\\modules\\default\\views\\templates\\error\\error.tpl',
      1 => 1286898999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83064fbda380260289-43131823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbda380370184_93014437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbda380370184_93014437')) {function content_4fbda380370184_93014437($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Zend Framework Default Application</title>
</head>
<body>
  <h1>An error occurred</h1>
  <h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>

  <?php if ($_smarty_tpl->tpl_vars['this']->value->exception){?>

  <h3>Exception information:</h3>
  <p>
      <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>

  </p>

  <h3>Stack trace:</h3>
  <pre><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>

  </pre>

  <h3>Request Parameters:</h3>
  <pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>

  </pre>
  <?php }?>

</body>
</html>
<?php }} ?>