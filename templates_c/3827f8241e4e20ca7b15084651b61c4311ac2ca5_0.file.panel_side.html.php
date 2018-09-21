<?php
/* Smarty version 3.1.32, created on 2018-07-19 06:00:48
  from 'D:\UniServerZ\www\yukino\templates\panel_side.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b501b00c8b404_17773386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3827f8241e4e20ca7b15084651b61c4311ac2ca5' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\panel_side.html',
      1 => 1531976446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b501b00c8b404_17773386 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="color: greenyellow">
    <h4>近期新增面板</h4>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel_side']->value, 'panel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
?>
    <div class="text-skyblue" style="font-size: 20px"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
</div>
    <br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
