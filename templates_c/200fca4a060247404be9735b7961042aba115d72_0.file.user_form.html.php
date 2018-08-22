<?php
/* Smarty version 3.1.32, created on 2018-08-22 08:33:34
  from 'D:\UniServerZ\www\yukino\templates\user_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7d11cee50f67_96381446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200fca4a060247404be9735b7961042aba115d72' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\user_form.html',
      1 => 1534923190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7d11cee50f67_96381446 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                $("#user_img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#user_pic").change(function(){
            readURL(this);
        });
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['is_user']->value && $_smarty_tpl->tpl_vars['user']->value['user_sn'] == $_smarty_tpl->tpl_vars['now_user_sn']->value || $_smarty_tpl->tpl_vars['is_admin']->value) {?>
    <h1>修改基本資料</h1>
    <br>
    <form action="user.php" id="user_form" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-md-6">
                <input type="text" class="form-control" name="user_name" id="user_id" placeholder="請輸入修改後的名稱" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="請輸入修改後的帳號" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 has-error">
                <input type="password" class="form-control" name="user_pw" id="user_pw" placeholder="若無需要修改密碼則不需要填入">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="請輸入修改後的信箱" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
">
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['is_top']->value) {?>
            <br>
            <div class="form-group">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_right'] == "user") {?>
                    <a href="javascript:add_admin('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-warning">新增管理員</a>
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['user_right'] == "admin") {?>
                    <a href="javascript:delete_admin('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-danger">刪除管理員</a>
                <?php }?>
            </div>
        <?php }?>
        <div class="form-group">
            <label class="col-md-2 control-label">上傳頭貼</label>
            <div class="col-md-4">
                <input type="file" name="user_pic" id="user_pic" accept="image/gif, image/jpeg, image/jpg, image/png">
            </div>
            <br>
            <label class="col-md-2 control-label">圖片預覽</label>
            <div class="col-md-6">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" id="user_img" class="img-thumbnail">
            </div>
        </div>
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_right'] != "admin" && $_smarty_tpl->tpl_vars['user']->value['user_right'] != "top") {?>
                    <a href="javascript:delete_user('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-danger">刪除帳號</a>
                <?php }?>
            <?php }?>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <input type="hidden" name="user_sn" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
                <input type="hidden" name="op" value="update_user">
                <button type="submit" class="btn btn-info">修改資料</button>
            </div>
        </div>
    </form>
<?php }
echo '<script'; ?>
 src="plugin/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="plugin/bootstrap-sweetalert/sweet-alert.css">
<?php echo '<script'; ?>
>
    function delete_user(user_sn) {
        swal({
            title: "刪除使用者",
            text: "將永久刪除該使用者",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "確認",
            closeOnConfirm: false,
        },
        function() {
            location.href="user.php?op=delete_user&user_sn=" + user_sn;
            swal("刪除完畢", "後悔來不及了030", "success");
        });
    }
    function add_admin(user_sn) {
        swal({
            title: "新增管理員",
            text: "他即將擁有權限",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-warning",
            confirmButtonText: "確認",
            closeOnConfirm: false,
        },
        function() {
            location.href="user.php?op=add_admin&user_sn=" + user_sn;
            swal("新增完畢", "後悔來不及了030", "success");
        });
    }
    function delete_admin(user_sn) {
        swal({
            title: "刪除管理員",
            text: "將刪除他的管理員權限",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "確認",
            closeOnConfirm: false,
        },
        function() {
            location.href="user.php?op=delete_admin&user_sn=" + user_sn;
            swal("刪除完畢", "後悔來不及了030", "success");
        });
    }
<?php echo '</script'; ?>
><?php }
}
