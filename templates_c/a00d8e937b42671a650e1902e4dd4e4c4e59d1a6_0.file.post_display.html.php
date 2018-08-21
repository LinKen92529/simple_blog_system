<?php
/* Smarty version 3.1.32, created on 2018-08-21 11:47:17
  from 'D:\UniServerZ\www\yukino\templates\post_display.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7bedb5e6a481_80771840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00d8e937b42671a650e1902e4dd4e4c4e59d1a6' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\post_display.html',
      1 => 1534848434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../uploads/post/".((string)$_smarty_tpl->tpl_vars[\'post\']->value[\'post_sn\'])."/".((string)$_smarty_tpl->tpl_vars[\'post\']->value[\'post_sn\']).".html' => 1,
  ),
),false)) {
function content_5b7bedb5e6a481_80771840 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</h1>
<br>
<center>
    <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
" class="img-thumbnail"  data-action="zoom">
</center>
<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
    <br>
    <a href="post.php?op=post_form&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
" class="btn btn-success">編輯文章</a>
    <a href="javascript:delete_post('<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
')" class="btn btn-danger">刪除文章</a>
    <br>
<?php }?>
<br>
<div style="font-size: 20px;word-wrap: break-word;"><?php $_smarty_tpl->_subTemplateRender("file:../uploads/post/".((string)$_smarty_tpl->tpl_vars['post']->value['post_sn'])."/".((string)$_smarty_tpl->tpl_vars['post']->value['post_sn']).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
<br>
<div class="col-md-12" style="color: greenyellow">
    <div class="row">   
        <i class="fas fa-user"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_owner'];?>
</i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fas fa-clock"> <?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
</i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fas fa-users">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['post']->value['post_counter'];?>
</i>
    </div>
</div>
<br>
<i class="fas fa-tag" style="color: rgba(161, 11, 190, 0.877)">標籤</i>
<br>
<br>
<div class="row">
&nbsp;&nbsp;
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['tag']->value != '') {?>
        <div class="rounded" style="background-color: rgb(247, 176, 25);padding-right: 5px;padding-left: 5px;margin-bottom: 10px;">
            <a href="post.php?op=find_tag&keyword=<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" style="color: white;">
                <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

            </a>
        </div>
        &nbsp;&nbsp;
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<br>
<h1>留言區</h1>
<?php if (isset($_smarty_tpl->tpl_vars['post']->value['cmt']) && $_smarty_tpl->tpl_vars['post']->value['cmt'] != '') {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['cmt'], 'cmt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->value) {
?>
        <div class="row">
            <div class="col-md-1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['user_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['user_sn'];?>
" class="rounded" style="width: 50px">
            </div>
            <div class="col-md-8">
                <i class="fas fa-clock" style="color: rgb(25, 252, 252)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_date'];?>
</i>
                <br>
                <?php echo $_smarty_tpl->tpl_vars['cmt']->value['user_name'];?>
說：
                <div style="word-wrap: break-word;"><?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_content'];?>
</div>
            </div>
            <div class="col-md-3">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['cmt']->value['user_sn'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['is_admin']->value || isset($_smarty_tpl->tpl_vars['now_user_sn']->value) && $_smarty_tpl->tpl_vars['now_user_sn']->value == $_prefixVariable1) {?>
                    <a href="javascript:delete_cmt('<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
', '<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
')" class="btn btn-sm btn-danger">刪除留言</a>
                    <a href="cmt.php?op=cmt_form&cmt_sn=<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
" class="btn btn-sm btn-info">編輯留言</a>
                <?php }?>
                <div>
                    <br>
                    <?php if ($_smarty_tpl->tpl_vars['is_user']->value) {?>
                        <a href="javascript:reply('<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cmt']->value['post_sn'];?>
')" id="reply_href_<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
">
                            <i class="fas fa-reply" style="color: rgb(14, 243, 14)"> 回覆</i>
                        </a>
                    <?php } else { ?>
                        <i class="fas fa-reply" style="color: rgb(14, 243, 14)"> 登入後回覆</i>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['cmt']->value['reply']) && $_smarty_tpl->tpl_vars['cmt']->value['reply'] != '') {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmt']->value['reply'], 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_sn'];?>
" class="rounded" style="width: 50px;">
                    </div>
                    <div class="col-md-7">
                        <i class="fas fa-clock" style="color: rgb(248, 244, 7)"><?php echo $_smarty_tpl->tpl_vars['reply']->value['cmt_date'];?>
</i>
                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_name'];?>
回覆說：
                        <div style="word-wrap: break-word;"><?php echo $_smarty_tpl->tpl_vars['reply']->value['cmt_content'];?>
</div>
                    </div>
                    <div class="col-md-3">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['reply']->value['user_sn'];
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['is_top']->value || isset($_smarty_tpl->tpl_vars['now_user_sn']->value) && $_smarty_tpl->tpl_vars['now_user_sn']->value == $_prefixVariable2) {?>
                            <a href="javascript:delete_cmt('<?php echo $_smarty_tpl->tpl_vars['reply']->value['cmt_sn'];?>
', '<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
')" class="btn btn-sm btn-danger">刪除留言</a>
                            <a href="cmt.php?op=cmt_form&cmt_sn=<?php echo $_smarty_tpl->tpl_vars['reply']->value['cmt_sn'];?>
&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
" class="btn btn-sm btn-info">編輯留言</a>
                        <?php }?>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <br>
        <div class="col-md-12" id="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['cmt_sn'];?>
"></div>
        <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    &nbsp;<div>暫時還沒有留言喔QAqqqqq</div>
<?php }?>
<br>
<div class="col-md-12">
    <h1>發表回響</h1>
    <?php if ($_smarty_tpl->tpl_vars['is_user']->value) {?>
        <form action="cmt.php" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <textarea class="form-control" name="cmt_content" id="cmt_content" placeholder="發表回響"></textarea>
            </div>
            <input type="hidden" name="op" value="insert_cmt">
            <input type="hidden" name="post_sn" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
">
            <button type="submit" class="btn btn-primary">發表</button>
        </form>
    <?php } else { ?>
        <div>請先登入!</div>
    <?php }?>
</div>
<?php echo '<script'; ?>
 src="plugin/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="plugin/bootstrap-sweetalert/sweet-alert.css">
<?php echo '<script'; ?>
>
    function delete_post(post_sn) {
        swal({
                title: "刪除文章",
                text: "將永久刪除該篇文章",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "確認",
                closeOnConfirm: false,
            },
            function () {
                location.href = "post.php?op=delete_post&post_sn=" + post_sn;
                swal("刪除完畢", "後悔來不及了030", "success");
            });
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function delete_cmt(cmt_sn, post_sn) {
        swal({
                title: "刪除留言",
                text: "將永久刪除該則留言",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "確認",
                closeOnConfirm: false,
            },
            function () {
                location.href = "cmt.php?op=delete_cmt&cmt_sn=" + cmt_sn + "&post_sn=" + post_sn;
                swal("刪除完畢", "後悔來不及了030", "success");
            });
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function reply(cmt_sn ,post_sn) {
        $("#" + cmt_sn).append("<form action=\"cmt.php\" method=\"POST\" role=\"form\"><div class=\"form-group\"><textarea class=\"form-control\" name=\"cmt_content\" placeholder=\"回覆留言\"></textarea></div><input type=\"hidden\" name=\"op\" value=\"cmt_reply\"><input type=\"hidden\" name=\"post_sn\" value=\"" + post_sn + "\"><input type=\"hidden\" name=\"cmt_sn\" value=\"" + cmt_sn +"\"><button type=\"submit\" class=\"btn btn-primary\">回覆</button></form>")
        $("#reply_href_" + cmt_sn).attr("href", "javascript:toggle(" + cmt_sn + ")");
    }
    function toggle(cmt_sn) {
        $("#" + cmt_sn).toggle();
    }
<?php echo '</script'; ?>
><?php }
}
