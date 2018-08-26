<?php
/* Smarty version 3.1.32, created on 2018-08-26 10:18:37
  from 'D:\UniServerZ\www\yukino\templates\post_create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b82706deac139_32332336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969b75733d6370577c11e446202e17c651932ca9' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\post_create.html',
      1 => 1535275114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b82706deac139_32332336 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#post_img").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#post_pic").change(function () {
            readURL(this);
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="plugin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
<h1>發布文章</h1>
<form action="post.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-4 control-label">文章標題</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="post_title" id="post_id" placeholder="請輸入文章標題">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">文章內容</label>
        <div class="col-md-12">
            <textarea class="form-control" name="post_content" id="post_content" placeholder="請輸入文章內容"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">搜尋標籤</label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" name="tag_search" id="tag_search" placeholder="請輸入標籤名稱">
            <div class="input-group-append">
                <a href="javascript:serach_tag()" class="btn btn-outline-info">搜尋</a>
            </div>
        </div>
        <br>
        <label class="col-md-4 control-label">標籤內容</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="tag_name" id="tag_name" placeholder="這裡會顯示你選擇的標籤的編號" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">文章封面</label>
        <div class="col-md-8">
            <input type="file" name="post_pic" id="post_pic" accept="image/gif, image/jpeg, image/jpg, image/png">
        </div>
        <br>
        <label class="col-md-2 control-label">圖片預覽</label>
        <div class="col-md-6">
            <img src="img/normal_get_pic.jpg" alt="post_img" id="post_img" class="img-thumbnail">
        </div>
    <!-- <div class="form-group">
        <label class="col-md-4 control-label">文章標籤</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="post_tag" name="post_tag"> 
        </div>
    </div> -->
    <br>
    
    </div>
    <div class="form-group">
        <div class="col-md-2">
            <input type="hidden" name="op" value="insert_post">
            <button type="submit" class="btn btn-block btn-primary">發布</button>
        </div>
    </div>
</form>
<?php } else { ?>
你沒有權限喔=QwQ=
<?php }
echo '<script'; ?>
>
    CKEDITOR.replace("post_content", {
        removeButtons: "Image"
    });
<?php echo '</script'; ?>
><?php }
}
