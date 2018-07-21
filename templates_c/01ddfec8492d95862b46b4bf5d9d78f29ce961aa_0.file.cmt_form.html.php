<?php
/* Smarty version 3.1.32, created on 2018-07-21 06:56:08
  from 'D:\UniServerZ\www\yukino\templates\cmt_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b52caf8373552_60718489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ddfec8492d95862b46b4bf5d9d78f29ce961aa' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\cmt_form.html',
      1 => 1532152564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b52caf8373552_60718489 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>編輯留言</h1>
<form action="cmt.php" method="post" class="form-horizontal">
    <div class="form-group">
        <textarea class="form-control" name="cmt_content" id="cmt_content" placeholder="請輸入留言" required><?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_content'];?>
</textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="post_sn" value="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['post_sn'];?>
">
        <input type="hidden" name="cmt_sn" value="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
">
        <input type="hidden" name="op" value="update_cmt">
        <button type="submit" class="btn btn-primary">確認</button>
    </div>
</form><?php }
}
