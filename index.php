<?php
require_once 'header.php';
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';

switch ($op) {

    case 'post_list':
        break;

    case 'user_register':
        break;

    case 'webset_bg':
        break;

    case 'history':
        break;

    case 'page_index':
        break;

    default:
        $op = "post_list";
        break;
}

require_once 'footer.php';