<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 04:46:18
         compiled from "D:\WEBSERVER\www\zend_smarty\application\modules\default\views\templates\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192164fbda0fa29b0e8-68232917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45bbef2f4fc4ba6d50885b866876051cc2e4eb9' => 
    array (
      0 => 'D:\\WEBSERVER\\www\\zend_smarty\\application\\modules\\default\\views\\templates\\index\\index.tpl',
      1 => 1337761657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192164fbda0fa29b0e8-68232917',
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
  'unifunc' => 'content_4fbda0fa35ad21_64688339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbda0fa35ad21_64688339')) {function content_4fbda0fa35ad21_64688339($_smarty_tpl) {?><!--
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
">home</a>
<br /><br /><?php }} ?>