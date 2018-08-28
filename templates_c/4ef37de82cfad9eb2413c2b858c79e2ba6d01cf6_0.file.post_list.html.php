<?php
/* Smarty version 3.1.32, created on 2018-08-28 14:21:20
  from 'D:\UniServerZ\www\yukino\templates\post_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b854c507b9013_96263728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef37de82cfad9eb2413c2b858c79e2ba6d01cf6' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\post_list.html',
      1 => 1535462303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b854c507b9013_96263728 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="align-items: center;justify-content: center;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_post']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
        <div class="col-md-3" style="background-color: rgba(0, 0, 0, 0.7);margin-bottom: 20px;padding: 20px;margin-right: 20px;">
            <div class="col-md-12">
                <a href="post.php?op=post_display&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
"><h4 style="font-style: oblique;"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</h4></a>
            </div>
             <div class="col-md-12">
                <center>
                    <a href="post.php?op=post_display&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
" class="img-thumbnail">
                    </a>
                </center>
            </div>
            <br>
            <div class="col-md-12" style="color: greenyellow">
                <div class="row">
                    <i class="fas fa-clock"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
</i>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-users">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['post']->value['post_counter'];?>
</i>
                </div>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <br>
</div><?php }
}
