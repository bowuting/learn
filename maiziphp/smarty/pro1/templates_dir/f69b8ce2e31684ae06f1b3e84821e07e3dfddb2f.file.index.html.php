<?php /* Smarty version Smarty-3.1-DEV, created on 2016-09-07 15:10:39
         compiled from "templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:201078187857cfbd6f0f6870-04512336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69b8ce2e31684ae06f1b3e84821e07e3dfddb2f' => 
    array (
      0 => 'templates/index.html',
      1 => 1473232236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201078187857cfbd6f0f6870-04512336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57cfbd6f187493_88718808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cfbd6f187493_88718808')) {function content_57cfbd6f187493_88718808($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>姓名是：</h2>
    <h2><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>
  </body>
</html>
<?php }} ?>