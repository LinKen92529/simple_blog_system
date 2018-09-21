<?php
/* Smarty version 3.1.32, created on 2018-08-22 03:17:49
  from 'D:\UniServerZ\www\yukino\templates\user_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7cc7cdf2c029_06945609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b753135cc1ec436105caf6c9e7f2f5e51cc7e9e8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_login.html',
      1 => 1534904157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7cc7cdf2c029_06945609 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="user.php" method="post" role="form" class="form-horizontal">
    <div class="form-group">
        <label class="col-form-label">帳號</label>
        <div>
            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="請輸入帳號">
        </div>
    </div>
    <div class="form-group">
        <label class="col-form-label">密碼</label>
        <div>
            <input type="password" class="form-control" name="user_pw" id="user_pw" placeholder="請輸入密碼">
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label class="col-md-6 col-form-label">
                <a href="user.php?op=user_register">註冊</a>
            </label>
            <div class="col-md-6">
                <input type="hidden" name="op" value="user_login">
                <button type="submit" class="btn btn-block btn-warning">登入</button>
            </div>
        </div>
    </div>
</form><?php }
}
