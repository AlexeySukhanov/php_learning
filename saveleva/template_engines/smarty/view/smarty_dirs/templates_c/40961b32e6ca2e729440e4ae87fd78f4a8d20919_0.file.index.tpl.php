<?php
/* Smarty version 3.1.33, created on 2019-10-10 00:20:07
  from '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/view/smarty_dirs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e5d1715a8a5_68284753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40961b32e6ca2e729440e4ae87fd78f4a8d20919' => 
    array (
      0 => '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/view/smarty_dirs/templates/index.tpl',
      1 => 1570659604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e5d1715a8a5_68284753 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title> </head>
<body>

Привет, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>
!
<br>
Ваш почтовый индекс: <?php echo $_smarty_tpl->tpl_vars['index']->value[0];?>

<br>
Ваш второй почтовый индекс: <?php echo $_smarty_tpl->tpl_vars['index']->value[1];?>

<br>
Ваш адрес: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['street']->value;?>

<br>

<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Intro');?>
</p>

</body>
</html><?php }
}
