<?php
/* Smarty version 3.1.32, created on 2018-08-23 09:36:38
  from 'D:\UniServerZ\www\yukino\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e721646f8d5_47335608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c18bcdd5d74f16e2ded127960ba86bfc0ea5dd2' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\index.html',
      1 => 1535013395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post_list.html' => 1,
    'file:find_tag.html' => 1,
    'file:history.html' => 1,
    'file:user_register.html' => 1,
    'file:user_form.html' => 1,
    'file:user_list.html' => 1,
    'file:post_create.html' => 1,
    'file:post_display.html' => 1,
    'file:post_form.html' => 1,
    'file:cmt_form.html' => 1,
    'file:search_result.html' => 1,
    'file:web_setting.html' => 1,
    'file:webset_bg.html' => 1,
    'file:user_datail.html' => 1,
    'file:user_login.html' => 1,
    'file:search.html' => 1,
    'file:self.html' => 1,
  ),
),false)) {
function content_5b7e721646f8d5_47335608 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['system_name']->value;?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugin/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <?php echo '<script'; ?>
 src="plugin/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugin/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                window.setInterval(getTime, 1000)
                function getTime() {
                    var today = new Date();
                    var currentDateTime =
                    today.getFullYear() + ' 年 ' +
                    (today.getMonth()+1) + ' 月 ' +
                    today.getDate() + ' 日 ' +
                    today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds();
                    $("#date").html(currentDateTime);
                }
                $('.waifu').mouseover(function() {
                    $('.waifu-tools').css('display', 'block');
                });
                $('.waifu').mouseout(function() {
                    $('.waifu-tools').css('display', 'none');
                });
                var sc_width = $(window).width;
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <nav class="navbar navbar-dark" id="head_pill">
            <a class="navbar-brand" href="index.php" id="home">ARASIのストーリー</a>
            <span id="date"></span>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <?php if ($_smarty_tpl->tpl_vars['op']->value == 'post_list') {?>
                    <div class="col-md-7" style="margin-top: 20px">
                        <?php $_smarty_tpl->_subTemplateRender('file:post_list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'find_tag') {?>
                    <div class="col-md-7" style="margin-top: 20px">
                        <?php $_smarty_tpl->_subTemplateRender('file:find_tag.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                <?php } else { ?>
                    <div id="system_main" class="col-md-7">
                        <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                            <div class="text-danger bg-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['op']->value == 'history') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:history.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'user_register') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:user_register.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'user_form') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:user_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'user_list') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:user_list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "post_create") {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:post_create.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'post_display') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:post_display.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'post_form') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:post_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'cmt_form') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:cmt_form.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "search_result") {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:search_result.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "web_setting") {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:web_setting.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "webset_bg") {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:webset_bg.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    </div>
                <?php }?>
                <div class="col-md-3" id="system_side">
                    <div class="col-md=12" id="user_area">
                        <?php if ($_smarty_tpl->tpl_vars['is_user']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:user_datail.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:user_login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    </div>
                    <div class="col-md-12" id="search">
                        <?php $_smarty_tpl->_subTemplateRender('file:search.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="col-md-12" id="self">
                        <?php $_smarty_tpl->_subTemplateRender('file:self.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="waifu justify-content-end" class="pull-right">
            <div class="waifu-tips"></div>
            <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
            <div class="waifu-tools" style="font-size: 14px;text-align: center;display: none;">
                <a href="index.php" style="color: rgb(72, 194, 241);"><i class="fas fa-home"></i></a>
                <a href="javascript:void(0)" style="color: rgb(72, 194, 241);" id="fa-times"><i class="fas fa-times"></i></a>
            </div>
        </div>
        <div id="system_foot">
            <div class="row">
                <div class="col-md-2">TFcis20 Note Web</div>
            </div>
        </div>
    </body>
    <?php echo '<script'; ?>
 async src="plugin/live2d/waifu-tips.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="plugin/live2d/live2d.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        loadlive2d("live2d", "plugin/Pio/model.json");
        $("#fa-times").click(function() {
            $(".waifu").css("display", "none");
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
        });
    <?php echo '</script'; ?>
>
</html><?php }
}
