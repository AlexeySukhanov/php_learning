<?php
/* Smarty version 3.1.33, created on 2019-10-12 20:39:08
  from '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/example/smarty_dirs/templates/example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da21dccddf336_59651819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f10d2e59e55513b1d02ac733535c1da788545c' => 
    array (
      0 => '/home/user/Work/domains/php-learning.loc/php_learning/saveleva/template_engines/smarty/example/smarty_dirs/templates/example.tpl',
      1 => 1570904142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da21dccddf336_59651819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "example.conf", null, 0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
</head>
<body>
    <ol>
        <?php
$__section_art_0_loop = (is_array(@$_loop=((string)$_smarty_tpl->tpl_vars['num_rows']->value)) ? count($_loop) : max(0, (int) $_loop));
$__section_art_0_total = $__section_art_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_art'] = new Smarty_Variable(array());
if ($__section_art_0_total !== 0) {
for ($__section_art_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index'] = 0; $__section_art_0_iteration <= $__section_art_0_total; $__section_art_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index']++){
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['full_text']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_art']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_art']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index'] : null)];?>
</a>
                <br>
                (<?php echo $_smarty_tpl->tpl_vars['author']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_art']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index'] : null)];?>
)
                <p><?php echo $_smarty_tpl->tpl_vars['short_text']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_art']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_art']->value['index'] : null)];?>
</p>
            </li>
        <?php
}
}
?>
    </ol>
</body>
</html><?php }
}
