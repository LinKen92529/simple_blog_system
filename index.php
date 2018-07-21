<?php
require_once 'header.php';
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';

switch ($op) {

    case 'post_list':
        break;

    default:
        $op = "post_list";
        break;
}

require_once 'footer.php';