<?php
require_once "header.php";
require_folder("./function/post/");

$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$post_sn  = isset($_REQUEST['post_sn']) ? my_filter($_REQUEST['post_sn'], "int") : 0;
$class_sn = isset($_REQUEST['class_sn']) ? my_filter($_REQUEST['class_sn'], "int") : 0;
$keyword  = isset($_REQUEST['keyword']) ? my_filter($_REQUEST['keyword'], "string") : '';

switch ($op) {
    case 'insert_post':
        if(insert_post($class_sn)) {
            header("location:{$_SERVER['PHP_SELF']}");
        } else {
            header("location:index.php");
        }
        break;

    case 'post_create':
        include_once "function/class/class_list.php";
        class_list();
        break;

    case 'post_display':
        post_display($post_sn);
        break;

    case 'post_form':
        include_once "function/class/class_list.php";
        class_list();
        post_form($post_sn);
        break;

    case 'update_post':
        update_post($post_sn, $class_sn);
        header("location:post.php?op=post_display&post_sn={$post_sn}");
        break;

    case 'my_post':
        my_post();
        break;

    case 'delete_post':
        delete_post($post_sn);
        header("location:index.php");
        break;

    case 'find_tag':
        find_tag($keyword);
        break;

    case 'search_result':
        search_result($keyword);
        break;

    case 'upload_class_sn':
        upload_class_sn($post_sn, $class_sn);
        break;

    case 'post_status':
        post_status($post_sn);
        break;
    
    default:
        $op = "post_list";
        break;
}

require_once "footer.php";