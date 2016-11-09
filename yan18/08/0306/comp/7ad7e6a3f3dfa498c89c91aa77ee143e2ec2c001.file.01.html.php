<?php /* Smarty version Smarty-3.1-DEV, created on 2016-08-16 11:59:07
         compiled from "./temp/01.html" */ ?>
<?php /*%%SmartyHeaderCode:94253808857b28e263f7655-17175422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '7ad7e6a3f3dfa498c89c91aa77ee143e2ec2c001' =>
    array (
      0 => './temp/01.html',
      1 => 1471319945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94253808857b28e263f7655-17175422',
  'function' =>
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57b28e26439639_43605267',
  'variables' =>
  array (
    'man' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b28e26439639_43605267')) {function content_57b28e26439639_43605267($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><?php echo $_smarty_tpl->tpl_vars['man']->value->name;?>

        <?php echo $_smarty_tpl->tpl_vars['man']->value->sayhi();?>

        <!-- <?php print_r($_smarty_tpl->tpl_vars['man']->value); ?> -->

    </h2>
  </body>
</html>
<?php }} ?>
