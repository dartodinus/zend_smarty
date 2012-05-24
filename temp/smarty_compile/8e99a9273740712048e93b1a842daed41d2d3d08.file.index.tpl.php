<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 04:48:13
         compiled from "D:\WEBSERVER\www\zend_smarty\application\modules\admin\views\templates\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67214fbda16de77d04-53446294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e99a9273740712048e93b1a842daed41d2d3d08' => 
    array (
      0 => 'D:\\WEBSERVER\\www\\zend_smarty\\application\\modules\\admin\\views\\templates\\index\\index.tpl',
      1 => 1337775061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67214fbda16de77d04-53446294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hello' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbda16df34052_52048829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbda16df34052_52048829')) {function content_4fbda16df34052_52048829($_smarty_tpl) {?><!--
<p><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</p>
<p>dont forget to visit <a href="http://www.gediminasm.org">my blog</a> for updates</p>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'index','action'=>'index'));?>
">home</a></p>

<ul>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->partialLoop('partials/list.tpl',array(array('item'=>'testing'),array('item'=>'testing 123')));?>

</ul>

-->

<p><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</p>
ini url <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'index','action'=>'index'));?>
">home admin</a>
<br /><br /><?php }} ?>