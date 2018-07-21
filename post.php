<?php
require_once "header.php";
require_folder("./function/post/");

$op      = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$post_sn = isset($_REQUEST['post_sn']) ? my_filter($_REQUEST['post_sn'], "int") : 0;

switch ($op) {
    case 'insert_post':
        if(insert_post()) {
            header("location:{$_SERVER['PHP_SELF']}");
        } else {
            header("location:index.php");
        }
        break;

    case 'post_create':
        break;

    case 'post_display':
        post_display($post_sn);
        break;

    case 'post_form':
        post_form($post_sn);
        break;

    case 'update_post':
        update_post($post_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");

    case 'delete_post':
        delete_post($post_sn);
        header("location:index.php");
        break;
    
    default:
        $op = "post_list";
        break;
}

require_once "footer.php";