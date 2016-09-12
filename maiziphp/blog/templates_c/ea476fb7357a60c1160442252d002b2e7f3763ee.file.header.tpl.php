<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-12 13:14:20
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37306846257d639ace9bff9-72372470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea476fb7357a60c1160442252d002b2e7f3763ee' => 
    array (
      0 => './templates/header.tpl',
      1 => 1428927968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37306846257d639ace9bff9-72372470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'test' => 0,
    'params' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57d639acf08730_57465796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d639acf08730_57465796')) {function content_57d639acf08730_57465796($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="description" content="[HERE PASTE YOUR DESCRIPTION]" />
	<meta name="author" content="Template:TemplatesDock " />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="templates/css/skin.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/cufon-yui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/javascript/jquery-1.8.3.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6', {hover:true});<?php echo '</script'; ?>
>	
	<title>PHP BlogSystem</title>
</head>

<body>

<div class="main">

	<!-- HEADER -->
	<div id="header" class="box">

		<h1 id="logo">PHP<?php echo $_smarty_tpl->tpl_vars['test']->value;?>
<span> BlogSystem</span></h1>

		<!-- NAVIGATION -->
		<ul id="nav">
			<li <?php if (empty($_smarty_tpl->tpl_vars['params']->value['safe']['action'])||$_smarty_tpl->tpl_vars['params']->value['safe']['action']=='index') {?>class="current"<?php }?>><a href="http://localhost/blog/">首页</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action']=='myblog') {?> class="current" <?php }?>><a href="http://localhost/blog/?action=myblog">我的博客</a></li>
			<?php if (!$_smarty_tpl->tpl_vars['user_info']->value) {?>
			<li <?php if ($_smarty_tpl->tpl_vars['params']->value['safe']['action']=='login') {?> class="current" <?php }?> ><a href="http://localhost/blog/index.php?action=login">登录/注册</a></li>
			<?php } else { ?>
			<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['nick_name'];?>
</a></li>
			<?php }?>
		</ul>
		
	</div> <!-- /header --><?php }} ?>
