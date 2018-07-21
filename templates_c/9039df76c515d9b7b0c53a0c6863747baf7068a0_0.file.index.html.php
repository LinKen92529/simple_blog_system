<?php
/* Smarty version 3.1.32, created on 2018-07-17 03:46:23
  from 'D:\UniServerZ\www\test\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4d587fed23b3_65425760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9039df76c515d9b7b0c53a0c6863747baf7068a0' => 
    array (
      0 => 'D:\\UniServerZ\\www\\test\\templates\\index.html',
      1 => 1531795579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 2,
    'file:history.html' => 1,
    'file:user_register.html' => 1,
    'file:user_datail.html' => 1,
    'file:user_login.html' => 1,
  ),
),false)) {
function content_5b4d587fed23b3_65425760 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['system_name']->value;?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="plugin/jquery.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <nav class="navbar navbar-dark" id="head_pill">
            <a class="navbar-brand" href="#">ARASIのストーリー</a>
        </nav>
        <div class="container">
            <div class="row">
                <div id="system_main" class="col-md-8">
                    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                        <div class="text-danger bg-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['op']->value == 'main') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:main.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'history') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:history.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'user_register') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:user_register.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:main.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                </div>
                <div class="col-md-3" id="system_side">
                    <?php if ($_smarty_tpl->tpl_vars['is_user']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:user_datail.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:user_login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                </div>
            </div>
        </div>
        <div id="system_foot">
            <div>Version-Alphat-Yukino_Official_System</div>
        </div>
    </body>
</html><?php }
}
