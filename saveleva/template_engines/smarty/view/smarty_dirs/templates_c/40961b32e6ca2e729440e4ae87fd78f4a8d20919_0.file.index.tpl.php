<?php
/* Smarty version 3.1.33, created on 2019-10-10 10:40:37
  from '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/view/smarty_dirs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9eee85e5aa08_07448027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40961b32e6ca2e729440e4ae87fd78f4a8d20919' => 
    array (
      0 => '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/view/smarty_dirs/templates/index.tpl',
      1 => 1570696837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9eee85e5aa08_07448027 (Smarty_Internal_Template $_smarty_tpl) {
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
! <br>
Ваш почтовый индекс: <?php echo $_smarty_tpl->tpl_vars['index']->value[0];?>

<br>
Ваш второй почтовый индекс: <?php echo $_smarty_tpl->tpl_vars['index']->value[1];?>

<br>
Ваш адрес: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['street']->value;?>

<br>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Intro');?>
</p>



<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "main.conf", "Customer", 0);
?>

<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "varname1", "varname2", null);?>
    <p>captured content</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'varname1');?>
 <?php echo $_smarty_tpl->tpl_vars['varname2']->value;?>
 
<?php
$__section_section_name_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['loop1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_section_name_0_total = $__section_section_name_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_section_name'] = new Smarty_Variable(array());
if ($__section_section_name_0_total !== 0) {
for ($__section_section_name_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_section_name']->value['index'] = 0; $__section_section_name_0_iteration <= $__section_section_name_0_total; $__section_section_name_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_section_name']->value['index']++){
?>
    <li><?php echo $_smarty_tpl->tpl_vars['loop1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_section_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_section_name']->value['index'] : null)];?>
</li> <?php
}
}
?>

<br>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loop2']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    <li>Ключ: <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
; Значение: <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['name']->value == "Жопа") {?>
    <p>Добро пожаловать, Жопа</p>
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "Нинва") {?>
    <p>Добро пожаловать, Нина </p>
<?php } else { ?>
    <p>Представься, мразь</p>
<?php }?>






</body>
</html><?php }
}
