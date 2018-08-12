<?php
/* Smarty version 3.1.32, created on 2018-08-12 12:59:01
  from 'D:\UniServerZ\www\yukino\templates\search_result.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b70210577b9f4_65460619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a7f176b0979e7498f4263351d5bc27807ba143' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\search_result.html',
      1 => 1534075120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b70210577b9f4_65460619 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['find_result']->value)) {?>
    <h1>搜尋結果</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>文章名稱</th>
                <th>文章作者</th>
                <th>文章發布日期</th>
                <th>文章瀏覽人數</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['find_result']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['post_owner'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['post']->value['post_counter'];?>
</td>
                </tr>
            </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php } else { ?>
    <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.7);margin-bottom: 20px;min-height: 500px;padding: 30px;">
        <h1>沒有搜尋結果</h1>
    </div>
<?php }
}
}
