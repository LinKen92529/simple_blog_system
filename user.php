<?php
require_once 'header.php';
require_folder('./function/users/');

$op      = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$user_sn = isset($_REQUEST['user_sn']) ? my_filter($_REQUEST['user_sn'], "int") : 0;
$user_id = isset($_REQUEST['user_id']) ? my_filter($_REQUEST['user_id'], "string") : '';

switch ($op) {
    case 'insert_user':
        if ($user_sn = insert_user()) {
            header("location:index.php");
        } else {
            header("location:{$_SERVER['PHP_SELF']}?msg=" . $msg);
        }
        break;

    case 'user_id_judge':
        $user_id = $_POST['user_id'];
        $id_judge = user_id_judge($user_id);
        echo "$id_judge";
        break;
        
    case 'user_email_judge':
        $user_email = $_POST['user_email'];
        $email_judge = user_email_judge($user_email);
        echo "$email_judge";
        break;

    case 'user_login':
        $user_login = user_login($user_id);
        if ($user_login) {
            $result = 's';
            echo $result;
        } else {
            $result = 'f';
            echo $result;
        }
        break;

    case 'user_logout':
        user_logout();
        header("location:index.php?op=panel_list");

    case 'user_form':
        user_form($user_sn);
        break;

    case 'update_user':
        update_user($user_sn);
        if($is_admin) {
            header("location:user.php?op=user_list");
        } else {
            header("location:index.php?op=post_list");
        }
        break;
    
    case 'user_list':
        user_list();
        break;

    case 'delete_user':
        delete_user($user_sn);
        header("location:{$_SERVER['PHP_SELF']}?op=user_list");
        break;

    case 'add_admin':
        add_admin($user_sn);
        header("location:user.php?op=user_form&user_sn={$user_sn}");
        break;
    
    case 'delete_admin':
        delete_admin($user_sn);
        header("location:user.php?op=user_form&user_sn={$user_sn}");
        break;
    
    default:
        break;
}

require_once 'footer.php';
