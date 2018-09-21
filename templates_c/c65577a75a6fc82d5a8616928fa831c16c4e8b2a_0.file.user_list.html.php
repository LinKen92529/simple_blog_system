<?php
/* Smarty version 3.1.32, created on 2018-08-23 18:01:21
  from 'D:\UniServerZ\www\yukino\templates\user_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7ee861c0ea90_16783564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65577a75a6fc82d5a8616928fa831c16c4e8b2a' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_list.html',
      1 => 1535043678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7ee861c0ea90_16783564 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
    <h1>使用者列表</h1>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>使用者姓名</th>
                <th>使用者帳號</th>
                <th>使用者信箱</th>
                <th>使用者權限</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_user']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tbody>
                <tr>
                    <th scope="row"><a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a></th>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_right'];?>
</td>
                </tr>
            </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php }
}
}
