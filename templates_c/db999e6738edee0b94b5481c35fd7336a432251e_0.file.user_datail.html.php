<?php
/* Smarty version 3.1.32, created on 2018-08-21 01:31:41
  from 'D:\UniServerZ\www\yukino\templates\user_datail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b5d6d4526f0_88459439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db999e6738edee0b94b5481c35fd7336a432251e' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_datail.html',
      1 => 1534811487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b5d6d4526f0_88459439 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-6">
        <img src="<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['pic'];?>
" class="rounded-circle">
    </div>
    <div class="col-md-6">
        <div class="row">
            <div style="font-size: 20px">
                <div>名前： <?php echo $_smarty_tpl->tpl_vars['user_detail']->value['user_name'];?>
</div>
                <div>権限： <?php echo $_smarty_tpl->tpl_vars['user_detail']->value['user_right'];?>
</div>
            </div>
        </div>
    </div>
</div>
<br>
<a href="index.php?op=post_list" class="btn btn-block btn-primary">回到主頁</a>
<?php if ($_smarty_tpl->tpl_vars['is_top']->value) {?>
    <a href="webset.php?op=web_setting" class="btn btn-block btn-purple">管理網站</a>
<?php }
if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
    <a href="user.php?op=user_list" class="btn btn-block btn-success">使用者列表</a>
    <a href="post.php?op=post_create" class="btn btn-block btn-info">發布文章</a>
<?php }?>
<a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user_detail']->value['user_sn'];?>
" class="btn btn-block btn-warning">修改資料</a>
<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a><?php }
}
