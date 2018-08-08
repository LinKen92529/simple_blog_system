<?php
require_once "header.php";
require_folder("./function/cmt/");
$op      = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$post_sn = isset($_REQUEST['post_sn']) ? my_filter($_REQUEST['post_sn'], "int") : 0;
$cmt_sn  = isset($_REQUEST['cmt_sn']) ? my_filter($_REQUEST['cmt_sn'], "int") : 0;

switch ($op) {
    case 'insert_cmt':
        insert_cmt($post_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");
        break;

    case 'delete_cmt':
        delete_cmt($cmt_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");
        break;

    case 'update_cmt':
        update_cmt($cmt_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");
        break;

    case 'cmt_form':
        cmt_form($cmt_sn);
        break;

    case 'cmt_reply':
        cmt_reply($cmt_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");
        break;
    
    default:
        # code...
        break;
}

require_once "footer.php";