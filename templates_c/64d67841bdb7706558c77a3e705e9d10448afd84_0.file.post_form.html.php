<?php
/* Smarty version 3.1.32, created on 2018-07-20 10:29:21
  from 'D:\UniServerZ\www\yukino\templates\post_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b51ab71dcb598_64613812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d67841bdb7706558c77a3e705e9d10448afd84' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\post_form.html',
      1 => 1532078844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b51ab71dcb598_64613812 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
<h1>發布文章</h1>
<form action="post.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-4 control-label">文章標題</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="post_title" id="post_id" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">文章內容</label>
        <div class="col-md-8">
            <textarea class="form-control" name="post_content" id="post_content" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</textarea>
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
            <img src="uploads/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
/normal_post_pic.png" alt="post_img" id="post_img" class="img-thumbnail">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">文章標籤</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="post_tag" name="post_tag" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_tag'];?>
"> 
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-md-2">
            <input type="hidden" name="post_sn" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
">
            <input type="hidden" name="op" value="update_post">
            <button type="submit" class="btn btn-block btn-primary">發布</button>
        </div>
    </div>
</form>
<?php } else { ?>
你沒有權限喔=QwQ=
<?php }
}
}
