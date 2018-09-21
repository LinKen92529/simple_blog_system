<?php
/* Smarty version 3.1.32, created on 2018-08-10 07:44:02
  from 'D:\UniServerZ\www\yukino\templates\search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6d3432aaa140_42975095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8e434500b5763afec8029cf0e6d3fc9058b1ec' => 
    array (
      0 => 'D:\\UniServerZ\\www\\yukino\\templates\\search.html',
      1 => 1533883437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6d3432aaa140_42975095 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="post.php" method="POST" role="form">
    <div class="input-group">
        <input name="keyword" id="keyword" type="text" class="form-control" placeholder="請輸入關鍵字" aria-label="請輸入關鍵字" aria-describedby="basic-addon">
        <div class="input-group-append">
            <input type="hidden" name="op" value="search_result">
            <button type="submit" class="btn btn-outline-primary">搜尋</button>
        </div>
    </div>
    <br>
    <div class="form-group">
        <select class="form-control" name="target" id="target">
            <option value="post_title">搜索文章</option>
            <option value="user_name">搜索作者</option>
        </select>
    </div>
</form><?php }
}
