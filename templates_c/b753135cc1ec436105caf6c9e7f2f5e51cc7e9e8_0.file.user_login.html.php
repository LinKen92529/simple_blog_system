<?php
/* Smarty version 3.1.32, created on 2018-07-17 03:51:05
  from 'D:\UniServerZ\www\yukino\templates\user_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4d5999bb9291_78972852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b753135cc1ec436105caf6c9e7f2f5e51cc7e9e8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_login.html',
      1 => 1531795817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d5999bb9291_78972852 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="user.php" method="post" role="form" class="form-horizontal">
    <div class="form-group">
        <label class="col-md-4 control-label">帳號：</label>
        <div class="col-md-12">
            <input type="text" name="user_id" id="user_id" class="form-control" placeholder="請輸入帳號">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">密碼：</label>
        <div class="col-md-12">
            <input type="password" name="user_pw" id="user_pw" class="form-control" placeholder="請輸入密碼">
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-4 control-label">
                <a href="index.php?op=user_register" class="btn btn-link">註冊</a>
            </label>
            <div class="col-md-12">
                <input type="hidden" name="op" value="user_login">
                <button type="submit" name="button" class="btn btn-warning btn-block">登入</button>
            </div>
        </div>
    </div>
</form><?php }
}
