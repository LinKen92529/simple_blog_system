<?php
/* Smarty version 3.1.32, created on 2018-07-18 06:27:31
  from 'D:\UniServerZ\www\yukino\templates\panel_create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4ecfc3e4a100_00512175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03b8808665975d4f417f157ddbef8fae0ae89db3' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\panel_create.html',
      1 => 1531891648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4ecfc3e4a100_00512175 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="plugin/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#panel_img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#panel_pic").change(function () {
            $("#img_preview").html("<img alt=\"panel_img\" id=\"panel_img\" class=\"img-thumbnail\">");
            readURL(this);
        });
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['is_user']->value) {?>
    <h1>新增面板</h1>
    <form action="panel.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-4 control-label">面板標題</label>
            <div class="col-md-8">
                <input type="text" class="form-control" maxlength="20" name="panel_title" id="panel_title" placeholder="請輸入面板標題" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">面板簡介</label>
            <div class="col-md-8">
                <textarea class="form-control" maxlength="50" name="panel_comment" id="panel_comment" placeholder="請輸入面板簡介" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">上傳圖片</label>
            <div class="col-md-8">
                <input type="file" name="panel_pic" id="panel_pic" accept="image/gif, image/jpeg, image/jpg, image/png">
            </div>
            <br>
            <div class="col-md-6" id="img_preview"></div>
        </div>
        <br>
        <div class="col-md-2">
            <input type="hidden" name="op" value="insert_panel">
            <button type="submit" class="btn btn-primary">新增</button>
        </div>
    </form>
<?php }
}
}
