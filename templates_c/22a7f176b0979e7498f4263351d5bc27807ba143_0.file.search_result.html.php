<?php
/* Smarty version 3.1.32, created on 2018-08-10 01:40:49
  from 'D:\UniServerZ\www\yukino\templates\search_result.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6cdf11629e74_21639633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a7f176b0979e7498f4263351d5bc27807ba143' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\search_result.html',
      1 => 1533861435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6cdf11629e74_21639633 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['find_result']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['find_result']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
        <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.7);margin-bottom: 20px;min-height: 500px;padding: 30px;">
            <div class="col-md-12">
                <a href="post.php?op=post_display&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
"><h1 style="font-style: oblique;"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</h1></a>
            </div>
            <br>
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
            <div class="col-md-12" id="post_content" style="font-size: 20px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"> 
                <a href="post.php?op=post_display&post_sn=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_sn'];?>
">(點擊查看全文...)</a>
            </div>
            <br>
            <div class="col-md-12" style="color: greenyellow">
                <div class="row">
                    <i class="fas fa-user"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_owner'];?>
</i>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-clock"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
</i>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-users">瀏覽人數：<?php echo $_smarty_tpl->tpl_vars['post']->value['post_counter'];?>
</i>
                </div>
            </div>
            <br>
            <i class="fas fa-tag" style="color: rgba(161, 11, 190, 0.877);">標籤</i>
            <br>
            <br>
            <div class="row">
                &nbsp;&nbsp;
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['post_tag'], 'tag');
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
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.7);margin-bottom: 20px;min-height: 500px;padding: 30px;">
        <h1>沒有搜尋結果</h1>
    </div>
<?php }
}
}
